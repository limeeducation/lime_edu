<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banner_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function getBanner($tab, $type){
		$this->db->select('banr_seq');
		$this->db->select('banr_img');
		$this->db->select('banr_link_url');
		$this->db->from('banner');
		$this->db->where('banr_type', $type);
		$this->db->where('banr_tab', $tab);
		$this->db->where('banr_use_yn', 'Y');
		$this->db->order_by('banr_seq', 'ASC');
		return $this->db->get()->result();
	}

	public function getColumn($subject = null){
		$this->db->select('col_title');
		$this->db->select('col_cnts');
		$this->db->select('col_thumb');
		$this->db->from('lime_columns');
		$this->db->where('use_yn', 'Y');
		//칼럼 주제 1: 해외대학유학 / 2: 조기유학 / 3: 어학연수 / 4: 가족연수,캠프,스쿨링
		if(!empty($subject)){
			$this->db->where('col_subject', $subject);
		}
		$this->db->order_by('reg_date', 'DESC');
		$this->db->limit(10);
        return $this->db->get()->result();
	}
}

?>
