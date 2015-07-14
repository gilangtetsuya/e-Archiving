<aside class="main-sidebar">
 <section class="sidebar">
  <div class="user-panel">
  	<div class="pull-left image">
  	 <img src="img/<?php echo $foto; ?>" class="img-circle" alt="User Image"/>
  	</div>
  	<div class="pull-left info">
  	 <p><?php echo $name; ?></p>
  	 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  	</div>
  </div>
  <ul class="sidebar-menu">
   <li class="header">Main Navigation</li>
   <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
   <li><a href="addarchive.php"><i class="fa fa-edit"></i> <span>Input Data</span></a></li>
   <li class="treeview">
    <a href="#">
     <i class="fa fa-table"></i> <span>Data Arsip PBB</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
     <li><a href="#"><i class="fa fa-circle-o"></i> Pelayanan</a></li>
     <li><a href="#"><i class="fa fa-circle-o"></i> Zona 1</a></li>
     <li><a href="#"><i class="fa fa-circle-o"></i> Zona 2</a></li>
     <li><a href="#"><i class="fa fa-circle-o"></i> Zona 3</a></li>
    </ul>
   </li>
   <?php if($data['user_level'] == 'admin'): ?>  
   <li class="treeview">
   	<a href="#">
      <i class="fa fa-user"></i> <span>Admin Menu</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
   	<ul class="treeview-menu">
   	 <li><a href="addusers.php"><i class="fa fa-circle-o"></i> Add users</a></li>
   	 <li><a href="users-list.php"><i class="fa fa-circle-o"></i> Users List</a></li>
     <li><a href="users-log.php"><i class="fa fa-circle-o"></i> Users Log</a></li>
   	</ul>
   </li>
  <?php endif; ?>
  </ul>
 </section>
</aside>
