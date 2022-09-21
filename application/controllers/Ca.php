<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ca extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->mng('bc');
	}

	public function mng($page){
		if($page == 'bc'){
			$this->load->view('old/mng/bc');
		}else if($page == 'ab'){
			$this->load->view('old/mng/ab');
		}
	}

}

