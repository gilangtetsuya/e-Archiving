<?php 

 $config = array(
      'hostname' => 'localhost',
      'username' => 'root',
      'password' => '',
      'dbname'   => 'project_2'
 	);

 $db = new PDO('mysql:host=' . $config['hostname'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
