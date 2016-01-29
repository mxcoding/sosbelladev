<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franquicias extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario'))
		{
			redirect('/', 'refresh');
		}
		$this->load->model('FranquiciaModel','franquicia');
	}
	public function index()
	{
		$this->load->view('layout/header',array('titulo'=>'Franquicias','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/listar',array('franquicias'=>$this->franquicia->obtenerTodos()));
		$this->load->view('layout/footer');
	}
	public function agregar()
	{
		$this->load->view('layout/header',array('titulo'=>'Agregar Franquicia','select'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/agregar',array('franquiciatarios'=>$this->franquicia->obtenerFranquiciatarios()));
		$this->load->view('layout/footer');
	}
	public function editar()
	{
		$IdFranquicia=$this->input->post('IdFranquicia');
		$this->load->view('layout/header',array('titulo'=>'Editar Franquicia','mensajes'=>TRUE,'select'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/franquicias/editar',array('franquicia'=>$this->franquicia->obtener($IdFranquicia),'franquiciatarios'=>$this->franquicia->obtenerFranquiciatarios()));
		$this->load->view('layout/footer');
	}

	public function agregarFranquicia()
	{
		$data_franquicia=aObjeto(array(
			'IdFranquicia'=>guid(),
			'Clave'=>$this->input->post('clave'),
			'Nombre'=>$this->input->post('nombre'),
			'IdFranquiciatario'=>$this->input->post('franquiciatario')
		));
		if(!$this->franquicia->existe($data_franquicia->Clave))
		{
			if($this->franquicia->agregar($data_franquicia))
			{
				echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La franquicia se agrego correctamente'));
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Ocurrió un problema al agregar la franquicia'));
			}
		}
		else
		{
			echo json_encode(array('estatus'=>FALSE,'mensaje'=>'La clave de la franquicia ya existe, verifíquelo'));
		}
	}
	public function editarFranquicia()
	{
		$data_franquicia=aObjeto(array(
			'IdFranquicia'=>$this->input->post('IdFranquicia'),
			'Clave'=>$this->input->post('Clave'),
			'Nombre'=>$this->input->post('Nombre'),
			'IdFranquiciatario'=>$this->input->post('IdFranquiciatario')
		));
		if($this->input->post('clave_anterior')!=$data_franquicia->Clave)
		{
			if(!$this->franquicia->existe($data_franquicia->Clave))
			{
				if($this->franquicia->editar($data_franquicia))
				{
					echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La franquicia se edito correctamente'));
				}
				else
				{
					echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Ocurrió un problema al editar la franquicia'));
				}
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'La Clave ya existe, verifíquelo'));
			}

		}
		else
		{
			if($this->franquicia->editar($data_franquicia))
			{
				echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La franquicia se edito correctamente'));
			}
			else
			{
				echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Ocurrió un problema al editar la franquicia'));
			}
		}
	}
	public function eliminar()
	{
		if($this->franquicia->eliminar($this->input->post('IdFranquicia')))
		{
			echo json_encode(array('estatus'=>TRUE,'mensaje'=>'La franquicia se elimino correctamente'));
		}
		else
		{
			echo json_encode(array('estatus'=>FALSE,'mensaje'=>'Ocurrió un problema el eliminar la franquicia'));
		}
	}
}

/* End of file franquicias.php */
/* Location: ./application/controllers/franquicias.php */