<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categorias extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario'))
		{
			redirect('/', 'refresh');
		}
		$this->load->model('CategoriasModel','categorias');
		$this->load->model('FamiliaModel','familias');
	}
	public function index()
	{
		$this->load->view('layout/header',array('titulo'=>'Categorias','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/categorias/listar',array('categorias'=>$this->categorias->obtenerTodos(),'familias'=>$this->familias->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregar()
	{
		$this->load->view('layout/header',array('titulo'=>'Agregar Categoria','mensajes'=>TRUE,'select'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/categorias/agregar',array('familias'=>$this->familias->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function editar($id=null)
	{
		$this->load->view('layout/header',array('titulo'=>'Editar Categoria','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/categorias/editar',array('categoria'=>$this->categorias->obtener($id),'familias'=>$this->familias->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregarCategoria()
	{
		$categoria = array(
			'idCategoria'=>guid(),
			'nombre' =>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('descripcion'),
			'idFamilia'=>$this->input->post('familia')
		);
		if($this->categorias->agregar((object) $categoria))
		{
			echo json_encode(TRUE);
		}
		else
		{
			echo json_encode(FALSE);
		}
	}
	public function editarCategoria()
	{
		$categoria = array(
			'idCategoria'=>$this->input->post('idCategoria'),
			'nombre'=>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('descripcion'),
			'idFamilia'=>$this->input->post('familia')
		);
		if($this->categorias->editar((object) $categoria))
		{
			echo json_encode(TRUE);
		}
		else
		{
			echo json_encode(FALSE);
		}
	}
	public function eliminarCategoria()
	{
		if($this->categorias->eliminar($this->input->post('id')))
		{
			echo json_encode(TRUE);
		}
		else
		{
			echo json_encode(FALSE);
		}
	}
}
/* End of file categorias.php */
/* Location: ./application/controllers/categorias.php */