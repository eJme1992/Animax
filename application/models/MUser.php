<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {


	 function perfil($id)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE id = $id");
		return $query->result();
	}


	 function editar($id, $mail, $nickname, $pass, $nombre, $apellido, $nacimiento, $sexo, $foto, $tipo)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `user` Set mail ='$mail', nickname = '$nickname', pass = '$pass', nombre = '$nombre', apellido = '$apellido', nacimiento = '$nacimiento', sexo = '$sexo', foto = '$foto', tipo = '$tipo', fecha_m = '$fecha_m' WHERE `user`.`id`='$id'");
		return $query;
	}

	
 


  }
