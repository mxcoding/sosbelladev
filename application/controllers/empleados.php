<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('idusuario'))
		{
			redirect('/', 'refresh');
		}
		$this->load->model('EmpleadoModel','empleado');
		$this->load->model('PersonaModel','persona');
		$this->load->helper('file');
	}
	public function index()
	{
		$this->load->view('layout/header',array('titulo'=>'Empleados','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador')
		{
			$this->load->view('admin/empleados/listar',array('empleados'=>$this->empleado->obtenerTodos()));
		}
		else
		{
			$this->load->view('user/empleados/listar');
		}
		$this->load->view('layout/footer');
	}
	public function agregar()
	{
		$this->load->view('layout/header',array('titulo'=>'Agregar Empleado','imagen'=>TRUE,'calendario'=>TRUE,'reloj'=>TRUE,'numeric'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador')
		{
			$this->load->view('admin/empleados/agregar');
		}
		else
		{
			$this->load->view('user/empleados/agregar');
		}
		$this->load->view('layout/footer');
	}
	public function editar()
	{
		$this->load->view('layout/header',array('titulo'=>'Editar Empleado '.$this->input->post('id'),'imagen'=>TRUE,'calendario'=>TRUE,'reloj'=>TRUE,'numeric'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador')
		{
			$this->load->view('admin/empleados/editar',array('empleado'=>$this->empleado->obtener($this->input->post('id'))));
		}
		else
		{
			$this->load->view('user/empleados/editar');
		}
		$this->load->view('layout/footer');
	}

	/*CRUD*/

	public function existe()
	{
		echo json_encode($this->empleado->existe($this->input->post('clave')));
	}
	public function editarEmpleado()
	{
		$data_persona=aObjeto(array(
			'IdPersona'=>$this->input->post('IdPersona'),
			'Nombre'=>$this->input->post('nombre'),
			'Apellidos'=>$this->input->post('apellidos'),
			'Telefono'=>$this->input->post('telefono'),
			'Direccion'=>$this->input->post('direccion'),
			'Celular'=>$this->input->post('celular')
			));
		$data_empleado=aObjeto(array(
			'IdEmpleado'=>$this->input->post('IdEmpleado'),
			'Clave'=>$this->input->post('codigo'),
			'FechaNacimiento'=>$this->input->post('fecha_nacimiento'),
			'Mail'=>$this->input->post('email'),
			'SueldoHora'=>$this->input->post('salario_hora'),
			'TiempoComida'=>$this->input->post('tiempo_comida'),
			'HoraEntrada'=>$this->input->post('hora_entrada'),
			'HoraSalida'=>$this->input->post('hora_salida'),
			'IdSucursal'=>'NULL',
			'IdPersona'=>$data_persona->IdPersona
		));
		$foto=$this->input->post('foto');

		if($this->input->post('codigo_anterior')!=$data_empleado->Clave)//CAMBIÓ DE CLAVE
		{
			if(!$this->empleado->existe($data_empleado->Clave))
			{
				if($this->persona->editar($data_persona))
				{
					if($this->empleado->editar($data_empleado))
					{
						if(strpos($foto,'base64'))
						{
							$nombre_foto=img64aNombre($data_empleado->IdEmpleado,$foto);
							almacenarImagenFile($nombre_foto,img64adata($foto));
							if($this->empleado->actualizarFoto($data_empleado->IdEmpleado,$nombre_foto))
							{
								echo json_encode(TRUE);
							}
						}
						else
						{
							echo json_encode(TRUE);
						}

					}
				}
			}
			else
			{
				echo json_encode(array('mensaje'=>'El codigo ya existe'));
			}
		}
		else
		{
			if($this->persona->editar($data_persona))
			{
				if($this->empleado->editar($data_empleado))
				{
					if(strpos($foto,'base64'))
					{
						$nombre_foto=img64aNombre($data_empleado->IdEmpleado,$foto);
						almacenarImagenFile($nombre_foto,img64adata($foto));
						if($this->empleado->actualizarFoto($data_empleado->IdEmpleado,$nombre_foto))
						{
							echo json_encode(TRUE);
						}
					}
					else
					{
						echo json_encode(TRUE);
					}

				}
			}
		}
	}
	public function agregarEmpleado()
	{
		//DATOS DE PERSONA
		$data_persona=aObjeto(array(
			'IdPersona'=>guid(),
			'Nombre'=>$this->input->post('nombre'),
			'Apellidos'=>$this->input->post('apellidos'),
			'Telefono'=>$this->input->post('telefono'),
			'Direccion'=>$this->input->post('direccion'),
			'Celular'=>$this->input->post('celular')
			));
		$data_empleado=aObjeto(array(
			'IdEmpleado'=>guid(),
			'Clave'=>$this->input->post('codigo'),
			'FechaNacimiento'=>$this->input->post('fecha_nacimiento'),
			'Mail'=>$this->input->post('email'),
			'SueldoHora'=>$this->input->post('salario_hora'),
			'TiempoComida'=>$this->input->post('tiempo_comida'),
			'HoraEntrada'=>$this->input->post('hora_entrada'),
			'HoraSalida'=>$this->input->post('hora_salida'),
			'IdSucursal'=>'NULL',
			'IdPersona'=>$data_persona->IdPersona
			));
		if(!$this->empleado->existe($data_empleado->Clave))
		{
			if($this->persona->agregar($data_persona))
			{
				if($this->empleado->agregar($data_empleado))
				{
					$data=$this->input->post('foto');
					$nombre_foto=img64aNombre($data_empleado->IdEmpleado,$data);
					if($nombre_foto!='default.png')
					{
						almacenarImagenFile($nombre_foto,img64adata($data));
					}
					if($this->empleado->actualizarFoto($data_empleado->IdEmpleado,$nombre_foto))
					{
						echo json_encode(TRUE);
					}
				}
				else
				{
					echo json_encode(FALSE);
				}
			}
			else{
				echo json_encode(FALSE);
			}

		}
		else
		{
			echo json_encode(FALSE);
		}
	}
	public function eliminarEmpleado()
	{
		$codigo=$this->input->post('codigo');
		if($this->empleado->eliminar($codigo))
		{
			echo json_encode(TRUE);
		}
		else{
			echo json_encode(FALSE);
		}
	}
}
/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */