<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMenu extends CI_Model {


	function lista($id)
	{    
		$query = $this->db->query("SELECT * FROM `menu` WHERE id_menus='$id'");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `menu` WHERE id='$id'");
		return $query;
	}

	 function editar($nombre,$id)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `menu` Set nombre='$nombre', fecha_m='$fecha_m' WHERE `menus`.`id`='$id'");
		return $query;
	}

	 function crear($nombre)
	{    
		$query = $this->db->query("SELECT * FROM `menu` WHERE nombre='$nombre'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d"); // agarra las fechas
            $query = $this->db->query("INSERT INTO `menus` (`nombre`, `fecha_c`, `fecha_m`) VALUES ('$nombre','$fecha_c','$fecha_m')");
            if ($query == true) {
                $id = $this->db->insert_id();
                return $id; // 0
            } else {
                return false;
            }
        } else {
            $id = false;
            return $id;
        }
	}
 


  }
