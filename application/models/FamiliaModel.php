<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class FamiliaModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function agregar($familia)
	{
		try
		{
			if($this->db->query("FamiliaAgregar '$familia->id','$familia->nombre','$familia->descripcion'"))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
			
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}
	public function editar($familia)
	{
		try
		{
			$resultado=$this->db->query("FamiliaEditar '$familia->id','$familia->nombre','$familia->descripcion'");
			if($resultado)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function eliminar($id){
		try
		{
			$resultado=$this->db->query("FamiliaEliminar '$id'");
			if($resultado)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e){
			log_message('error',$e);
			return FALSE;
		}
	}
	public function obtenerTodos()
	{
		try
		{
			$resultado=$this->db->query('FamiliaObtenerFamilias')->result_array();
			if($resultado){
				return aObjeto($resultado);
			}
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function obtener($id)
	{
		$resultado=$this->db->query("FamiliaObtener '$id'")->row();
		return aObjeto($resultado);
	}
}
/* End of file FamiliasModel.php */
/* Location: ./application/models/FamiliasModel.php */