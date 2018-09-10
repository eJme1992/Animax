<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{

    // CONSTRUCTOR Funciones comunes usadas por el panel 
    public function __construct() {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL Perfil
        $this->load->model('MDatos'); // CARGA LAS FUNCIONES GENERALES PARA EL Perfil
        $this->load->library('session'); // CARGA LAS SESSIONES

        $DATOS['datos'] = $this->MDatos->lista();
        $DATOS['datos'] = end($DATOS['datos']);
  
        $DATOS['user'] = $this->session->userdata('id'); // PASO LOS DATOS DEL USUARIO 
        $this->load->view('website/header',$DATOS); //Mi carpeta y mi archivo que corresponden a la vista
    }
    
    // **PAGINA DE INICIO DEL HOME**
	public function index()
	{	

        $this->load->model('MSerie'); // Carga el modelo de categorías 
        $this->load->model('MCategoria'); // Carga el modelo de categorías 
        $this->load->model('MGenero'); // Carga el modelo de categorías
        $this->load->model('MTemporada'); // Carga el modelo de categorías  
        $this->load->model('MCapitulo'); // Carga el modelo de categorías  
        $this->load->model('MCarrusel'); // Carga el modelo de categorías  
        $DATOS['carrusel'] = $this->MCarrusel->lista(6);
        $DATOS['capitulo'] = $this->MCapitulo->listacap(6);
        $DATOS['series'] = $this->MSerie->listades('LIMIT 3');
        $DATOS['Temporadar'] = $this->MTemporada->recientes(10);
        $this->load->view('website/cuerpo-home',$DATOS);
        $this->load->view('website/footer');
	}

    public function detalle_series($id){
        $this->load->model('MSerie'); // Carga el modelo de categorías 
        $this->load->model('MCategoria'); // Carga el modelo de categorías 
        $this->load->model('MGenero'); // Carga el modelo de categorías
        $this->load->model('MTemporada'); // Carga el modelo de categorías  
        $this->load->model('MCapitulo');// medidas de seguridad
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
        $this->load->view('website/detalleseries', $DATOS);
        $this->load->view('website/footer'); 
    }

       public function mas_destacados($pagina = 1){
        $this->load->model('MSerie'); // Carga el modelo de categorías 
        $paginas = $this->MFunctionsg->pagina($this->MSerie->listades(),$pagina);//pg
        $DATOS['data'] = $this->MSerie->listades($paginas['limite']); // consulta paginada
        $DATOS['pagina'] = $paginas['pagina']; // valores para los botones
        $DATOS['total_paginas'] = $paginas['total_paginas']; // valores para los s        
        $this->load->view('website/mas',$DATOS);
        $this->load->view('website/footer');
    }

     public function mas_series($pagina = 1){
        $this->load->model('MSerie'); // Carga el modelo de categorías 
        $paginas = $this->MFunctionsg->pagina($this->MSerie->lista(),$pagina,3);//pg
        $DATOS['data'] = $this->MSerie->lista($paginas['limite']); // consulta paginada
        $DATOS['pagina'] = $paginas['pagina']; // valores para los botones
        $DATOS['total_paginas'] = $paginas['total_paginas']; // valores para los s     
        $DATOS['url'] = base_url() . "home/mas_series";
        $this->load->view('website/mas',$DATOS);
        $this->load->view('website/footer');
    }
 
}
