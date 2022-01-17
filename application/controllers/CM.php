<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CM extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}
	public function index()
	{
		$this->load->view('home_page');
	}
	public function listarEmpleados()
	{
		$url = 'https://sucquito.herokuapp.com/api/empleado';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = json_decode(curl_exec($ch));
		curl_close($ch);
		$datos = [
			"response" => $response
		];
		$this->load->view('empleado_page', $datos);
	}
	public function crearEmpleado()
	{
		$nombre_emp = $_POST['nombre_emp'];
		$dir_emp = $_POST['dir_emp'];
		$salario_emp = $_POST['salario_emp'];
		$fecha_ent_emp = $_POST['fecha_ent_emp'];

		$data = array(
			"nombre_emp" => $nombre_emp,
			"dir_emp" => $dir_emp,
			"salario_emp" => $salario_emp,
			"fecha_ent_emp" => $fecha_ent_emp
		);

		$url = 'https://sucquito.herokuapp.com/api/empleado';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/empleado");
	}
	public function editarEmpleado()
	{
		$cod_emp = $_POST['cod_emp'];
		$nombre_emp = $_POST['nombre_emp'];
		$dir_emp = $_POST['dir_emp'];
		$salario_emp = $_POST['salario_emp'];
		$fecha_ent_emp = $_POST['fecha_ent_emp'];

		$data = array(
			"cod_emp" => $cod_emp,
			"nombre_emp" => $nombre_emp,
			"dir_emp" => $dir_emp,
			"salario_emp" => $salario_emp,
			"fecha_ent_emp" => $fecha_ent_emp
		);
		$url = 'https://sucquito.herokuapp.com/api/empleado/'.$cod_emp;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		
		$response = curl_exec($ch);
		echo $response;
		echo $url;
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/empleado");
	}
	public function listarMedicos()
	{
		$url = 'https://sucquito.herokuapp.com/api/empleado';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$empleados = json_decode(curl_exec($ch));
		curl_close($ch);
		$url1 = 'https://sucquito.herokuapp.com/api/medico';
		$ch1 = curl_init();
		curl_setopt($ch1, CURLOPT_URL, $url1);
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
		$medicos = json_decode(curl_exec($ch1));
		curl_close($ch1);
		$datos = [
			"empleados" => $empleados,
			"medicos" => $medicos
		];
		$this->load->view('medico_page', $datos);
	}
	public function crearMedico()
	{
		$cod_emp = $_POST['cod_emp'];
		$func_med = $_POST['func_med'];
		$exp_med = $_POST['exp_med'];

		$data = array(
			"cod_emp" => $cod_emp,
			"func_med" => $func_med,
			"exp_med" => $exp_med
		);

		$url = 'https://sucquito.herokuapp.com/api/medico';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/medico");
	}
	public function editarMedico()
	{
		$cod_med = $_POST['cod_med'];
		$cod_emp = $_POST['cod_emp'];
		$func_med = $_POST['func_med'];
		$exp_med = $_POST['exp_med'];
		
		$data = array(
			"cod_med" => $cod_med,
			"cod_emp" => $cod_emp,
			"func_med" => $func_med,
			"exp_med" => $exp_med
		);
		$url = 'https://sucquito.herokuapp.com/api/medico/'.$cod_med;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		
		$response = curl_exec($ch);
		echo $response;
		echo $url;
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/medico");
	}
	public function eliminarMedico(){
		$cod_med = $_GET['cod_med'];

		$url = 'https://sucquito.herokuapp.com/api/medico/'.$cod_med;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		$response = curl_exec($ch);
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/medico");
	}
	public function listarConsultas()
	{
		$url = 'https://sucquito.herokuapp.com/api/empleado';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$empleados = json_decode(curl_exec($ch));
		curl_close($ch);
		$url1 = 'https://sucquito.herokuapp.com/api/consultas';
		$ch1 = curl_init();
		curl_setopt($ch1, CURLOPT_URL, $url1);
		curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
		$consultas = json_decode(curl_exec($ch1));
		curl_close($ch1);
		$url2 = 'https://sucquito.herokuapp.com/api/especialidad';
		$ch2 = curl_init();
		curl_setopt($ch2, CURLOPT_URL, $url2);
		curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
		$especialidades = json_decode(curl_exec($ch2));
		curl_close($ch2);
		$datos = [
			"empleados" => $empleados,
			"consultas" => $consultas,
			"especialidades" => $especialidades
		];
		$this->load->view('consulta_page', $datos);
	}
	public function crearConsulta()
	{
		$cod_emp = $_POST['cod_emp'];
		$cod_esp = $_POST['cod_esp'];
		$fecha_con = $_POST['fecha_con'];
		$hora_con = $_POST['hora_con'];
		$paciente_con = $_POST['paciente_con'];

		$data = array(
			"cod_emp" => $cod_emp,
			"cod_esp" => $cod_esp,
			"fecha_con" => $fecha_con,
			"hora_con" => $hora_con,
			"paciente_con" => $paciente_con 
		);

		$url = 'https://sucquito.herokuapp.com/api/consultas';
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		$response = curl_exec($ch);
		var_dump($response);
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/consultas");
	}
	public function editarConsulta()
	{
		$cod_con = $_POST['cod_con'];
		$cod_emp = $_POST['cod_emp'];
		$cod_esp = $_POST['cod_esp'];
		$fecha_con = $_POST['fecha_con'];
		$hora_con = $_POST['hora_con'];
		$paciente_con = $_POST['paciente_con'];
		
		$data = array(
			"cod_con" => $cod_con,
			"cod_emp" => $cod_emp,
			"cod_esp" => $cod_esp,
			"fecha_con" => $fecha_con,
			"hora_con" => $hora_con,
			"paciente_con" => $paciente_con 
		);
		$url = 'https://sucquito.herokuapp.com/api/consultas/'.$cod_con;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		
		$response = curl_exec($ch);
		echo $response;
		echo $url;
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/consultas");
	}
	public function eliminarConsulta(){
		$cod_con = $_GET['cod_con'];

		$url = 'https://sucquito.herokuapp.com/api/consultas/'.$cod_con;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		$response = curl_exec($ch);
		curl_close($ch);
		header("Location: http://localhost/CitasMedicas_Quito/consultas");
	}
	public function listarEspecialidades(){
		$url = 'https://sucquito.herokuapp.com/api/especialidad';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = json_decode(curl_exec($ch));
		curl_close($ch);
		$datos = [
			"response" => $response
		];
		$this->load->view('especialidad_page', $datos);
	}
}
