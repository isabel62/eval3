<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		
		//$this->load->model('form_model');  
	}

	public function validar()

	{
		$name=$this	->input->post("nombre");

		$lasname=$this->input->post("apellido");

		$email=$this->input->post("correo");

		echo "Nombre:"$name."Apellido."$lastname."Correo";.$email;

       $data=array(nombre=>$this->input->post("nobre"),

       	'apellido'=>$this->input->post+("apellido");

       	'correo'=>$this->input->post("corre");

       	//llamado a la funcion punto9

       	$this->form-

       	model->guardar($data);

       	 } 

		$this->load->view('formulario');
	}
}
