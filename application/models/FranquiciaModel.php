<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FranquiciaModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function obtenerTodos()
	{
		try
		{
			$resultado=$this->db->query('FranquiciaObtenerFranquicias')->result_array();
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
			log_message('error','Error -> FranquiciaModel->obtenerTodos()',$e->getMessage());
		}
	}
	public function existe($Clave)
	{
		try
		{
			if($this->db->get_where('Franquicia',array('Clave'=>$Clave))->result())
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
			log_message('error','Error -> FranquiciaModel->existe()',$e->getMessage());
		}
	}
	public function obtener($IdFranquicia)
	{
		try
		{
			$resultado=$this->db->query("FranquiciaObtener '$IdFranquicia'")->row();
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
			log_message('error','Error -> FranquiciaModel->obtener()',$e->getMessage());
		}
	}
	public function obtenerFranquiciatarios()
	{
		try
		{
			$resultado=$this->db->query('FranquiciatarioObtenerFranquiciatarios')->result_array();
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
			log_message('error','Error -> FranquiciaModel->obtener()',$e->getMessage());
		}
	}
	public function agregar($franquicia)
	{
		try
		{
			$resultado=$this->db->query("FranquiciaAgregar '$franquicia->IdFranquicia','$franquicia->Clave','$franquicia->Nombre','$franquicia->IdFranquiciatario'");
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
			log_message('error','Error -> FranquiciaModel->agregar()',$e->getMessage());
			return FALSE;
		}
	}
	public function editar($franquicia)
	{
		try
		{
			$resultado=$this->db->query("FranquiciaEditar '$franquicia->IdFranquicia','$franquicia->Clave','$franquicia->Nombre','$franquicia->IdFranquiciatario'");
			if($resultado){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> FranquiciaModel->editar()',$e->getMessage());
			return FALSE;
		}
	}
	public function eliminar($IdFranquicia)
	{
		try
		{
			$resultado=$this->db->query("FranquiciaEliminar '$IdFranquicia'");
			if($resultado){
				return "FranquiciaEliminar '$IdFranquicia'";
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> FranquiciaModel->eliminar()',$e->getMessage());
			return FALSE;
		}
	}
}

/* End of file franquicia.php */
/* Location: ./application/models/franquicia.php */