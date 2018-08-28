<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MLogin2');
        $this->load->library('session'); // para usar sesiones 
    }
    public function index(){
        // SEGURIDAS
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
            );
            $DATOS['csrf'] = $csrf;
            
        $this->load->view('Login2/login2'); //Primero la carpeta de la view y segundo el archivo
    }
    public function ingreso()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario      = $this->input->post('email');
            $password  = $this->input->post('pass');
            $consultas = $this->MLogin2->consultar($usuario);
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