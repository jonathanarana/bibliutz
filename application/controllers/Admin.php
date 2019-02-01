<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		if (!isset($_SESSION['admin'])) {
			redirect('/');
			exit;
		}
		$this->load->model('Libros_model');
	}

	public function _cargar($recurso='admin/dash'){
		$this->load->view('plantilla/header');
		$this->load->view($recurso);
		$this->load->view('plantilla/footer');
	}

	public function index(){
		$this->load->model('Reportes_model');
		$data['nprestamos']=$this->Reportes_model->get_nprestamos();
		$data['npvh']=$this->Reportes_model->get_npvh();
		$data['npv']=$this->Reportes_model->get_npv();

		$this->load->vars($data);
		$this->_cargar('admin/dash',$data);
	}

	public function Libros(){
		$data['libros']=$this->Libros_model->get_libros();
		$this->load->vars($data);
		$this->_cargar('admin/Libros',$data);
	}

	public function AgregarLibro(){
		$this->_cargar('admin/Agregar');
	}

	public function GuardarLibro(){
		$data=$_POST;
		$res=$this->Libros_model->new_libro($data);
		echo($res);
	}

	public function Ejemplares($id){
		if (isset($_POST['submit'])) {
			for ($i=0; $i < $_POST['Cantidad'] ; $i++) {
				unset($ide);
				unset($dat);
				$dat['Libro']=$id;
				$dat['Registro']=date('Y-m-d H:i:s');
				$dat['Modificacion']=date('Y-m-d H:i:s');
				$dat['Status']='1';
				$ide=$this->Libros_model->new_ejemplar($dat);
				$data['ids'][]=$ide;
			}
		}

		$data['id']=$id;
		$data['cant']=$this->Libros_model->get_cant($id);
		$data['titulo']=$this->Libros_model->get_title($id);
		$this->load->vars($data);
		$this->_cargar('admin/Ejemplares',$data);
	}
	public function Reimprimir($id){
		$data['titulo']=$this->Libros_model->get_title($id);
		$data['ids']=$this->Libros_model->get_ids($id);
		$this->load->vars($data);
		$this->_cargar('admin/Reimprimir',$data);
	}

	public function Prestamos(){
		$this->_cargar('admin/prestamos');
	}

	public function RegistrarPrestamo(){
		$this->load->model('Alumnos_model');
		$matricula=$_POST['Matricula'];
		$data['Usuario']=$this->Alumnos_model->get_idAlumno($matricula);
		$data['Ejemplar']=$_POST['idEjemplar'];
		$data['Prestamo']=date('Y-m-d H:i:s');
		$data['Vence']=date('Y-m-d',strtotime(date('Y-m-d').'+ 7 days'));
		$data['Presto']=$_SESSION['admin'];
		$data['Retorno']='0';
		$id=$this->Libros_model->new_prestamo($data);
		echo $id;
	}

	public function Devoluciones(){
		$this->_cargar('admin/devoluciones');
	}

	public function RegistrarDevolucion(){

		$ejemplar=$_POST['idEjemplar'];
		$id=$this->Libros_model->get_prestamo($ejemplar);
		if ($id<1) {
			echo "Prestamo no encontrado";
			exit;
		}
		$data['Retorno']=date('Y-m-d H:i:s');
		$data['Recibio']=$_SESSION['admin'];
		$data['Observaciones']=$_POST['Observaciones'];
		$res=$this->Libros_model->Retorno($id,$data);
		//echo $id;

			echo "Recepcion Exitosa";


	}

	public function PActivos(){
		$this->load->model('Reportes_model');
		$data['prestamos']=$this->Reportes_model->get_pactivos();
		$this->load->vars($data);
		$this->_cargar('admin/lprestamos',$data);
	}

	public function logout(){
		session_destroy();
		redirect('/');
	}

}
