<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCapitulo extends CI_Model {


	 function lista($id=false)
	{    
		if ($id==false){$var='';}else{$var="WHERE id_temporada='$id'";}
		$query = $this->db->query("SELECT * FROM `capitulo` $var");
		return $query->result();
	}

	 function eliminar($id)
	{    
		$query = $this->db->query("DELETE FROM `Capitulo` WHERE id='$id'");
		return $query;
	}

	 function editar($numero,$id,$estreno)
	{    
		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `capitulo` Set numero='$numero',fecha_estreno='estreno' fecha_m='$fecha_m' WHERE `Capitulo`.`id`='$id'");
		return $query;
	}

	 function crear($id_temporada,$numero,$nombre,$duracion,$fecha_estreno)
	{    
		$query = $this->db->query("SELECT * FROM `capitulo` WHERE numero='$numero' and id_temporada='$id_temporada'");
        if ($query->num_rows() == 0) {
        	$fecha_c = $fecha_m = date("Y-m-d");
            $query = $this->db->query("INSERT INTO `capitulo` (`id_temporada`,`numero`,`nombre`,`duracion`,`fecha_estreno`,`fecha_c`, `fecha_m`) VALUES ('$id_temporada','$numero','$nombre','$duracion','$fecha_estreno','$fecha_c','$fecha_m')");
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
