<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
		$this->load->model('EmpleadosModel','_empleado');
		$this->load->helper('file');
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Empleados','tabla'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/empleados/listar',array('empleados'=>$this->_empleado->obtenerTodos()));
		}
		else{
			$this->load->view('user/empleados/listar');
		}
		$this->load->view('layout/footer');
	}
	public function agregar(){
		$this->load->view('layout/header',array('titulo'=>'Agregar Empleado','imagen'=>TRUE,'calendario'=>TRUE,'reloj'=>TRUE,'numeric'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/empleados/agregar');
		}
		else{
			$this->load->view('user/empleados/agregar');
		}
		$this->load->view('layout/footer');
	}
	public function editar($codigo=null){
		$this->load->view('layout/header',array('titulo'=>'Editar Empleado '.$codigo,'imagen'=>TRUE,'calendario'=>TRUE,'reloj'=>TRUE,'numeric'=>TRUE,'mensajes'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/empleados/editar',array('empleado'=>$this->_empleado->obtener($codigo)));
		}
		else{
			$this->load->view('user/empleados/editar');
		}
		$this->load->view('layout/footer');
	}

	/*CRUD*/

	public function existe(){
		echo json_encode($this->_empleado->existe($this->input->post('clave')));
	}
	public function editarEmpleado(){
		$foto=$this->input->post('foto');
		$codigo=$this->input->post('codigo');
		if(strpos($foto,'base64')!==false){
			$new=TRUE;
			$a=explode(';',$foto);
			$b=explode('/',$a[0]);
			$c=explode(',',$a[1]);
			$extension=$b[1];
			$data_imagen=$c[1];
			$data = str_replace(' ', '+', $data_imagen);
			$foto=trim($codigo.'.'.$extension);
		}
		else{
			$new=FALSE;
			$a=explode('/',$foto);
			if($codigo!=$this->input->post('codigo_anterior')){
				$change=TRUE;
				$b=explode('.',$a[7]);
				$foto=$codigo.'.'.$b[1];
			}
			else{
				$change=FALSE;
				$foto=$a[7];
			}
		}
		$datos_empleado=array(
			'codigo'=>$codigo,
			'nombre'=>$this->input->post('nombre'),
			'apellidos'=>$this->input->post('apellidos'),
			'fecha_nacimiento'=>$this->input->post('fecha_nacimiento'),
			'direccion'=>$this->input->post('direccion'),
			'email'=>$this->input->post('email'),
			'telefono'=>$this->input->post('telefono'),
			'celular'=>$this->input->post('celular'),
			'salario_hora'=>$this->input->post('salario_hora'),
			'tiempo_comida'=>$this->input->post('tiempo_comida'),
			'foto'=>$foto
		);
		$empleado=(object) $datos_empleado;
		if($this->_empleado->editar($this->input->post('codigo_anterior'),$empleado)){
			if($new){
				if(is_file('assets/img/empleados/'.$this->input->post('foto_antigua'))){
					unlink('assets/img/empleados/'.$this->input->post('foto_antigua'));
				}
				if($r=write_file('assets/img/empleados/'.$foto,base64_decode($data))){
					echo json_encode(TRUE);
				}
				else{
					echo json_encode(FALSE);
				}
			}
			else{
				if($change){
					rename('assets/img/empleados/'.$this->input->post('foto_antigua'),'assets/img/empleados/'.$foto);
				}
				echo json_encode(TRUE);
			}
		}
		else{
			echo json_encode(FALSE);
		}

	}
	public function agregarEmpleado(){
		$foto=$this->input->post('foto');
		$codigo=$this->input->post('codigo');
		if($foto!='undefined'){
			$imagen=TRUE;
			$a=explode(';',$foto);
			$b=explode('/',$a[0]);
			$c=explode(',',$a[1]);
			$extension=$b[1];
			$data_imagen=$c[1];
			$data = str_replace(' ', '+', $data_imagen);
			$foto=trim($codigo.'.'.$extension);
		}
		else{
			$imagen=FALSE;
			$foto='default.png';
		}
		$datos_empleado=array(
			'id'=>trim(com_create_guid(),'{}'),
			'codigo'=>$codigo,
			'nombre'=>$this->input->post('nombre'),
			'apellidos'=>$this->input->post('apellidos'),
			'fecha_nacimiento'=>$this->input->post('fecha_nacimiento'),
			'direccion'=>$this->input->post('direccion'),
			'email'=>$this->input->post('email'),
			'telefono'=>$this->input->post('telefono'),
			'celular'=>$this->input->post('celular'),
			'salario_hora'=>floatval($this->input->post('salario_hora')),
			'tiempo_comida'=>intval($this->input->post('tiempo_comida')),
			'foto'=>$foto,
			'estado'=>TRUE
		);
		$empleado=(object) $datos_empleado;
		if($this->_empleado->agregar($empleado)){
			if($imagen){
				if($r=write_file('assets/img/empleados/'.$foto,base64_decode($data))){
					echo json_encode(TRUE);
				}	
			}
			else{
				echo json_encode(TRUE);
			}
		}
		else{
			echo json_encode(FALSE);
		}
	}
	public function eliminarEmpleado(){
		$codigo=$this->input->post('codigo');
		if($this->_empleado->eliminar($codigo)){
			echo json_encode(TRUE);
		}
		else{
			echo json_encode(FALSE);
		}
	}

}
/* End of file empleados.php */
/* Location: ./application/controllers/empleados.php */