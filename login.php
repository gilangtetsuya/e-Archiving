<?php
  require 'core/init.php';
  $General->login_protect();
  if(isset($_POST['log'])) {
     $username = addslashes(strip_tags(trim($_POST['username'])));
     $password = addslashes(strip_tags(trim($_POST['password'])));
     $cek_stat = $Users->cek_status($username);
     $login    = $Users->login($username,$password);
      if($login === false) {
         $err[] = '<button type="button" class="close" data-dismiss="alert" aria-hidde="true">&times;</button><h4><i class="fa fa-warning"></i> Maaf</h4> username dan password yang anda masukkan tidak valid!';
      } elseif($cek_stat === true){
         $err[] = '<button type="button" class="close" data-dismiss="alert" aria-hidde="true">&times;</button><h4><i class="fa fa-warning"></i> Maaf</h4> Akun anda telah di nonaktifkan oleh admin!';
      } else {
        $_SESSION['user_id'] = $login;
        $Users->log_users($login,"Log in ke e-Archiving sytem");
        echo $login;
        header('location: home.php');
        exit();
      }
  }
?>
<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
   	<title>Log in</title>
 	  <meta content="width=device-width, inital-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css">
   <!-- [if lt IE 9] >
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>
   <body class="login-page">
    <div class="login-box">
     <div class="login-logo">
      <a href="#">
      	e-<b>Archiving</b> files PBB
      	<p class="hidden-xs text-muted" style="font-size: 18px;">Dinas Pendapatan Daerah Kota Makassar</p>
      </a>
     </div>
     <div class="login-box-body" id="log" style="margin-bottom: 20px;">
      <p class="login-box-msg">Please log in to start your session</p>
      <form method="post">
       <div class="form-group has-feedback">
       	<input type="text" name="username" id="user" class="form-control" placeholder="Username">
       	<span class="glyphicon glyphicon-user form-control-feedback"></span>
       </div>
       <div class="form-group has-feedback">
       	<input type="password" name="password" id="pass" class="form-control" placeholder="Password">
       	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
       </div>
       <div class="row">
       	<div class="col-xs-8">
       	 <div class="checkbox icheck">
       	  <label>
       	  	<input type="checkbox" value="me"> Remember me
       	  </label>
       	 </div>
       	</div>
       	<div class="col-xs-4">
       	 <button type="submit" name="log" id="set" class="btn btn-primary btn-block btn-flat">Log in</button>
       	</div>
       </div>
      </form>
     </div>
     <?php
     if(empty($err) === false) {
        echo '<div class="alert alert-danger alert-dismissable">' . implode('</div><div class="alert alert-danger alert-dismissable">', $err) . '</div>';
     }
     ?>
    </div>
    <!-- Javascript -->
   <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
   <script type="text/javascript" src="component/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="plugins/iCheck/icheck.min.js"></script>
   <script>
    $(function(){
      $('input').iCheck({
      	checkboxClass: 'icheckbox_square-blue',
      	radioClass: 'iradio_square-blue',
      	increaseArea: '20%'
      }),
      $('#set').click(function() {
         if($('#user').val() == "" || $('#pass').val() == "") {
            $('#log').after('<div class="alert alert-warning alert-dismissable">' + '<button type="button" class="close" data-dismiss="alert" aria-hidde="true">&times;</button>' + '<h4><i class="fa fa-warning"></i> Maaf</h4>' + 'Masukkan username dan password anda!' + '</div>');
            $('#user').focus();
            return false;
         }
      });
    });
   </script>
  </body>
 </html>
