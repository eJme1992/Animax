<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
	public function index()
	{
		
		$this->load->view('panel/header');
		$this->load->view('panel/menu/menu');
		$this->load->view('panel/menu/menufooter');
		$this->load->view('panel/footer');
	}
}
