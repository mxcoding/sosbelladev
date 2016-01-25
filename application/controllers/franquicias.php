<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicias extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Franquicias','tabla'=>TRUE,'css'=>'navbar','fancy'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/listar');
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Franquiciatario','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/agregar');
		$this->load->view('layout/footer');
	}
	public function editar($id=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Franquiciatario '.$id,'css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/editar');
		$this->load->view('layout/footer');
	}

}

/* End of file franquicias.php */
/* Location: ./application/controllers/franquicias.php */