<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    // CONSTRUCTOR Funciones comunes usadas por el panel 
    public function __construct() {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL PANEL
        $this->load->library('session'); // CARGA LAS SESSIONES
        // VERIFICA QUE EL USER ESTE LOGUEADO (La función esta dentro de Mfuntionsg)
        $this->MFunctionsg->comprobar_sesion($this->session->userdata('login')); 
        $this->MFunctionsg->comprobar_tipo($this->session->userdata('tipo')); 
        $DATOS['user'] = $this->session->userdata('id'); // PASO LOS DATOS DEL USUARIO 
       
        $this->load->view('panel/header', $DATOS);	// LLAMA AL LA SECCION DE VISTA NAV DE LA WEB
        $this->load->view('panel/menu/menu');
		$this->load->view('panel/menu/menufooter');	
    }
    
    // **PAGINA DE INICIO DEL HOME**
	public function index()
	{
		// PANEL
		$this->load->view('panel/footer');
	}

    public function salir() {
        session_destroy();
        echo "<script>location.href ='" . base_url() . "';</script>";
    }
    
    // **SERIES**

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

	public function newserie()
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $this->load->model('MGenero'); // Carga el modelo de categorías 
         // SEGURIDAS
      
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente  
        $DATOS['generos'] = $this->MGenero->lista();// consulta categorías existente   	
        $this->load->view('panel/secciones/newserie', $DATOS );
		$this->load->view('panel/footer'); 
	}

    public function viewserie($id)
    {
        $this->load->model('Mserie'); // Carga el modelo de categorías 
        $this->load->model('MCategoria'); // Carga el modelo de categorías 
        $this->load->model('MGenero'); // Carga el modelo de categorías
        $this->load->model('MTemporada'); // Carga el modelo de categorías  
        $this->load->model('MCapitulo'); // Carga el modelo de categorías  
         // SEGURIDAS
        
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;
        
        $consultas = $this->Mserie->consultar($id);
        $DATOS['serie'] = end($consultas);

        $DATOS['temporada'] = $this->MTemporada->lista($id);
        $DATOS['capitulo'] = $this->MCapitulo->lista($id);
    

        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente  
        $DATOS['generos'] = $this->MGenero->lista();// consulta categorías existente    
        $this->load->view('panel/secciones/viewseries', $DATOS );
        $this->load->view('panel/footer'); 
    }

    // CATEGORIAS
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

    //GENERO

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

    public function user()
    {
        $user = $this->session->userdata('id');
        $this->load->model('MUser'); // Carga el modelo de usuario 
        $DATOS['user'] = $this->MUser->perfil($user->id);// Trae datos del perfil
        // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $this->load->view('panel/secciones/user',$DATOS);
        $this->load->view('panel/footer'); 
    }
 
    public function usuarios()
    {
        $this->load->model('MUser'); // Carga el modelo de usuario 
        $DATOS['datos'] = $this->MUser->consultar();// Trae datos del perfil
        // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;

        $this->load->view('panel/secciones/usuarios',$DATOS);
        $this->load->view('panel/footer'); 
    }



}
