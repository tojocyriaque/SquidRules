<!DOCTYPE html>
<HTML>
<HEAD>
  <META charset="UTF-8">
  <META name="viewport" content="width=device-width, initial-scale=1.0">
  <TITLE>proxy log</TITLE>
  <LINK href="<?= base_url('bootstrap-5.3.3-dist/css/bootstrap.min.css') ?>" rel="stylesheet">
  <SCRIPT src="<?= base_url('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') ?>"></SCRIPT>
</HEAD>
<BODY class="bg-dark">
<NAV class="navbar navbar-expand-xl navbar-dark bg-dark text-white">
	<DIV class="container-fluid">
		<DIV class="col-md-6">
			<UL class="navbar-nav">
				<LI class="nav-item">
					<A class="nav-link active" href="#">Dashboard</A>
				</LI>
				<LI class="nav-item">
					<A class="nav-link" href="#">Proxy</A>
				</LI>
			</UL>
		</DIV>
		<DIV class="col-md-6 d-flex justify-content-end">
			<FORM class="d-flex" action="<?= base_url('index.php/listlog') ?>"  method=get>
				<INPUT name="datelog" class="form-control form-control-sm me-2" type="date" id="datePicker" value="<?= $date ?>">
		        <INPUT name="search" class="form-control form-control-sm me-2" type="search" placeholder="Ip address" value="<?= $search ?>">
		        <INPUT class="btn btn-sm btn-primary" type="submit" value="Search">
		    </FORM>
	   	</DIV>
   	</DIV>
</NAV>
<DIV class="container-fluid">
	<DIV class="row">
		<DIV class="col-md-12 text-white-50 bg-secondary text-center beta">
			<H3>Squid Logs</H3>
		</DIV>
	</DIV>
</DIV>
<TABLE class="table table-striped text-center">
	<THEAD>
		<TR class="table-dark">
			<TH>@IP</TH>
			<TH>Time loading</TH>
			<TH>Trafic size</TH>
			<TH>Method</TH>
			<TH>URL visited</TH>
			<TH>Date</TH>
		</TR>
	</THEAD>
	<TBODY>
		<?php foreach($lists as $list) : ?>
		<TR>
			<TD><?= $list['ip'] ?></TD>
			<TD><?= $list['request_duration'] ?></TD>
			<TD><?= $list['traffics_size'] ?></TD>
			<TD><?= $list['method'] ?></TD>
			<TD><?= $list['visited_url'] ?></TD>
			<TD><?= $list['date'] ?></TD>
		</TR>
		<?php endforeach ?>
	</TBODY>
</TABLE>
<NAV class="navbar navbar-expand-xl navbar-dark bg-dark text-white fixed-bottom bd-highlight">
	<DIV class="container-fluid">
		<DIV class="col-md-6">
			<UL class="navbar-nav">
				<LI class="nav-item d-flex">
					<STRONG class="text-white">Page:&nbsp;&nbsp;</STRONG> <SPAN><?= $pager->links() ?></SPAN>
				</LI>
			</UL>
		</DIV>
		<DIV class="col-md-6 d-flex justify-content-end">
			<FORM class="d-flex" action="<?= base_url('index.php/delete') ?>"  method=get>
				<INPUT name="datedel" class="form-control form-control-sm me-2" type="date" id="datePicker" value="<?= $date ?>">
		        <INPUT class="btn btn-sm btn-danger" type="submit" value="Delete">
		    </FORM>
	   	</DIV>
   	</DIV>
</NAV>
</DIV>
</BODY>
</HTML>