<?php 
 require_once 'core/init.php';
 $General->logout_protect();
 $data = $Users->get_users_data_byid($_SESSION['user_id']);
 $foto = $data['foto'];
 $name = ucwords($data['full_name']);
 
 if(isset($_GET['out'])){
    session_unset($_SESSION['user_id']);
    session_destroy();
    header('location: index.html');
 }
?>
<header class="main-header">
 <a href="#" class="logo">
  <span class="logo-mini">e-A</span>
  <span class="logo-lg">e-<b>Archiving</b> files PBB</span>
 </a>
 <nav class="navbar navbar-static-top" role="navigation">
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>
  <div class="navbar-custom-menu">
   <ul class="nav navbar-nav">
   	<li class="dropdown messages-menu">
   	  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
   	   <i class="fa fa-envelope-o"></i>
   	   <span class="label label-success">4</span>
   	  </a>
   	  <ul class="dropdown-menu">
   	  	<li class="header">Kamu mempunyai 4 pesan baru!</li>
   	  	<li>
   	  	<ul class="menu">
   	  	 <li>
          <a href="#">
          <div class="pull-left">
            <img src="img/avatar.png" class="img-circle" alt="user image">
          </div>
          <h4>
            Pelayanan
            <small><i class="fa fa-clock-0"></i> 5 mins</small>
          </h4>
          <p>Hey, apa kabar?</p>
         </a>
         </li>
   	  	</ul>
   	  	</li>
   	  	<li class="footer"><a href="#">Lihat semua pesan</a></li>
   	  </ul>
   	</li>
   	<li class="dropdown user user-menu">
   	 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="img/<?php echo $foto; ?>" class="user-image" alt="User Image"/>
      <span class="hidden-xs"><?php echo $name; ?></span>
     </a>
   	 <ul class="dropdown-menu">
   	  <li class="user-header">
   	   <?php 
          echo ' <img src=img/'.$foto.' class="img-circle" alt="Image users">';
       ?>
   	   <p>
   	   	<?php echo $name; ?>
   	   	<small><?php echo $data['user_level']; ?></small>
   	   </p>
   	  </li>
   	  <li class="user-footer">
   	  	<div class="pull-left">
   	  	 <a href="#" class="btn btn-default btn-flat">Profile</a>
   	  	</div>
   	  	<div class="pull-right">
   	  	 <a href="header.php?out" class="btn btn-default btn-flat">Log out</a>
   	  	</div>
   	  </li>
   	 </ul>
   	</li>
   </ul>
  </div>
 </nav>
</header>
