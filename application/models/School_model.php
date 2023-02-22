<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class School_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	public function getSchool($nation){
		$this->db->select('en_aca_idx');
		$this->db->select('aca_name');
		$this->db->select('logo_url');
		$this->db->select('aca_intro');
		$this->db->from('en_academy');
		$this->db->where('aca_country', $nation);
		return $this->db->get()->result();
	}

}

?>
