<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('panel/secciones/user');
	}

    public function salir() {
        session_destroy();
        echo "<script>location.href ='" . base_url() . "';</script>";
    }
    
    
    public function editar($id)
    {
        $this->load->model('MUser'); // Carga el modelo de usuarios
        
        // $id, $mail, $nickname, $pass, $nombre, $apellido, $nacimiento, $sexo, $foto, $tipo
        $id = $this->input->post('id');
        $mail = $this->input->post('mail');
        $nickname $this->input->post('nickname');
        $pass $this->input->post('pass');
        $nombre $this->input->post('nombre');
        $apellido $this->input->post('apellido');
        $nacimiento $this->input->post('nacimiento');
        $sexo $this->input->post('sexo');
        $foto $this->input->post('foto');
        $tipo $this->input->post('tipo');

        $var = $this->MUser->editar($id, $mail, $nickname, $pass, $nombre, $apellido, $nacimiento, $sexo, $foto, $tipo);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response);
        
    }



	  








}
