<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCarrusel extends CI_Model {


	function lista()
	{    
		$query = $this->db->query("SELECT * FROM `carrusel`");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `carrusel` WHERE id='$id'");
		return $query;
	}

	 function editar($nombre,$id)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `carrusel` Set nombre='$nombre', fecha_m='$fecha_m' WHERE `carrusel`.`id`='$id'");
		return $query;
	}

	 function crear($nombre)
	{    
		$query = $this->db->query("SELECT * FROM `carrusel` WHERE nombre='$nombre'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d"); // agarra las fechas
            $query = $this->db->query("INSERT INTO `carrusel` (`nombre`, `fecha_c`, `fecha_m`) VALUES ('$nombre','$fecha_c','$fecha_m')");
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
