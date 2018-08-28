<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {


	 function consultar($user)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE user='$user'");
		return $query->result();
    }
    
<<<<<<< HEAD:application/models/Mlogin2.php
    /*function registrar($user, $mail, $password){
        $regis = $this->db->insert("")
    }*/
=======
    function registrar($user, $mail, $password){
        //$regis = $this->db->insert("")
    }
>>>>>>> 9a745fa4c8cbde99f2605d87c55570ceb339eb35:application/models/MLogin.php
	
}
