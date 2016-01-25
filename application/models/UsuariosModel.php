<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsuariosModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function agregar(){

	}

	public function editar($datos){
	}

	public function eliminar($idusuario){
	}

	public function login($user,$pass){
		try {
			$query = $this->db->get_where('Usuario', array('Usuarioo' => $user,'Contrasenia'=>$pass))->row();
			if($query){
				return $query;
			}
			else{
				return FALSE;
			}
		}
		catch (Exception $e) {
			return FALSE;	
		}
	}

	public function existe($user){
		try{
			$query = $this->db->get_where('Usuario', array('Usuarioo' => $user))->row();
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}

		}
		catch(Exception $e){
			return FALSE;
		}
	}
	public function bloquear($usuario){
		try {
			$this->db->where('Usuarioo',$usuario);
			if($this->db->update('Usuario',array('UltimoIntento'=>date('H:i:s')))){
				return TRUE;
			}
			else{
				return FALSE;
			}
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function desbloquear($usuario){
		try {
			if($this->db->query("UPDATE Usuario set UltimoIntento=NULL WHERE Usuarioo='$usuario'")){
				return TRUE;
			}
			else{
				return FALSE;
			}
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function ultimo_intento($usuario){
		try {
			if($user=$this->db->get_where('Usuario',array('Usuarioo'=>$usuario))->row()){
				return $user->UltimoIntento;
			}
			else{
				return FALSE;
			}
		} catch (Exception $e) {
			return FALSE;
		}
	}

}

/* End of file UsuariosModel.php */
/* Location: ./application/models/UsuariosModel.php */