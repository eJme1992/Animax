<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MLogin');//Para cargar el Modelo include
        $this->load->library('session'); // para usar sesiones 
    }
    public function index()
    {
        $this->load->view('login/login'); //Primero la carpeta de la view y segundo el archivo
    }
    public function ingreso()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario   = $this->input->post('email');
            $password  = $this->input->post('pass');
            $consultas = $this->MLogin->consultar($usuario);
            $consulta  = end($consultas); //funcion que me trae el ultimo registro de la consulta
            if ($consulta != false) {
                if ($consulta->pass == $password) //pass celda en bd {
                    $data_login = array('id'        => $consulta, // Se crea el arreglo para la sesion
                                        'login'     => TRUE); 
                    $this->session-> set_userdata($data_login); //se crea la sesion con los datod del arreglo
                    $response['status'] = 'ok'; //Arreglo para el json
                    $response['code']   = "Bienvenido"; //mis clave del arreglo
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
    
    public function registrar(){

           if($_SERVER['REQUEST_METHOD'] == 'POST'){ //Por seguridad, que venga del post 
            $newuser = $this->input->post('nombre'); //Recibiendo los datosque vienen del form
            $newmail = $this->input->post('mail');
            $newpassword =$this->input->post('contrasena');


            $existe = $this->MLogin->registrar($newuser,$newemail, $newpassword);
            if($existe != false){
                $response['status'] = 'ok'; //Creando un objeto Json
                $response['code'] = "El usuario ha sido creado exitosamente";
        }else{
                $response['status'] = 0;
                $response['error'] = "Email existente. Pruebe con otro";
        }
        echo json_encode($response);
            }
            
    }

}