<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Inventario','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/inventario/listar');
		$this->load->view('layout/footer');
	}
}
