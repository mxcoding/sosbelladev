<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('UsuariosModel','usuario');
	}
	public function tiempo($primer){
		$this->load->helper('date');
		$tiempo=strtotime($primer);
		$tiempo2=strtotime("now");
		$interval  = abs($tiempo2 - $tiempo);
		$minutos=30-round($interval/60);
		return $minutos;
	}
	public function index(){
		if(!isset($_SESSION['intentos'])){
			$_SESSION['intentos']=0;
		}
		if($this->input->is_ajax_request()){
			if($usuario=$this->usuario->login($this->input->post('usuario'),sha1($this->input->post('contra')))){
				$tiempo=$this->usuario->ultimo_intento($this->input->post('usuario'));
				if($this->tiempo($tiempo)>0){
					$resp = array(
						'respuesta'=>FALSE,
						'mensaje'=>'Tu cuenta está bloqueada, necesitar esperar '.$this->tiempo($tiempo).' minutos'
					);
					echo json_encode($resp);
				}
				else{
					if($this->input->post('usuario')=='administrador')
					{
						$session_data = array(
							'idusuario' => $usuario->IdUsuario,
							'usuario'=>$usuario->Usuarioo,
							'perfil'=>'administrador'
						);
					}
					else
					{
						$session_data = array(
							'idusuario' => $usuario->IdUsuario,
							'usuario'=>$usuario->Usuarioo,
							'perfil'=>'franquiciatario'
						);
					}
					
					$this->usuario->desbloquear($this->input->post('usuario'));
					$this->session->set_userdata($session_data);
					echo json_encode(array('respuesta'=>TRUE));
				}
				
			}
			else
			if($tiempo=$this->usuario->ultimo_intento($this->input->post('usuario'))){
				if($this->tiempo($tiempo)<=0){
					$this->usuario->desbloquear($this->input->post('usuario'));
					$_SESSION['intentos']=0;
					echo json_encode(array('respuesta'=>FALSE,'count'=>$_SESSION['intentos']));
				}
				else{
					$resp = array(
						'respuesta'=>FALSE,
						'mensaje'=>'Tu cuenta está bloqueada, necesitar esperar '.$this->tiempo($tiempo).' minutos'
					);
					echo json_encode($resp);
				}
			}
			else
			if($_SESSION['intentos']>=4){
				$this->usuario->bloquear($this->input->post('usuario'));
				$tiempo=$this->usuario->ultimo_intento($this->input->post('usuario'));
				echo json_encode(array('respuesta'=>FALSE,'mensaje'=>'Tu cuenta ha sido bloqueada, necesitas esperar 30 minutos'));
			}
			else
			if($this->usuario->existe($this->input->post('usuario'))){
				$_SESSION['intentos']=$_SESSION['intentos']+1;
				echo json_encode(array('respuesta'=>FALSE,'count'=>$_SESSION['intentos']));
			}
			else{
				echo json_encode(array('respuesta'=>FALSE));
			}
		}
	}
	public function unseti(){
		session_destroy();
	}	
}
