<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoriasModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function agregar($categoria)
	{
		try
		{
			$resultado=$this->db->query("CategoriaAgregar '$categoria->idCategoria','$categoria->nombre','$categoria->descripcion','$categoria->idFamilia'");
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
			log_message('error','Error -> CategoriasModel->agregar()',$e->getMessage());
			return FALSE;
		}
	}
	public function editar($categoria)
	{
		try
		{
			$resultado=$this->db->query("CategoriaEditar '$categoria->idCategoria','$categoria->nombre','$categoria->descripcion','$categoria->idFamilia'");
			if($resultado){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error',$e);
			return FALSE;
		}
	}
	public function eliminar($idCategoria){
		try
		{
			$resultado=$this->db->query("CategoriaEliminar '$idCategoria'");
			if($resultado)
			{
				return TRUE;
			}
			else{
				return FALSE;
			}
		} catch (Exception $e) {
			log_message('error',$e);
			return FALSE;
		}
	}
	public function obtenerTodos(){
		try
		{
			$resultado=$this->db->query('CategoriaObtenerCategorias')->result_array();
			if($resultado)
			{
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
	public function obtener($idCategoria)
	{
		try
		{
			$resultado=$this->db->query("CategoriaObtener '$idCategoria'")->row();
			if($resultado)
			{
				return aObjeto($resultado);
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
}

/* End of file CategoriasModel.php */
/* Location: ./application/models/CategoriasModel.php */