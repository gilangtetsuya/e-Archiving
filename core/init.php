<?php 
 
 ob_start();
 session_start();
 require 'db/database.php';

 function auto_load($class) {
   $filename = 'class/'.$class.'.php';
   include $filename;
 }

 spl_autoload_register('auto_load');

 try {
   $General = new General();
   $Users   = new Users($db);
 } catch(Exception $e) {
   die("Kesalahan koneksi pada database: " . $e->getMessage() . "\n");
 }

?>