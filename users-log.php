<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Users Log</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">
 </head>
 <body class="skin-blue fixed sidebar-mini">
  <div class="wrapper">
  	
    <?php include 'header.php'; ?>

   	 <?php include 'navigation.php'; ?>

   <div class="content-wrapper">
  	<section class="content-header">
  	 <h1>
  	  Users Log
  	  <small>History Pengguna</small>	
  	 </h1>
  	 <ol class="breadcrumb">
  	  <li><i class="fa fa-dsahboard"></i> Home</li>
  	  <li>Admin Menu</li>
  	  <li class="active">Users Log</li>	
  	 </ol>	
  	</section>
  	<section class="content">
  	 <div class="row">
  	  <div class="col-md-12">
  	   <div class="box box-red">
  	   	<div class="box-header">
  	   	 <h3 class="box-title">Details Users Log</h3>	
  	   	 <div class="box-tools">
  	   	  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse"><i class="fa fa-minus"></i></button>	
  	   	 </div>
  	   	</div>
  	   	<div class="box-body">
  	   	<table id="Tables" class="table table-hover table-bordered">
  	   	 <thead>
  	   	  <tr>
  	   	  	<th width="10%">Users Id</th>
  	   	  	<th>IP</th>
  	   	  	<th>Browser</th>
  	   	  	<th>Time</th>
  	   	  	<th>Log</th>
  	   	  </tr>	
  	   	 </thead>
  	   	 <tbody>
  	   	   <?php 
             $data = $Users->view_users_log();

             foreach($data as $row) {
                
                echo '<tr>
                       <td>'.$row['user_id'].'</td>
                       <td>'.$row['ip'].'</td>
                       <td>'.$row['browser'].'</td>
                       <td>'.$row['time'].'</td>
                       <td>'.$row['log'].'</td>
                      </tr>';
             }

  	   	   ?>	
  	   	 </tbody>	
  	   	</table> 	
  	   	</div>
  	   </div>	
  	  </div>	
  	 </div>
  	</section>	
   </div>
   <?php include 'footer.php'; ?>
  </div>
	<script type ="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script type ="text/javascript" src="component/js/bootstrap.min.js"></script>
	<script type ="text/javascript" src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<script type ="text/javascript" src="plugins/fastclick/fastclick.min.js"></script>
	<script type ="text/javascript" src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script type ="text/javascript" src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script type ="text/javascript" src="component/js/app.min.js"></script>
	<script>
     $(function() {
      $('#Tables').dataTable({
			"bPaginate": true,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": true,
			"bInfo": true,
			"bAutoWidth": true
      });
     });
	</script>
 </body>
</html>