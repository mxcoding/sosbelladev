<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class compras extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('idusuario')){
			redirect('/', 'refresh');
		}
	}
	/*MUESTRA TODOS LOS PRODUCTOS*/
	public function index(){
		$this->load->view('layout/header',array('titulo'=>'Productos','css'=>'navbar','css_body'=>'productos'));
		$this->load->view('layout/navbar');
		$this->load->view('productos');
		$this->load->view('layout/footer',array('js_productos'=>TRUE));
	}


	/*MUESTRA LA DESCRIPCIÓN DE UN PRODUCTO*/
	public function detalle($id){
		$this->load->view('layout/header',array('titulo'=>'Detalle del Producto '.$id,'css'=>'navbar','css_body'=>'producto_detalle','fancy'=>TRUE));
		$this->load->view('layout/navbar');
		$this->load->view('detalle_producto');
		$this->load->view('layout/footer',array('fancy'=>TRUE));
	}
	/*MUESTRA LOS PRODUCTOS ACTUALES PARA EL CARRITO*/
	public function carrito(){
		$this->load->view('layout/header',array('titulo'=>'Carrito de Compras','css'=>'navbar','css_body'=>'carrito'));
		$this->load->view('layout/navbar');
		$this->load->view('carrito');
		$this->load->view('layout/footer',array('js_productos'=>TRUE));
	}
	public function orden(){
		$this->load->view('layout/header',array('titulo'=>'Orden de Compra','css'=>'navbar'));
		$this->load->view('layout/navbar');
		$this->load->view('orden');
		$this->load->view('layout/footer');
	}


	/*QUITA UN PRODUCTO DEL CARRITO*/
	public function quitarProducto(){
		$data = array(
			'rowid'   =>$this->input->post('idp'),
			'qty'     => 0
		);
		if($this->cart->update($data)){
			echo TRUE;
		}
		else{
			echo FALSE;
		}
	}


	/*RETORNA EL TOTAL DE LOS PRODUCTOS DEL CARRITO*/
	public function totalProductos(){
		echo $this->cart->total_items();
	}


	/*RETORNA EN FORMATO JSON EL CARRITO*/
	public function getproductosCarrito(){
		if($carrito=$this->cart->contents()){
			echo json_encode($carrito);
		}
		else{
			echo json_encode(FALSE);
		}
	}


	/*AGREGAR UN PRODUCTO AL CARRITO, SI EL ID DEL PRODUCTO YA EXISTE, ACTUALIZA LA CANTIDAD DEL PRODCUTO*/
	public function agregarCarrito(){
		if($this->input->is_ajax_request()){
			$data = array(
				'id'      => $this->input->post('id'),
				'qty'     => $this->input->post('cantidad'),
				'price'   => $this->input->post('precio'),
				'name'    => $this->input->post('nombre'),
				'color'	  =>$this->input->post('color')
			);
			if($this->cart->insert($data)){
				echo json_encode(TRUE);	
			}
			else{
				echo json_encode(FALSE);
			}
			
		}
		
	}

	/*ELIMINA TODOS LOS PRODUCTOS DEL CARRITO*/
	public function vaciar(){
		if($this->input->is_ajax_request()){
			$this->cart->destroy();
		}
	}

}
/* End of file productos.php */
/* Location: ./application/controllers/productos.php */