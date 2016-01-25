<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Usuarios','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/usuarios/listar');
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Usuario','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/usuarios/agregar');
		$this->load->view('layout/footer');
	}
	public function editar($id=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Usuario '.$id,'css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/usuarios/editar');
		$this->load->view('layout/footer');
	}
}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */