<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publico extends CI_Controller {

	public function _cargar($recurso='publico/welcome'){
		$this->load->view('plantilla/header');
		$this->load->view($recurso);
		$this->load->view('plantilla/footer');
	}

	public function index(){
		$this->_cargar('publico/welcome');
	}

	public function buscar(){
		if (isset($_POST['submit'])) {
			$this->load->model('Libros_model');
			$por=$_POST['por'];
			$criterio=$_POST['criterio'];
			$data['libros']=$this->Libros_model->find_libros($por,$criterio);
			$this->load->vars($data);
			$this->_cargar('publico/buscar',$data);
		}
		else{
			$this->_cargar('publico/buscar');
		}
	}

	public function login(){
		if (isset($_SESSION['admin'])) {
			redirect('/');
			exit;
		}
		if (isset($_POST['user'])) {
			$this->load->model('Empleados_model');
			$data['user']=$_POST['user'];
			$data['pass']=$_POST['password'];
			$res=$this->Empleados_model->login($data);

			if (count($res)>0) {
				if ($res[0]['idAdministradores']>0) {
					$_SESSION['admin']=$res[0]['idAdministradores'];
					$_SESSION['adm_name']=$res[0]['Nombre'];
					redirect('Admin/');
					exit;
				}
			}

		}
		$this->_cargar('publico/login');
	}

}
