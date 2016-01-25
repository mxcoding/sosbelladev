<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoreo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Monitoreo de Ventas','mensajes'=>TRUE,'graficas'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/monitoreo/monitoreo');
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Metas','calendario'=>TRUE,'tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/monitoreo/agregar');
		$this->load->view('layout/footer');
	}

}

/* End of file monitoreo.php */
/* Location: ./application/controllers/monitoreo.php */