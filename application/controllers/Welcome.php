<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('idusuario')){
			redirect('/administracion', 'refresh');
		}
	}
	public function index(){
		$data = array(
			'titulo' =>'SOSBELLA',
			'login'=>TRUE,
			'mensajes'=>TRUE
		);
		$this->load->view('layout/header',$data);
		$this->load->view('Login/login');
		$this->load->view('layout/footer');
	}
}
