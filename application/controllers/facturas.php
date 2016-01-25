<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Facturas','css'=>'navbar'));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/facturas/listar');
		}
		else{
			$this->load->view('user/facturas/facturas');
		}
		
		$this->load->view('layout/footer');
	}
	public function pagos(){
		$this->load->view('layout/header',array('titulo'=>'Pagos','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/facturas/pagos');
		$this->load->view('layout/footer');
	}
	public function subir(){
		$this->load->view('layout/header',array('titulo'=>'Subir Pagos','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('user/facturas/subir');
		$this->load->view('layout/footer');
	}

}

/* End of file facturas.php */
/* Location: ./application/controllers/facturas.php */