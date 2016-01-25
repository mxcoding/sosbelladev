<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EmpleadosModel extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}
	public function existe($clave)
	{
		if($this->db->get_where('Empleados',array('codigo'=>$clave))->result())
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
			if(!$this->existe($empleado->codigo))
			{
				if($this->db->insert('Empleados', $empleado))
				{
					return TRUE;
				}
				else return FALSE;
			}
			else{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function editar($codigo,$empleado)
	{
		try
		{
			$this->db->where('codigo',$codigo);
			if($this->db->update('Empleados', $empleado))
			{
				return TRUE;
			}
			else return FALSE;
		}
		catch(Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function eliminar($codigo)
	{
		try
		{
			$this->db->where('codigo',$codigo);
			if($this->db->update('Empleados',array('estado'=>FALSE)))
			{
				return TRUE;
			}
			else return FALSE;
		}
		catch(Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function obtenerTodos()
	{
		return $this->db->get_where('Empleados',array('estado'=>1))->result();
	}
	public function obtener($codigo)
	{
		return $this->db->get_where('Empleados',array('codigo'=>$codigo))->row();
	}
	
}

/* End of file EmpleadosModel.php */
/* Location: ./application/models/EmpleadosModel.php */
