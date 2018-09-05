<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

    // CONSTRUCTOR Funciones comunes usadas por el panel 
    public function __construct() {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL Perfil
        $this->load->library('session'); // CARGA LAS SESSIONES
        // VERIFICA QUE EL USER ESTE LOGUEADO (La función esta dentro de Mfuntionsg)

        $this->MFunctionsg->comprobar_sesion($this->session->userdata('login'));//Busca la variable de sesion que sea login2 
        $DATOS['user'] = $this->session->userdata('id'); // PASO LOS DATOS DEL USUARIO 
       $this->load->view('website/header', $DATOS);
    }
    
    // **PAGINA DE INICIO DEL HOME**
	public function index()
	{
		
		$this->load->view('perfil/perfil'); //Mi carpeta perfil archivo perfil
	}
    
  public function salir() {
        session_destroy();
        echo "<script>location.href ='" . base_url() . "';</script>";
    }
	  

    public function editar(){
        $this->load->view('perfil/editar');
     

    }






}
