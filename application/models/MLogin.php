<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {


	 function consultar($user)
	{    
		$query = $this->db->query("SELECT * FROM `admin` WHERE user='$user'");
		return $query->result();
    }
    
    function registrar($user, $mail, $password){
        //$regis = $this->db->insert("")
    }
	
}
