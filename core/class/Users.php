<?php

 class Users {

 	private $db;

 	public function __construct($database) {
         $this->db = $database;
 	}

 	public function add_users($username,$password,$fullname,$u_level,$foto,$status) {

         $query = $this->db->prepare("INSERT INTO `users` (`username`,`password`,`full_name`,`user_level`,`foto`,`status`) VALUES(?,?,?,?,?,?)");
         $query->bindValue(1, $username);
         $query->bindValue(2, $password);
         $query->bindValue(3, $fullname);
         $query->bindValue(4, $u_level);
         $query->bindValue(5, $foto);
         $query->bindValue(6, $status);

         try {
         	$query->execute();
         } catch(PDOException $e) {
            die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
         }
 	}

 	public function users_exits($username) {

        $query = $this->db->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username` = ?");
        $query->bindValue(1, $username);

        try {
        	$query->execute();
        	$row = $query->fetchColumn();
        	if($row == 1) {
               return true;
        	} else {
        	   return false;
        	}
        } catch(PDOException $e) {
            die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
         }
 	}

 	public function cek_status($username) {

        $query = $this->db->prepare("SELECT `status` FROM `users` WHERE `username` = ?");
        $query->bindValue(1, $username);

        try {
        	$query->execute();
        	$data = $query->fetch();
        	$status = $data['status'];
        	if($status == 'd') {
               return true;
        	} else {
        	   return false;
        	}
        } catch(PDOException $e) {
            die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }
 	}

 	public function login($username,$password) {

         $query = $this->db->prepare("SELECT `id`, `password` FROM `users` WHERE `username` = ?");
         $query->bindValue(1, $username);

         try {
         	$query->execute();
         	$data     = $query->fetch();
         	$str_pass = $data['password'];
         	$my_id    = $data['id'];
         	if($str_pass == sha1($password)) {
               return $my_id;
         	} else {
         	   return false;
         	}
         } catch(PDOException $e) {
            die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
         }
 	}

 	public function log_users($id,$log) {

 		$ip      = $_SERVER['REMOTE_ADDR'];
 		$browser = $_SERVER['HTTP_USER_AGENT'];
 		$time    = time();
 		$query = $this->db->prepare("INSERT INTO `log_users` (`user_id`,`ip`,`browser`,`time`,`log`) VALUES(?,?,?,?,?)");
 		$query->bindValue(1, $id);
 		$query->bindValue(2, $ip);
 		$query->bindValue(3, $browser);
 		$query->bindValue(4, $time);
 		$query->bindValue(5, $log);

 		try {
 			$query->execute();
 		} catch(PDOException $e) {
            die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }
    }

    public function get_users_data_byid($id) {

        $query = $this->db->prepare("SELECT * FROM `users` WHERE `id` = ?");
        $query->bindValue(1, $id);

        try {
           $query->execute();
           return $query->fetch();
        } catch(PDOException $e) {
           die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }
    }

    public function get_users_data() {

        $query = $this->db->prepare("SELECT * FROM `users` ORDER BY `id` DESC");

        try{
           $query->execute(); 
        } catch(PDOException $e) {
           die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }

         return $query->fetchAll(); 
    }

    public function change_status($id,$status) {
        
        $query = $this->db->prepare("UPDATE `users` SET `status` = ? WHERE `id` = ?");
        $query->bindValue(1, $status);
        $query->bindValue(2, $id);

        try {
           $query->execute();
        } catch(PDOException $e) {
           die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }
    }

    public function del_users($id) {
        
        $query = $this->db->prepare("DELETE FROM `users` WHERE `id` = ?");
        $query->bindValue(1, $id);

        try {
           $query->execute(); 
        } catch(PDOException $e) {
           die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }
    }

    public function view_users_log() {

        $query = $this->db->prepare("SELECT * FROM `log_users` ORDER BY `user_id` DESC");

        try {
           $query->execute();
        } catch(PDOException $e) {
           die("Gagal terhubung ke database: " . $e->getMessage() . "\n");
        }

        return $query->fetchAll();
    }

 }
