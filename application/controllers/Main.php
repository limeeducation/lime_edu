<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model(array('old_model'));
	}
	public function index()
	{
		$query = "select * from ms_board_table where isdel != '1' order by idx desc limit 0,3";
		$result = $this->old_model->run_query($query);
		$query = "select * from ms_board_table where isdel != '1' order by idx desc limit 3,6";
		$result2 = $this->old_model->run_query($query);
		$this->document->view('main/old_main', array(
        			'result' 	=> $result,
        			'result2'	=> $result2
        ));
	}
}
