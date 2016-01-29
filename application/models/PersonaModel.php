<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonaModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function agregar($persona)
	{
		try
		{
			$resultado=$this->db->query("PersonaAgregar '$persona->IdPersona','$persona->Nombre','$persona->Apellidos','$persona->Telefono','$persona->Direccion','$persona->Celular'");
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
			log_message('error','Error -> PersonaModel->agregar() '.$e->getMessage());
			return FALSE;
			
		}
	}
	public function editar($persona)
	{
		try
		{
			$resultado=$this->db->query("PersonaEditar '$persona->IdPersona','$persona->Nombre','$persona->Apellidos','$persona->Telefono','$persona->Direccion','$persona->Celular'");	
			if($resultado)
			{
				return "PersonaEditar '$persona->IdPersona','$persona->Nombre','$persona->Apellidos','$persona->Telefono','$persona->Direccion','$persona->Celular'";
			}
			else
			{
				return FALSE;
			}
		}
		catch (Exception $e)
		{
			log_message('error','Error -> PersonaModel->editar() '.$e->getMessage());
		}
	}

}

/* End of file personaModel.php */
/* Location: ./application/models/personaModel.php */