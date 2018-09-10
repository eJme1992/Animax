<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class carrusels extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MCarrusel');
        $this->load->library('session');
    }
    

     public function eliminar_carrusel($id)
    {
        $var = $this->MCarrusel->eliminar($id);// consulta carrusels existente 
        if ($var == true) {
         header("Location:" . base_url() . "panel/carrusels");
         exit; 
        }
    }

       public function editar_carrusel()
    {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $var = $this->MCarrusel->editar($nombre,$id);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response); 
    }

       public function crear_carrusel()
    {
        $nombre = $this->input->post('nombre');
        
        $var = $this->MCarrusel->crear($nombre);// 
        if ($var != false) { 
                $response['status'] = 'ok';
                $response['code'] = "La carrusel ha sido creada de forma";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una carrusel con este nombre";
        }
        echo json_encode($response);
    }
}