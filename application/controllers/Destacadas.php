<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Destacadas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdestacada');
        $this->load->library('session');
    }
    

     public function eliminar_destacada($id)
    {
        $var = $this->Mdestacada->eliminar($id);// consulta destacadas existente 
        if ($var == true) {
         header("Location:" . base_url() . "panel/destacadas");
         exit; 
        }
    }

       public function editar_destacada()
    {
        $id = $this->input->post('id');       
        $var = $this->Mdestacada->editar($id);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response); 
    }

       public function crear_destacada($id)
    {        
        $var = $this->Mdestacada->crear($id);// 
        if ($var != false) { 
                $response['status'] = 'ok';
                $response['code'] = "La destacada ha sido creada de forma";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una destacada con este nombre";
        }
        echo json_encode($response);
    }
}