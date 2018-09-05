<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MMenus');
        $this->load->library('session');
    }
    

     public function eliminar_menu($id)
    {
        $var = $this->MMenus->eliminar($id);// consulta menus existente 
        if ($var == true) {
         header("Location:" . base_url() . "panel/menus");
         exit; 
        }
    }

       public function editar_menu()
    {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $var = $this->MMenus->editar($nombre,$id);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response); 
    }

       public function crear_menu()
    {
        $nombre = $this->input->post('nombre');
        $var = $this->MMenus->crear($nombre);// 
        if ($var != false) { 
                $response['status'] = 'ok';
                $response['code'] = "La menu ha sido creada de forma";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una menu con este nombre";
        }
        echo json_encode($response);
    }
}