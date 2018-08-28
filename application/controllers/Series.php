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
        // Recibe datos 
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $categoria  = $this->input->post('categoria');
        $estado = $this->input->post('estado');
        //$tipo = $this->input->post('tipo');
        $genero  = $this->input->post('genero');
        $imagen = $_FILES['imagen'];

         //guardar fotos
            $config['upload_path'] = base_url() .'/img/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 8000;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('imagen');
            $data = $this->upload->data();

            $imagenurl = $data['file_name'];
            if (empty($imagenurl)) {
                $imagenurl = "default.jpg";
            }

        $var = $this->Mserie->crear($nombre,$descripcion,$imagenurl,$categoria,$estado);// 
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