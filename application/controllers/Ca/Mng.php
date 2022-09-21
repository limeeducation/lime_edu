<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mng extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->bc();
	}

	public function bc(){
		echo "1231212213";
		$this->load->view('old/mng/bc');
	}

	public function ab(){
		$this->load->view('old/mng/ab');
	}
}

