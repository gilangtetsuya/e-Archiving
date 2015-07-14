<?php
 require 'core/init.php';
 if(isset($_POST['save'])) {
    $username = addslashes($_POST['username']);
    $fullname = addslashes($_POST['fullname']);
    $password = sha1($_POST['password']);
    $u_level  = $_POST['user_level'];
    $n_foto   = $_FILES['file']['name'];
    $status   = $_POST['status']; 

     $format = pathinfo($n_foto, PATHINFO_EXTENSION);

     if($_FILES['file']['error'] === 0) {
        if($_FILES['file']['size'] < 20000){
          if($format === 'jpg' || $format === 'png'){
             move_uploaded_file($_FILES['file']['tmp_name'], "img/".$n_foto);
          } else {
            $err[] = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Format file harus .JPG atau .PNG!';
          }
        } else {
          $err[] = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ukuran file tidak boleh lebih dari 2MB!';
        }
     } else{
        $err[] = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Terjadi kesalahan system!';
     }

     $Users->add_users($username,$password,$fullname,$u_level,$n_foto,$status);
     $msg[] = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Berhasil menmbahkan user ke database!';

 }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="component/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="component/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="component/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="component/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/iCheck/all.css" rel="stylesheet" type="text/css">
    <!-- [if lt IE 9] >
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

     <?php include 'header.php'; ?>

     <?php include 'navigation.php'; ?>

      <div class="content-wrapper">
       <section class="content-header">
        <h1>
          Add Users
          <small>Tambahkan Pengguna</small>
        </h1>
        <ol class="breadcrumb">
          <li><i class="fa fa-dashboard"></i> Home</li>
          <li>Admin Menu</li>
          <li class="active">Add Users</li>
        </ol>
       </section>
       <section class="content">
        <div class="row">
         <div class="col-md-6">
          <?php
            if(empty($msg) === false) {
               echo '<div class="alert alert-success alert-dismissable">' . implode('</div><div class="alert alert-success alert-dismissable">', $msg) . '</div>';
            }
            if(empty($err) === false) {
               echo '<div class="alert alert-danger alert-dismissable">' . implode('</div><div class="alert alert-danger alert-dismissable">', $err) . '</div>';
            }
           ?>
          <div class="box box-defalut" id="log">
           <div class="box-header">
             <h1 class="box-title text-muted"><i class="fa fa-user"></i> Details users data</h1>
           </div>
           <form method="post" enctype="multipart/form-data">
            <div class="box-body">
             <div class="form-group">
              <input type="text" name="username" id="user" class="form-control" placeholder="Username">
             </div>
             <div class="form-group">
              <input type="text" name="fullname" id="fname" class="form-control" placeholder="Nama Lengkap">
             </div>
             <div class="form-group" id="cek">
              <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
             </div>
             <div class="form-group" id="cek2">
              <input type="password" name="re_pass" id="repass" class="form-control" placeholder="Re-type Password">
             </div>
             <div class="form-group">
              <select class="form-control" name="user_level" id="level">
               <option value=""> Users Level </option>
               <option value="admin">Admin</option>
               <option value="zona_1">Pedanil (Zona 1)</option>
               <option value="zona_2">Pedanil (Zona 2)</option>
               <option value="zona_3">Pedanil (Zona 3)</option>
               <option value="pelayanan">Pelayanan</option>
              </select>
             </div>
             <div class="form-group">
              <input type="file" name="file" id="exampleInputFile">
              <p class="help-block">Tambahkan Foto (max size 2MB)</p>
             </div>
             <div class="form-group">
              <label>
               <input type="radio" name="status" class="flat-green" value="e"> Enable
              </label>
              <label>
               <input type="radio" name="status" class="flat-red" value="d" checked> Disable
              </label>
             </div>
             <button type="submit" name="save" id="set" class="btn btn-primary btn-flat btn-sm">Simpan</button>
             <button type="reset" class="btn btn-primary btn-flat btn-sm">Ulang</button>
            </div>
           </form>
          </div>
         </div>
        </div>
       </section>
      </div>
      <?php include 'footer.php'; ?>
    </div>
    <script type="text/javascript" src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="component/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/fastclick/fastclick.min.js"></script>
    <script type="text/javascript" src="plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="component/js/app.min.js"></script>
    <script>
      $(function () {
        $('input[type="radio"].flat-red').iCheck({
           radioClass: 'iradio_flat-red'
        }),
        $('input[type="radio"].flat-green').iCheck({
           radioClass: 'iradio_flat-green'
        }),
        $('#repass, #pass').on('keyup', function() {
            if($('#pass').val() === $('#repass').val()){
               $('#cek, #cek2').removeClass('has-error');
               $('#cek, #cek2').addClass('has-success has-feedback');
               $('#cek').append('<span class="glyphicon glyphicon-check form-control-feedback"></span>');
            }
            if($('#pass').val() !== $('#repass').val()){
               $('#cek, #cek2').addClass('has-error');
            }
        }),
        $('#pass, #repass').on('keydown', function() {
            if($('#repass').val() == ""){
               $('#cek, #cek2').removeClass('has-error has-success');
            }
        }),
        $('#set').click(function() {
           if($('#user, #fname, #level, #pass, #exampleInputFile').val() == ""){
              $('#log').before('<div class="alert alert-warning alert-dismissable">' + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + '<h4><i class="fa fa-warning"></i> Maaf</h4>' + 'Semua field harus di isi!' + '</div>');
              $('#user').focus();
              return false;
           }
        });
      });
    </script>
  </body>
</html>
