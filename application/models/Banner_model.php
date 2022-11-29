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
}

?>
