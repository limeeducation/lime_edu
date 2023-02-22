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
		$this->db->select('en_aca_city_idx');
		$this->db->select('aca_name');
		$this->db->select('logo_url');
		$this->db->select('aca_intro');
		$this->db->select('city_name');
		$this->db->from('en_academy');
		$this->db->join('en_aca_city', 'en_academy.en_aca_idx = en_aca_city.en_aca_idx');
		$this->db->where('aca_country', $nation);
		return $this->db->get()->result();
	}

	public function getPrograms($idx){
		$this->db->select('idx');
		$this->db->select('pro_name');
		$this->db->from('en_city_program');
		$this->db->where('en_aca_city_idx', $idx);
        return $this->db->get()->result();
	}

}

?>
