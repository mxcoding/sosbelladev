<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SucursalModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function obtenerTodos()
	{
		try
		{
			$resultado=$this->db->query('SucursalObtenerSucursales')->result_array();
			if($resultado)
			{
				return aObjeto($resultado);
			}
			else
			{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			return FALSE;
			log_message('error','Error -> SucursalModel->obtenerTodos()',$e->getMessage());
		}
	}
	public function existe($Clave)
	{
		try
		{
			if($this->db->get_where('Sucursal',array('Clave'=>$Clave))->result())
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
			return FALSE;
			log_message('error','Error -> SucursalModel->existe()',$e->getMessage());
		}
	}
	public function obtener($IdSucursal)
	{
		try
		{
			$resultado=$this->db->query("SucursalObtener '$IdSucursal'")->row();
			if($resultado)
			{
				return aObjeto($resultado);
			}
			else
			{
				return FALSE;
			}
		}
		catch(Exception $e)
		{
			return FALSE;
			log_message('error','Error -> SucursalModel->obtener()',$e->getMessage());
		}
	}
	public function agregar($sucursal)
	{
		try
		{
			$resultado=$this->db->query("SucursalAgregar '$sucursal->IdSucursal','$sucursal->Clave','$sucursal->Nombre','$sucursal->Direccion','$sucursal->IdFranquicia'");
			if($resultado)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
			
		}
		catch (Exception $e) {
			log_message('error','Error -> SucursalModel->agregar()',$e->getMessage());
			return FALSE;
		}
	}
	public function editar($sucursal)
	{
		try
		{
			$resultado=$this->db->query("SucursalEditar '$sucursal->IdSucursal','$sucursal->Clave','$sucursal->Nombre','$sucursal->Direccion','$sucursal->IdFranquicia'");
			if($resultado){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> SucursalModel->editar()',$e->getMessage());
			return FALSE;
		}
	}
	public function eliminar($IdSucursal)
	{
		try
		{
			$resultado=$this->db->query("SucursalEliminar '$IdSucursal'");
			if($resultado){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> SucursalModel->editar()',$e->getMessage());
			return FALSE;
		}
	}
}

/* End of file Sucursal.php */
/* Location: ./application/models/Sucursal.php */