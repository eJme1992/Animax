<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Capitulo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MCapituloVideo');
        $this->load->library('session');
    }
    

     public function eliminar_vide($id,$id_serie)
    {
        $var = $this->MCapituloVideo->eliminar($id);// consulta capitulos existente 
        if ($var == true) {
         header("Location:" . base_url() . "panel/viewserie/".$id_serie);
         exit; 
        }
    }

       public function editar_video()
    {
        // $id,$id_capitulo, $url_video, $tipo, $provedor
        $id = $this->input->post('id');
        $id_capitulo   = $this->input->post('id_capitulo');
        $url_video   = $this->input->post('url_video');
        $tipo   = $this->input->post('tipo');
        $provedor = $this->input->post('provedor');       
        $var = $this->MCapituloVideo->editar($id,$id_capitulo, $url_video, $tipo, $provedor);// 
        if ($var != false) { 
              $response['status'] = 'ok';
              $response['code']   = "Edición hecha correctamente recargue la pagina para actualizar la tabla";
        }else{
               $response['status'] = 0;
               $response['error']  = 'No se edito correctamente';
        }
        echo json_encode($response); 
    }

       public function crear_video()
    {
        // $id_capitulo, $url_video, $tipo, $provedor
        $id_capitulo   = $this->input->post('id_capitulo');
        $url_video   = $this->input->post('url_video');
        $tipo   = $this->input->post('tipo');
        $provedor = $this->input->post('provedor');
        $fecha_estreno = $this->input->post('fecha_estreno');
        
        $var = $this->MCapituloVideo->crear($id_capitulo, $url_video, $tipo, $provedor);// 
        if ($var != false) { 
                $response['status'] = 'ok';
                $response['code'] = "La capitulo ha sido creada de forma";
        }else{
                $response['status'] = 0;
                $response['error'] = "Ya existe una capitulo con este numero";
        }
        echo json_encode($response);
    }
}