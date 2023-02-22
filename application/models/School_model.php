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
		$this->db->select('en_academy.en_aca_idx');
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

	public function getProgramDetail($idx){
		$this->db->select('pro_name');
		$this->db->select('pro_class_week');
		$this->db->select('pro_intro');
		$this->db->select('pro_level');
		$this->db->select('pro_start');
		$this->db->select('pro_period');
		$this->db->from('en_city_program');
		$this->db->where('idx', $idx);
		return $this->db->get()->result_array();
	}

	public function getDormitoryDetail($idx){
		$this->db->select('dorm_type');
		$this->db->select('dorm_bed_meal');
		$this->db->select('dorm_bath');
		$this->db->select('dorm_distance_school');
		$this->db->from('en_city_dorm');
		$this->db->where('en_aca_city_idx', $idx);
		return $this->db->get()->result_array();
	}

	public function getSchoolIntro($aca_idx){
		$this->db->select('dorm_type');
		$this->db->from('en_academy');
        $this->db->where('en_aca_idx', $aca_idx);
        return $this->db->get()->result();
	}

}

?>
