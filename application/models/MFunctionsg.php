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
	
}
