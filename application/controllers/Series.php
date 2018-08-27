<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class series extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mserie');
        $this->load->library('session');
    }
    

     public function eliminar_serie($id)
    {
        $var = $this->Mserie->eliminar($id);// consulta series existente 
        if ($var == true) {
         header("Location:" . base_url() . "panel/series");
         exit; 
        }
    }

       public function editar_serie()
    {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $var = $this->Mserie->editar($nombre,$id);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response); 
    }

       public function crear_serie()
    {
        $nombre = $this->input->post('nombre');
        
        $var = $this->Mserie->crear($nombre);// 
        if ($var != false) { 
                $response['status'] = 'ok';
                $response['code'] = "La serie ha sido creada de forma";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una serie con este nombre";
        }
        echo json_encode($response);
    }
}