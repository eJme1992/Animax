<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTemporada extends CI_Model {


	 function lista($id=false)
	{    
		if ($id==false){$var='';}else{$var="WHERE id_serie='$id'";}
		$query = $this->db->query("SELECT * FROM `temporada` $var");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `temporada` WHERE id='$id'");
		return $query;
	}

	 function editar($numero,$id,$estreno)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `temporada` Set numero='$numero',fecha_estreno='estreno' fecha_m='$fecha_m' WHERE `temporada`.`id`='$id'");
		return $query;
	}

	 function crear($numero,$fecha_estreno)
	{    
		$query = $this->db->query("SELECT * FROM `temporada` WHERE numero='$numero'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d");
            $query = $this->db->query("INSERT INTO `temporada` (`numero`,`fecha_estreno`,`fecha_c`, `fecha_m`) VALUES ('$numero','$fecha_estreno',$fecha_c','$fecha_m')");
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
