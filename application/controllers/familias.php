<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Familias extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario'))
		{
			redirect('/', 'refresh');
		}
		$this->load->model('FamiliaModel','familias');
	}
	
	public function index()
	{
		$this->load->view('layout/header',array('titulo'=>'Familias','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/familias/listar',array('familias'=>$this->familias->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregar()
	{
		$this->load->view('layout/header',array('titulo'=>'Agregar Familia','mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/familias/agregar');
		$this->load->view('layout/footer');
	}
	public function editar()
	{
		$id=$this->input->post('id');
		if(isset($id))
		{
			$this->load->view('layout/header',array('titulo'=>'Editar Familia','mensajes'=>TRUE));
			$this->load->view('layout/navbar');
			$this->load->view('admin/familias/editar',array('familia'=>$this->familias->obtener($this->input->post('id'))));
			$this->load->view('layout/footer');
		}
		else
			redirect(base_url('familias'),'refresh');
		
	}
	public function agregarFamilia()
	{
		$datos_familia = array(
			'id'=>guid(),
			'nombre' =>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('descripcion'),
			'estado'=>TRUE
		);
		if($this->familias->agregar((object) $datos_familia))
		{
			echo json_encode(TRUE);
		}
		else
		{
			echo json_encode(FALSE);
		}
	}
	public function editarFamilia()
	{
		$familia = array(
			'id'=>$this->input->post('id'),
			'nombre' =>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('descripcion')
		);
		if($this->familias->editar((object) $familia))
		{
			echo json_encode(TRUE);
		}
		else{
			echo json_encode(FALSE);
		}
	}
	public function eliminarFamilia()
	{
		if($this->familias->eliminar($this->input->post('id')))
		{
			echo json_encode(TRUE);
		}
		else{
			echo json_encode(FALSE);
		}
	}

}
// End of file familias.php
// Location: ./application/controllers/familias.php