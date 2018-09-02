<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunctionsg'); // CARGA LAS FUNCIONES GENERALES PARA EL PANEL
        $this->load->model('MLogin');//Para cargar el Modelo include
        $this->load->library('session'); // para usar sesiones 
        $this->MFunctionsg->comprobar_sesion2($this->session->userdata('login')); 
    }
    public function index()
    {   
         // SEGURIDAS
        $csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
        );
        $DATOS['csrf'] = $csrf;
        $this->load->view('login/login',$DATOS); //Primero la carpeta de la view y segundo el archivo
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
                    $data_login = array('id'        => $consulta,
                                        'tipo'      => $consulta->tipo, 
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
              $this->load->model('MUser');//Para cargar el Modelo user include

           if($_SERVER['REQUEST_METHOD'] == 'POST'){ //Por seguridad, que venga del post 
            $newuser = $this->input->post('nombre'); //Recibiendo los datosque vienen del form
            $apellido = $this->input->post('apellido');
            $newmail = $this->input->post('mail');
            $newpassword = $this->input->post('contrasena');
            $fecha_n =$this->input->post('fecha_n');
            $sexo =$this->input->post('sexo');
            
            $id = $this->MLogin->registrar($newuser, $apellido, $newmail, $newpassword, $fecha_n, $sexo);
            if($id != false){
              $consultas = $this->MUser->consultar($id);
               $consulta  = end($consultas); //Damelo como un objeto
                 $data_login = array('id'        => $consulta,
                                        'tipo'      => $consulta->tipo, 
                                        'login'     => TRUE); 
                    $this->session-> set_userdata($data_login);
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