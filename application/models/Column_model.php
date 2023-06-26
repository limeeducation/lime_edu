<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Column_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function getColumn($col_idx){

		$this->db->select('col_title');
		$this->db->select('col_subject');
		$this->db->select('col_cnts');
		$this->db->select('use_yn');
		$this->db->from('lime_columns');
		$this->db->where('idx', $col_idx);
		return $this->db->get()->result();
	}

}

?>
