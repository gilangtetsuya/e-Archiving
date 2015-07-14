<?php 
 
 class General {

 	function logged_in() {
 		return (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) ? true : false;
 	} 

 	public function login_protect() {
 		if($this->logged_in() === true) {
           header('location: home.php');
           exit(); 
 		}
 	}

 	public function logout_protect() {
 		if($this->logged_in() === false) {
           header('location: index.html');
           exit();
 		}
 	}
 	
 }