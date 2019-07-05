<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horario extends CI_Controller {

	public function index()
	{
		$this->load->view('horario');
	}

	public function listar()
	{
		$this->load->view('lista');
	}
}
