<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	/*MUESTRA TODOS LOS PRODUCTOS*/
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Productos','tabla'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/productos/listar');
		$this->load->view('layout/footer',array('js_productos'=>TRUE));
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Producto',));
		$this->load->view('layout/navbar');
		$this->load->view('admin/productos/agregar');
		$this->load->view('layout/footer');
	}
	public function editar($id=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Producto '.$id,));
		$this->load->view('layout/navbar');
		$this->load->view('admin/productos/editar');
		$this->load->view('layout/footer');
	}
	public function cantidades(){
		$this->load->view('layout/header',array('titulo'=>'Administración de Cantidades','tabla'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/productos/cantidades');
		$this->load->view('layout/footer');
	}
	public function imprimir_codigos(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Código de Productos','tabla'=>TRUE,'calendario'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/productos/codigos');
		$this->load->view('layout/footer');
	}

}

/* End of file productos.php */
/* Location: ./application/controllers/productos.php */