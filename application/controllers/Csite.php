<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Csite extends CI_Controller {

	public $menu;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->library('email');
		$this->menu = [
							[1, 'Introducción','index'],
							[2, 'Funcionamiento','funcionamiento',['¿Cómo funciona?'=>'comofunciona', 'Diagrama de flujo'=>'diagramadeflujo','Costro de servicio'=>'costodeservicio'] ],
							[2, 'Simuladores','simuladores',['Simulador de colocación mensual'=>'simuladorcolocacionmensual', 'Simulador de inversión'=>'simuladorinversion','Simulador de prestamo'=>'simuladorprestamo'] ],
							[1, 'Competencia','competencia'],
							[1, 'Documentación legal','documentacionlegal'],
							[1, 'Contacto','contacto']
						];
	}

	public function index()
	{
		$data['css'] = $this->load->view('css', '', true);
		$data['script'] = $this->load->view('script', '', true);
		$data['menuDinamico'] = $this->load->view('menu', ['paginaActual'=>'index'] ,true);
		$this->load->view('index', $data);
	}

	public function funcionamiento()
	{
		
	}

	public function comofunciona()
	{
		
	}

	public function diagramadeflujo()
	{
		
	}

	public function costodeservicio()
	{
		
	}

	public function simuladores()
	{
		
	}

	public function simuladorcolocacionmensual()
	{
		
	}

	public function simuladorinversion()
	{
		
	}

	public function simuladorprestamo()
	{
		
	}

	public function competencia()
	{
		
	}

	public function documentacionlegal()
	{
		
	}

	public function contacto()
	{
		
	}

	public function funcionAntonio()
	{
		return true;
	}

}
?>