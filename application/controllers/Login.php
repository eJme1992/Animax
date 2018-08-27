<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MLogin');
        $this->load->library('session'); // para usar sesiones 
    }
    public function index()
    {
        $this->load->view('login/login'); //Primero la carpeta de la view y segundo el archivo
    }
    public function ingreso()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario      = $this->input->post('email');
            $password  = $this->input->post('pass');
            $consultas = $this->MLogin->consultar($usuario);
            $consulta  = end($consultas);
            if ($consulta != false) {
                if ($consulta->pass == $password) {
                    $data_login = array('id'        => $consulta,
                                        'login'     => TRUE);
                    $this->session-> set_userdata($data_login);
                    $response['status'] = 'ok';
                    $response['code']   = "Bienvenido";
                } else {
                    $response['status'] = 0;
                    $response['error']  = ' La contraseña es incorrecta';
                }
            } else {
                $response['status'] = 0;
                $response['error']  = ' El Usuario es incorrecto';
            }
            echo json_encode($response);
        }
    }
    public function registrar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $newuser = $this->input->post('contrasena');
            $newmail = $this->input->post('mail');
            $newpassword =$this->input->post('contrasena');
    }

}