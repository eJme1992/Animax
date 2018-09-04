<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {


	 function perfil($id)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE id = $id");
		return $query->result();
	}


	 function editar_usuario($id, $mail, $nickname,  $nombre, $apellido, $nacimiento, $sexo,  $tipo)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `user` Set mail ='$mail', nickname = '$nickname',  nombre = '$nombre', apellido = '$apellido', nacimiento = '$nacimiento', sexo = '$sexo', tipo = '$tipo', fecha_m = '$fecha_m' WHERE `user`.`id`='$id'");
		return $query;
	}

	function crear($nombre, $apellido, $mail, $nickname, $pass,   $nacimiento, $sexo,  $tipo)
	{    
		// INSERT INTO `user` (`id`, `mail`, `nickname`, `pass`, `nombre`, `apellido`, `nacimiento`, `sexo`, `foto`, `tipo`, `fecha_c`, `fecha_m`) VALUES (NULL, 'sinay@mail.com', 'Shina', '12345', 'Sinay', 'Perozo', '31/03/1999', 'F', '', '0', '2018-09-04', '2018-09-04')
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("INSERT INTO `user` (`id`, `mail`, `nickname`, `pass`, `nombre`, `apellido`, `nacimiento`, `sexo`, `foto`, `tipo`, `fecha_c`, `fecha_m`) VALUES (NULL, '$mail', '$nickname', '$pass', '$nombre', '$apellido', '$nacimiento', '$sexo', '', '$tipo', '$fecha_m', '$fecha_m')");
		return $query;
	}	
 
	 function consultar()
	{    
		$query = $this->db->query("SELECT * FROM `user` ");
		return $query->result();
    }

     function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `user` WHERE id='$id'");
		return $query;
	}

	function editar_img($img,$id)
	{    
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `user` Set foto='$img', fecha_m='$fecha_m' WHERE `user`.`id`='$id'");
		return $query;
	}

  }
