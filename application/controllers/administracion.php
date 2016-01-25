<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class administracion extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Administración','administracion'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/administracion_admin');
		}
		else{
			$this->load->view('admin/administracion_user');
		}
		
		$this->load->view('layout/footer');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}

}

/* End of file administracion.php */
/* Location: ./application/controllers/administracion.php */