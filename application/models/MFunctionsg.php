<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFunctionsg  extends CI_Model {


	 function comprobar_sesion($rev)
	 {    
		if ($rev !== true) {
         header("Location:" . base_url() . "");
         exit; 
       }
	 }

            function archivo($documento,&$mensaje,$file='',$name ='file')
            {
               $ruta                = "file/".$file."/"; //ruta carpeta donde queremos copiar las  
               $uploadfile_temporal = $documento['tmp_name']; // archivo a subir
               $size                = $documento['size']; // peso de archivo 
               $extencion = new SplFileInfo($documento['name']); // Verifica la extensión 
               $uploadfile_nombre   = $ruta.$name.date("Y_m_d_s").'.'.$extencion->getExtension(); //Guarda ruta y nombre
                if ($size < 20000000) {
                    if (is_uploaded_file($uploadfile_temporal)) {
                        move_uploaded_file($uploadfile_temporal, $uploadfile_nombre);
                        return $uploadfile_nombre;
                    } else {
                        $mensaje = "error";
                        return 0;           
                    }
                } else {
                        $mensaje = "El archivo pesa mucho";
                        return 0;
                    
                }
            }
}
