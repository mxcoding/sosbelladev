<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EmpleadoModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function existe($clave)
	{
		if($this->db->get_where('Empleado',array('Clave'=>$clave))->result())
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	public function agregar($empleado)
	{
		try{
			if(!$this->existe($empleado->Clave))
			{
				$resultado=$this->db->query("EmpleadoAgregar '$empleado->IdEmpleado','$empleado->Clave','$empleado->FechaNacimiento','$empleado->Mail',$empleado->SueldoHora,$empleado->TiempoComida,'$empleado->HoraEntrada','$empleado->HoraSalida','$empleado->IdPersona',$empleado->IdSucursal");
				if($resultado)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}

			}
			else{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error',$e->getMessage());
			return FALSE;
		}
	}
	public function editar($empleado)
	{
		try
		{
			$resultado=$this->db->query("EmpleadoEditar '$empleado->IdEmpleado','$empleado->Clave','$empleado->FechaNacimiento','$empleado->Mail',$empleado->SueldoHora,'$empleado->TiempoComida','$empleado->HoraEntrada','$empleado->HoraSalida'");
			if($resultado)
			{
				return "EmpleadoEditar '$empleado->IdEmpleado','$empleado->Clave','$empleado->FechaNacimiento','$empleado->Mail',$empleado->SueldoHora,'$empleado->TiempoComida','$empleado->HoraEntrada','$empleado->HoraSalida'";
			}
			else
			{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error','Error -> EmpleadoModel->editar() '.$e->getMessage());
			return FALSE;
		}
	}
	public function actualizarFoto($IdEmpleado,$Foto)
	{
		try
		{
			$resultado=$this->db->query("EmpleadoAgregarFoto '$IdEmpleado','$Foto'");
			if($resultado)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error','Error -> EmpleadoModel->actualizarFoto()'.$e->getMessage());
			return FALSE;
		}

	}
	public function eliminar($IdEmpleado)
	{
		try
		{
			$resultado=$this->db->query("EmpleadoEliminar '$IdEmpleado'");
			if($resultado)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error','Error -> EmpleadoModel->eliminar()'.$e->getMessage());
			return FALSE;
		}
	}
	public function obtenerTodos()
	{
		try
		{
			$resultado=$this->db->query('EmpleadoObtenerEmpleados')->result_array();
			if($resultado){
				return aObjeto($resultado);
			}
			else{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error','Error -> EmpleadosModel->obtenerTodos() '.$e);
			return FALSE;
		}
	}

	public function obtener($IdEmpleado)
	{
		try
		{
			$resultado=$this->db->query("EmpleadoObtener '$IdEmpleado'")->row();
			if($resultado)
			{
				return aObjeto($resultado);
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> EmpleadoModel->obtener() '.$e->getMessage());
			return FALSE;
		}
	}
	
}

/* End of file EmpleadosModel.php */
/* Location: ./application/models/EmpleadosModel.php */
