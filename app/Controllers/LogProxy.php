<?php

/*
	Routes.php:

	use App\Controllers\LogProxy;
	
	$routes->get('listlog', [LogProxy::class, 'list']);
	$routes->get('delete', [LogProxy::class, 'delete']);
*/

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Status;

class LogProxy extends BaseController{
	private $model;

	public function __construct(){
		$this->model = new Status();
	}

	public function list(){
		$filepath = "/var/log/squid/access.log";
		$searchIp = $this->request->getGet('search');
		$searchDate = $this->request->getGet('datelog');

		if(is_file($filepath)){
			$content = file($filepath);
			$line_count = count($content);

			foreach($content as $c){
				$line = preg_split('/\s+/',$c);
				$timestamp = $line[0];
				$date = \DateTime::createFromFormat('U.u', $timestamp);
				$datetime =   $date->format('Y-m-d H:i:s');

				$data = [
					'ip' => $line[2],
					'visited_url' => $line[6],
					'method' => $line[5],
					'request_duration' => $line[1],
					'traffics_size' => $line[4],
					'date' => $datetime
				];

				$tab = $this->model->where('ip', $line[2])
							 ->where('visited_url', $line[6])
							 ->where('method', $line[5])
							 ->where('request_duration', $line[1])
							 ->where('traffics_size', $line[4])
							 ->where('date', $datetime)
							 ->findAll();

				if(count($tab) > 0) continue;
				else $this->model->insert($data);
			}
		}

		$data = [
			'search' => $searchIp,
			'date' => $searchDate,
			'lists' => $this->model->like('ip', '%'.$searchIp.'%')->like('date', '%'.$searchDate.'%')->paginate(10),
			'pager' => $this->model->pager,
		];

		return view('log', $data);
	}

	public function delete(){
		$datedel = $this->request->getGet('datedel');

		if(!empty($datedel)){
			$this->model->like('date', '%'.$datedel.'%')->delete();
		}

		$data = [
			'search' => '',
			'date' => '',
			'lists' => $this->model->paginate(10),
			'pager' => $this->model->pager,
		];

		return view('log', $data);
	}
}
