<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {


	 function consultar($user)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE user='$user'");
		return $query->result();
    }
    
    function registrar($user, $mail, $password){
        $query = $this->db->query("SELECT * FROM `user` WHERE mail='$mail'"); //Selecciona la variable que tiene que ser distinta. El que dice email es la celda
        if ($query->num_rows() == 0) {  //Me pregunta si existe el email
        	$fecha_c = $fecha_m = date("Y-m-d");
            $query = $this->db->query("INSERT INTO `user` (`nombre`, `mail`, `pass`, `fecha_c`, `fecha_m`) VALUES ('$nombre','$fecha_c','$fecha_m')");
            if ($query == true) {
                $id = $this->db->insert_id();
                return $id;
            } else {
                return false;
            }
        } else {
            $id = false;
            return $id;
        }
	}
    }
	
}
