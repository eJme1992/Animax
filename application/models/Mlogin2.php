<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin2 extends CI_Model {


	 function consultar($user)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE user='$user'");
		return $query->result();
    }
    
    /*function registrar($user, $mail, $password){
        $regis = $this->db->insert("")
    }*/
	
}
