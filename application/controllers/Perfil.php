<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

    // CONSTRUCTOR Funciones comunes usadas por el panel 
    public function __construct() {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL Perfil
        $this->load->library('session'); // CARGA LAS SESSIONES
        // VERIFICA QUE EL USER ESTE LOGUEADO (La función esta dentro de Mfuntionsg)
        $this->MFunctionsg->comprobar_sesion($this->session->userdata('login2'));//Busca la variable de sesion que sea login2 
        $DATOS['user'] = $this->session->userdata('id'); // PASO LOS DATOS DEL USUARIO 
       
    }
    
    // **PAGINA DE INICIO DEL HOME**
	public function index()
	{
		// PANEL
		$this->load->view('perfil/perfil'); //Mi carpeta perfil archivo perfil
	}
    
    // **SERIES**
	public function newserie()
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente   	
        $this->load->view('panel/secciones/newserie', $DATOS );
		$this->load->view('panel/footer'); 
	}


     public function categorias()
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente  
        // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $this->load->view('panel/secciones/categorias',$DATOS);
		$this->load->view('panel/footer'); 
	}

	  public function generos()
	{
		$this->load->model('MGenero'); // Carga el modelo de categorías 
        $DATOS['generos'] = $this->MGenero->lista();// consulta categorías existente  
        // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $this->load->view('panel/secciones/generos',$DATOS);
		$this->load->view('panel/footer'); 
	}

          public function series()
    {
        $this->load->model('Mserie'); // Carga el modelo de categorías 
        $DATOS['series'] = $this->Mserie->lista();// consulta categorías existente  
        // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $this->load->view('panel/secciones/series',$DATOS);
        $this->load->view('panel/footer'); 
    }


	  








}
