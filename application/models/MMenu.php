<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMenu extends CI_Model {


	function lista()
	{    
		$query = $this->db->query("SELECT * FROM `st_menu` ");
		return $query->result();
	}
	function menus()
	{    
		$query = $this->db->query("SELECT * FROM `st_menus` ");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `st_menu` WHERE id='$id'");
		return $query;
	}

	 function editar($id,$nombre, $url, $id_menus,$posicion)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `st_menu` Set nombre='$nombre', url='$url', id_menus='$id_menus', posicion='$posicion' WHERE `menus`.`id`='$id'");
		return $query;
	}

	 function crear_menu($nombre, $url, $id_menus,$posicion)
	{    
		$query = $this->db->query("SELECT * FROM `st_menu` WHERE nombre='$nombre'");
        if ($query->num_rows() == 0) {
            $query = $this->db->query("INSERT INTO `st_menu` (`id`, `id_menus`, `nombre`, `url`, `posicion`) VALUES (NULL,'$id_menus', '$nombre','$url','$posicion')");
        
        	return $query;
        } else {
            $id = false;
            return $id;
        }
	}
 


  }
