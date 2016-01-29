<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario'))
		{
			redirect('/', 'refresh');
		}
		$this->load->model('SucursalModel','sucursal');
		$this->load->model('FranquiciaModel','franquicia');
	}
	public function index()
	{
		$this->load->view('layout/header',array('titulo'=>'Sucursales','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/listar',array('sucursales'=>$this->sucursal->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregar()
	{
		$this->load->view('layout/header',array('titulo'=>'Agregar Sucursal','mensajes'=>TRUE,'select'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/agregar',array('franquicias'=>$this->franquicia->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function editar()
	{
		$this->load->view('layout/header',array('titulo'=>'Editar Sucursal ','mensajes'=>TRUE,'select'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/sucursales/editar',array('sucursal'=>$this->sucursal->obtener($this->input->post('IdSucursal')),'franquicias'=>$this->franquicia->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregarSucursal()
	{
		$data_sucursal=aObjeto(array(
			'IdSucursal'=>guid(),
			'Clave'=>$this->input->post('Clave'),
			'Nombre'=>$this->input->post('Nombre'),
			'Direccion'=>$this->input->post('Direccion'),
			'IdFranquicia'=>$this->input->post('IdFranquicia')
		));
		if(!$this->sucursal->existe($data_sucursal->Clave))
		{
			if($this->sucursal->agregar($data_sucursal))
			{
				echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La sucursal se agregó correctamente'));
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Hubo un problema al agregar la sucursal'));	
			}
		}
		else
		{
			echo json_encode(array('estatus'=>FALSE,'mensaje'=>'La clave ya existe, verifíquelo'));
		}
	}
	public function editarSucursal()
	{
		$data_sucursal=aObjeto(array(
			'IdSucursal'=>$this->input->post('IdSucursal'),
			'Clave'=>$this->input->post('Clave'),
			'Nombre'=>$this->input->post('Nombre'),
			'Direccion'=>$this->input->post('Direccion'),
			'IdFranquicia'=>$this->input->post('IdFranquicia')
		));
		if($this->input->post('clave_anterior')!=$data_sucursal->Clave)
		{
			if(!$this->sucursal->existe($data_sucursal->Clave))
			{
				if($this->sucursal->editar($data_sucursal))
				{
					echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La sucursal se editó correctamente'));
				}
				else
				{
					echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Hubo un problema al agregar la sucursal'));	
				}
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'La clave ya existe, verifíquelo'));
			}
		}
		else
		{
			if($this->sucursal->editar($data_sucursal))
			{
				echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La sucursal se editó correctamente'));
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Hubo un problema al agregar la sucursal'));	
			}
		}
	}
	public function eliminarSucursal()
	{
		if($this->sucursal->eliminar($this->input->post('IdSucursal')))
		{
			echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La sucursal se eliminó correctamente'));
		}
		else
		{
			echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Hubo un problema al eliminar la sucursal'));
		}
	}
}

/* End of file sucursales.php */
/* Location: ./application/controllers/sucursales.php */