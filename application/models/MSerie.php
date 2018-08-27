<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mserie extends CI_Model {


	 function lista()
	{    
		$query = $this->db->query("SELECT * FROM `serie`");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `serie` WHERE id='$id'");
		return $query;
	}

	 function editar($nombre,$id)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `serie` Set nombre='$nombre', fecha_m='$fecha_m' WHERE `series`.`id`='$id'");
		return $query;
	}

	 function crear($nombre)
	{    
		$query = $this->db->query("SELECT * FROM `serie` WHERE nombre='$nombre'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d");
            $query = $this->db->query("INSERT INTO `series` (`nombre`, `fecha_c`, `fecha_m`) VALUES ('$nombre','$fecha_c','$fecha_m')");
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
