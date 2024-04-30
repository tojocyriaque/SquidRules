<?php

namespace App\Controllers;

class Traitement extends BaseController
{
    public function getDonner(){
        $num_port=$this->request->getVar('port');
        $type_stockage = $this->request->getVar('contact');
        $format_log =$this->request->getVar('log');
        $hostname =$this->request->getVar('hote');;
        $taille_directory = $this->request->getVAr('stck');
        $taille_cache = $this->request->getVar('taille');
        $min_time = $this->request->getVar('min_time');
        $max_time = $this->request->getVar('max_time');
        $url_never_cache = $this->request->getVar('url_never');
        $url_download = $this->request->getVar('url_download');
      
                if(isset($type_stockage) && $type_stockage == 1){
                    $taille_directory = $this->request->getVar('stck');
                    $swap = $this->request->getVar('rep');
                    $sous_rep = $this->request->getVar('srep');
                    $file_number = $this->request->getVar('file');
                    if(isset($taille_directory) && isset($swap) && isset($sous_rep) && isset($file_number)){
                    $cmd = "sudo sed -i '/cache_dir/d' /etc/squid/conf.d/debian.conf";
                    exec($cmd , $array , $return);
                    

                    $cmd = "sudo sed -i '/cache_mem/d' /etc/squid/squid.conf";
                    exec($cmd , $array , $return);
                    

                    $cmd = "sudo echo 'cache_dir ufs $swap $taille_directory $sous_rep $file_number' >> /etc/squid/squid.conf";
                    exec($cmd , $array , $return);
                    

                    }
                    
                }

                /// Stockage : memory

                else if(isset($type_stockage) && $type_stockage = 2){
                    $taille_directory = $_POST['stck'];
                    $cmd = "sudo sed -i '/cache_dir/d' /etc/squid/conf.d/debian.conf";
                    exec($cmd , $array , $return);
                    exec($this->makeCmd("cache_mem" , $taille_directory) , $array , $return);
                    
                }

                $array = array(); 
                

                
                exec("sudo ls", $array , $return);
               


                if(isset($body_size) && strcmp($body_size,"")) {
                    exec($this->makeCmd("reply_body_max_size" , $body_size ." MB") , $array , $return);
                    
                }

                


                if(isset($num_port) && strcmp($num_port,"")) exec($this->makeCmd("http_port" , $num_port) , $array , $return);
                

                if(isset($taille_cache) && strcmp($taille_cache,"")) exec($this->makeCmd("	maximum_object_size_in_memory" , $taille_cache) , $array , $return);
                

                if(isset($min_time) && strcmp($min_time,"")) exec($this->makeCmd("minimum_expiry_time" , $min_time) , $array , $return);
                

                if(isset($max_time) && strcmp($max_time,"")) exec($this->makeCmd("maximum_expiry_time" , $max_time) , $array , $return);
               

                if(isset($url_never_cache) && strcmp($url_never_cache,"")) exec($this->makeCmd("never_cache" , $url_never_cache) , $array , $return);
               

                if(isset($url_download) && strcmp($url_download,"")) exec($this->makeCmd("always_direct" , $url_download) , $array , $return);
                

                if(isset($hostname) && strcmp($hostname,"")) exec($this->makeCmd("visible_hostname" , $hostname) , $array , $return);
                

                if(isset($format_log) && strcmp($format_log,"")) exec($this->makeCmd("logformat" , $format_log) , $array , $return);
                

                exec("sudo systemctl restart squid" , $array , $return);

                

                return view("acceuille");

    }
    public function makeCmd($parametre , $valeur){
        $cmd = "sudo sed -i '/$parametre/d' /etc/squid/conf.d/debian.conf";
        exec($cmd , $array , $return);

        $cmd = "sudo sed -i '1i\ $parametre $valeur' /etc/squid/conf.d/debian.conf";

        return $cmd; 
    }
}