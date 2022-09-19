<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Old_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function run_query($query){
		$this->db->query($query);
	}
}

?>
