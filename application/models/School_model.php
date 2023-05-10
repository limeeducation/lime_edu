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
		$this->db->select('aca_intro');
		$this->db->from('en_academy');
        $this->db->where('en_aca_idx', $aca_idx);
        return $this->db->get()->result();
	}

	public function getPhilSchools($dist = null){
		$this->db->select('ph_idx');
		$this->db->select('aca_name');
		$this->db->select('logo_url');
		$this->db->select('aca_city');
		$this->db->select('aca_address');
		$this->db->select('aca_students');
		$this->db->select('aca_curri');
		$this->db->select('aca_published');
		$this->db->select('aca_detail');
		$this->db->from('phil_academy');
		if($dist != null && $dist != 'etc'){
			$dist = $dist == 'cebu' ? '세부' : '바기오';
			$this->db->where('aca_city', $dist);
		}
		$this->db->order_by('aca_name', 'ASC');
		return $this->db->get()->result();
	}

	public function getPhBaseInfo($idx){
		$this->db->select('ph_idx');
        $this->db->select('aca_name');
        $this->db->select('logo_url');
        $this->db->select('aca_city');
        $this->db->select('aca_address');
        $this->db->select('aca_students');
        $this->db->select('aca_curri');
        $this->db->select('aca_published');
        $this->db->select('aca_detail');
        $this->db->from('phil_academy');
        $this->db->where('ph_idx', $idx);
		return $this->db->get()->result_array();
	}

	public function getPhSns($idx){
		$this->db->select('sns_type');
        $this->db->select('sns_url');
        $this->db->from('phil_sns');
        $this->db->where('ph_idx', $idx);
        return $this->db->get()->result_array();
	}

	public function getPhCurri($idx){
    	$this->db->select('idx');
    	$this->db->select('curri_name');
    	$this->db->select('curri_price');
    	$this->db->select('fixed_period');
        $this->db->from('phil_curri');
        $this->db->where('ph_idx', $idx);
        return $this->db->get()->result_array();
    }

    public function getPhDrom($idx){
    	$this->db->select('dorm_name');
        $this->db->select('dorm_price');
        $this->db->from('phil_dorm');
        $this->db->where('ph_idx', $idx);
        return $this->db->get()->result_array();
    }

    public function getLongTerm($idx){
    	$this->db->select('promo_over_period');
    	$this->db->select('discount_price');
    	$this->db->from('phil_long_term_promo');
        $this->db->where('ph_idx', $idx);
        return $this->db->get()->result_array();
    }

    public function getCurriDetail($idx){
    	$this->db->select('class_name');
        $this->db->select('class_detail');
        $this->db->from('phil_curri_detail');
        $this->db->where('curri_idx', $idx);
        return $this->db->get()->result_array();
    }

    public function getPhoto($idx){
    	$this->db->select('img_url');
        $this->db->from('phil_photo');
        $this->db->where('ph_idx', $idx);
        return $this->db->get()->result_array();
    }
}

?>
