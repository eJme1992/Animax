<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTemporada extends CI_Model {


	 function lista($id=false)
	{    
		if ($id==false){$var='';}else{$var="WHERE id_serie='$id'";}
		$query = $this->db->query("SELECT * FROM `temporada` $var");
		return $query->result();
	}

	 function recientes($LIMIT='2')
	{    
		//if ($id==false){$var='';}else{$var="";}
		    $query = $this->db->query("SELECT serie.id as 'id_serie', temporada.id as 'id', serie.nombre, serie.imagen, temporada.fecha_c FROM temporada INNER JOIN serie ON serie.id=temporada.id_serie ORDER BY temporada.fecha_c  LIMIT $LIMIT ");
		return $query->result();
	}

	 function eliminar($id)
	{    
    
		$query = $this->db->query("DELETE FROM `capitulo` WHERE id_temporada='$id'");
		$query = $this->db->query("DELETE FROM `temporada` WHERE id='$id'");
		return $query;
	}

	 function editar($numero,$id,$estreno,$id_serie)
	{    
		$query = $this->db->query("SELECT * FROM `temporada` WHERE numero='$numero' and id_serie='$id_serie'");
        if ($query->num_rows() == 0) {		
		$fecha_m = date("Y-m-d");
		$query = $this->db->query("UPDATE `temporada` Set numero='$numero',fecha_estreno='$estreno', fecha_m='$fecha_m' WHERE `temporada`.`id`='$id'");
		return $query;
		} else {
            $id = false;
            return $id;
        }
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
