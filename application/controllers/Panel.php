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
    
    // **SERIES**
	public function newserie()
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente   	
        $this->load->view('panel/secciones/newserie', $DATOS );
		$this->load->view('panel/footer'); 
	}

		public function series()
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente
        
        $this->load->view('panel/secciones/tabla', $DATOS );
		$this->load->view('panel/footer'); 
	}

     public function categorias()
	{
		$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
		 $DATOS['csrf'] = $csrf;
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->lista();// consulta categorías existente      
        $this->load->view('panel/secciones/categorias', $DATOS );
		$this->load->view('panel/footer'); 
	}

	   public function eliminar_categoria($id)
	{
		$this->load->model('MCategoria'); // Carga el modelo de categorías 
        $DATOS['categorias'] = $this->MCategoria->eliminar($id);// consulta categorías existente 
	}

	   public function editar_categoria()
	{
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$this->load->model('MCategoria'); //
        $id = $this->MCategoria->crear($nombre,$id);// 
        if ($id != false) { 
                $response['status'] = 'ok';
                $response['mensaje'] = "La categoría ha sido creada con éxito";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una categoría con este nombre";
        }
        echo json_encode($response); 
	}

	   public function crear_categoria()
	{
		$nombre = $this->input->post('nombre');
		$this->load->model('MCategoria'); //
        $id = $this->MCategoria->crear($nombre);// 
        if ($id != false) { 
                $response['status'] = 'ok';
                $response['mensaje'] = "La categoría ha sido creada con éxito";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una categoría con este nombre";
        }
        echo json_encode($response);
	}








}
