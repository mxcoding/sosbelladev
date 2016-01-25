<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Sucursales','css'=>'navbar','css_body'=>'sucursales'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/listar');
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Sucursal','css'=>'navbar','css_body'=>'sucursales'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/agregar');
		$this->load->view('layout/footer');
	}
	public function editar($id=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Sucursal '.$id,'css'=>'navbar','css_body'=>'sucursales'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/editar');
		$this->load->view('layout/footer');
	}

}

/* End of file sucursales.php */
/* Location: ./application/controllers/sucursales.php */