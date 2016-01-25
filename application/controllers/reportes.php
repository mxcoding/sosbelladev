<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {
	public function __construct(){
		parent::__construct();
		/*
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}*/
	}
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Ventas Sucursales','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/sucursales');
		}
		else{
			$this->load->view('user/reportes/ventas');
		}
		$this->load->view('layout/footer');
	}
	public function sosbella(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Ventas SOSBELLA','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/reportes/sosbella');
		$this->load->view('layout/footer');
	}
	public function mas_vendidos(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Productos más Vendidos','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/reportes/mas_vendidos');
		$this->load->view('layout/footer');
	}
	public function cortes_caja(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Cortes de Caja','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('admin/reportes/cortes_caja');
		$this->load->view('layout/footer');
	}
	public function nomina(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Nómina','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/nomina');
		}
		else{
			$this->load->view('user/reportes/nomina');
		}
		$this->load->view('layout/footer');
	}
	public function asistencia(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Asistencia','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/asistencia');
		}
		else{
			$this->load->view('user/reportes/asistencia');
		}
		$this->load->view('layout/footer');
	}
	public function vendedores(){
		$this->load->view('layout/header',array('titulo'=>'Reporte de Vendedores','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/vendedores');
		}
		else{
			$this->load->view('user/reportes/vendedores');
		}
		$this->load->view('layout/footer');
	}
	public function detalle($fecha=null){
		$this->load->view('layout/header',array('titulo'=>'Detalle Corte de Caja','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('admin/reportes/detalle',array('fecha' => $fecha));
		$this->load->view('layout/footer');
	}
	public function comparativo(){
		$this->load->view('layout/header',array('titulo'=>'Comparativo de Ventas','tabla'=>TRUE,'graficas'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/comparativo');
		}
		else{
			$this->load->view('user/reportes/comparativo');
		}
		$this->load->view('layout/footer');
	}

	public function obsoletos(){
		$this->load->view('layout/header',array('titulo'=>'Reporte Productos Obsoletos','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/obsoletos');
		}
		else{
			$this->load->view('user/reportes/obsoletos');
		}
		$this->load->view('layout/footer');
	}

	public function no_inventariable(){
		$this->load->view('layout/header',array('titulo'=>'Reporte Productos No Inventariable','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/no_inventariable');
		}
		else{
			$this->load->view('user/reportes/no_inventariable');
		}
		
		$this->load->view('layout/footer');
	}

	public function minimos(){
		$this->load->view('layout/header',array('titulo'=>'Reporte Productos Minimos por Sucursal','calendario'=>TRUE,'tabla'=>TRUE));
		$this->load->view('layout/navbar');
		if($this->session->userdata('perfil')=='administrador'){
			$this->load->view('admin/reportes/minimos');
		}
		else{
			$this->load->view('user/reportes/minimos');
		}
		
		$this->load->view('layout/footer');
	}


	/*USER*/
	public function ventas(){
		$this->load->view('layout/header',array('titulo'=>'Comparativo de Ventas','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('user/reportes/ventas');
		$this->load->view('layout/footer');
	}

}

/* End of file reportes.php */
/* Location: ./application/controllers/reportes.php */