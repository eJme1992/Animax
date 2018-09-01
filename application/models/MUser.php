<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTemporada extends CI_Model {


	 function consultar($id)
	{    
		$query = $this->db->query("SELECT * FROM `user` WHERE id = $id");
		return $query->result();
	}


	 function editar($numero,$id,$estreno)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `temporada` Set numero='$numero',fecha_estreno='$estreno', fecha_m='$fecha_m' WHERE `temporada`.`id`='$id'");
		return $query;
	}

	 function crear($numero,$id_serie,$fecha)
	{    
		$query = $this->db->query("SELECT * FROM `temporada` WHERE numero='$numero' and id_serie='$id_serie'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d");
            $query = $this->db->query("INSERT INTO `temporada` (`numero`,`id_serie`,`fecha_estreno`,`fecha_c`, `fecha_m`) VALUES ('$numero','$id_serie','$fecha','$fecha_c','$fecha_m')");
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
