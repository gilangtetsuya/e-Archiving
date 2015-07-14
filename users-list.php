<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Users List</title>
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="component/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   <style>
     tr td,
     tr th {
     	text-align: center;
     	text-transform: capitalize;
     }
   </style>
    <!-- [if lt IE 9] >
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
 </head>
 <body class="skin-blue fixed sidebar-mini">
  <div class="wrapper">
    
    <?php include 'header.php'; ?>

   	 <?php include 'navigation.php'; ?>

   <div class="content-wrapper">
   	 <section class="content-header">
   	  <h1>
   	  	Users List
   	  	<small>Users Data</small>
   	  </h1>
   	  <ol class="breadcrumb">
   	  	<li><i class="fa fa-dashboard"></i> Home</li>
   	  	<li>Admin Menu</li>
   	  	<li class="active">Users List</li>
   	  </ol>	
   	 </section>
   	 <section class="content">
   	  <div class="row">
   	   <div class="col-md-12">
   	   	<div class="box">
   	   	 <div class="box-header">
   	   	  <h3 class="box-title">Details Users Data</h3>
   	   	  <div class="box-tools">
   	   	  	<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="collapse"><i class="fa fa-minus"></i></button>
   	   	  </div>	
   	   	 </div>
   	   	 <div class="box-body table-responsive no-padding">
   	   	  <table class="table table-hover table-striped table-bordered">
   	   	   <thead>
   	   	   	<tr>
   	   	   	 <th>Username</th>
   	   	   	 <th>Nama Lengkap</th>
   	   	   	 <th>Users Level</th>
   	   	   	 <th>Foto</th>
   	   	   	 <th>Status</th>
   	   	   	 <th>Delete</th>	
   	   	   	</tr>
   	   	   </thead>	
   	   	   <tbody>
             <?php 
				if(isset($_GET['id'])) {
				   $id     = $_GET['id'];
				   $status = $_GET['type'];
				
				   $Users->change_status($id,$status);
				   header('location: users-list.php');
				}
				if(isset($_GET['del'])) {
					$id = $_GET['del'];

					$Users->del_users($id);
					header('location: users-list.php');
				}

               $data = $Users->get_users_data();
               foreach($data as $row) {
                  if($row['status'] == 'e'){
                     $status = '<a href=users-list.php?id='.$row['id'].'&&type=d class="btn btn-primary btn-flat btn-sm">Enable</a>';
                  } else {
                  	 $status = '<a href=users-list.php?id='.$row['id'].'&&type=e class="btn btn-danger btn-flat btn-sm">Disable</a>';
                  }
                  
                  echo '<tr>
						<td>'.$row['username'].'</td>
						<td>'.$row['full_name'].'</td>
						<td>'.$row['user_level'].'</td>
						<td><img src=img/'.$row['foto'].' class="img-circle" width="45" height="45" alt="image users"></td>
						<td>'.$status.'</td>
						<td><a href=users-list.php?del='.$row['id'].' class="btn btn-danger btn-flat btn-sm" onclick="return con_del()"><i class="fa fa-trash"></i></a></td>	
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
    <script type ="text/javascript" src="component/js/app.min.js"></script>
    <script>
      function con_del() {
      	var conf = confirm("Anda yakin menghapus user ini?");
      	
      	if(conf == false){
      		return false;
      	}
      }
    </script>
 </body>
</html>