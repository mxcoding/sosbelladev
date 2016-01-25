<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Roles','acordion'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/roles/consultar');
		}
		else{
			$this->load->view('user/roles/consultar');
		}
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Rol','acordion'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/roles/agregar');
		}
		else{
			$this->load->view('user/roles/agregar');
		}
		$this->load->view('layout/footer');
	}

}

/* End of file roles.php */
/* Location: ./application/controllers/roles.php */