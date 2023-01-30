<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_prod_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}
	public function run_query($query){
		return $this->db->query($query)->result();
	}

	public function selectProdList(){
		$q_get_simple_students = "SELECT stu_idx, stu_name, stu_nat, stu_field, start_dt, stu_mobile, cur_area, reg_date
								  FROM apply_students
								  WHERE contact_yn = 'N'
								  ORDER BY reg_date DESC limit 10";

		if($isCnt){
			$q_get_simple_students = "SELECT count(*) as cnt FROM apply_students";
		}
		$result =  $this->db->query($q_get_simple_students)->result();
		return $result;
	}

	public function addBanner($data){
		$tab = $data['banr_tab'];
		$type = $data['banr_type'];
		$seq_max_q = "SELECT MAX(banr_seq) AS seq FROM banner WHERE banr_tab='{$tab}' AND banr_type='{$type}'";
		$res =  $this->db->query($seq_max_q)->result();
		$seq_max = $res[0]->seq;
		$data['banr_seq'] = $seq_max+1;
		$this->db->insert('banner',$data);
        return $this->db->insert_id();
	}

	public function editBanner($data){
		$edit_data = array(
			'banr_tab'		=> $data['banr_tab'],
			'banr_img'		=> $data['banr_img'],
			'banr_link_url'	=> $data['banr_link_url'],
			'banr_use_yn'	=> $data['banr_use_yn'],
			'banr_mod_id'	=> $data['banr_mod_id'],
			'banr_mod_dt'	=> $data['banr_mod_dt']
		);
		$edit_where = array(
			'banr_idx'		=> $data['banr_idx']
		);
		$this->db->update('banner', $edit_data, $edit_where);
		return $this->db->trans_status();
    }

	public function getBanners($type, $tab){
		$this->db->select('banr_idx');
		$this->db->select('banr_seq');
		$this->db->select('banr_img');
		$this->db->select('banr_link_url');
		$this->db->select('banr_use_yn');
		$this->db->select('banr_tab');
		$this->db->from('banner');
		$this->db->where('banr_type', $type);
		$this->db->where('banr_tab', $tab);
		$this->db->order_by('banr_seq', 'ASC');
		return $this->db->get()->result();
	}

	public function getBannerDetail($idx){
		$this->db->select('banr_idx');
		$this->db->select('banr_tab');
		$this->db->select('banr_img');
		$this->db->select('banr_link_url');
		$this->db->select('banr_use_yn');
		$this->db->from('banner');
		$this->db->where('banr_idx', $idx);
		return $this->db->get()->row_array();
	}

	public function deleteBanner($idx){
		$this->db->where('banr_idx', $idx);
		$this->db->delete('banner');
		return $this->db->trans_status();
	}

	public function getBannerTabUseCnt($tab){
		$this->db->from('banner');
		$this->db->where('banr_tab', $tab);
		$this->db->where('banr_use_yn', 'Y');
		return $this->db->count_all_results();
	}

	public function updateBannerSeq($data){
		$seq_update = array(
			'banr_seq' => $data['banr_seq']
		);
		$seq_where = array(
			'banr_idx'	=>	$data['banr_idx']
		);
		$this->db->update('banner', $seq_update, $seq_where);
        return $this->db->trans_status();
	}

	public function get_cols($search,$totalCnt=false){
		$sub_str = $search['subject'];

		if($totalCnt) $limit = '';
		else $limit = "limit ".($search['page'] - 1) * $search['pageSize'].", {$search['pageSize']}";
		$whereStr = '';
		if(!empty($s)){
			$whereStr = "AND (
						`col_title` LIKE '%".$s."%' ESCAPE '!'
						OR  `col_cnts` LIKE '%".$s."%' ESCAPE '!'
						)";
		}

		$subSearch = '';
		if(!empty($sub_str)) $subSearch = "AND col_subject = '".$subSearch."'";

		$search_q =	" SELECT `col`.idx as col_idx, col_title,
					  col_thumb, col_subject, col_cnts,
					  (SELECT id FROM lime_adn_user AS u WHERE `u`.idx = `col`.reg_idx) as reg_name,
					  DATE_FORMAT(`col`.reg_date,'%Y-%m-%d') `reg_dt`
					  		FROM `lime_columns` AS col
					  		WHERE 1=1
					  		{$whereStr}
					  		{$subSearch}
					  ORDER BY `reg_dt` DESC {$limit}";
		$result =  $this->db->query($search_q)->result();
		if($totalCnt) return $this->db->query($search_q)->num_rows();
		return $result;
	}

	public function get_col_detail($idx){
		$this->db->select('idx');
		$this->db->select('col_title');
		$this->db->select('col_subject');
		$this->db->select('col_cnts');
		$this->db->select('col_thumb');
		$this->db->select('use_yn');
		$this->db->from('lime_columns');
		$this->db->where('idx', $idx);
		return $this->db->get()->row_array();
	}

	public function addColumn($data){
		$this->db->insert('lime_columns',$data);
        return $this->db->insert_id();
	}

	public function editColumn($data){
		$edit_data = array(
			'col_title'		=> $data['col_title'],
			'col_subject'	=> $data['col_subject'],
			'col_thumb'		=> $data['col_thumb'],
			'col_cnts'		=> $data['col_cnts'],
			'use_yn'		=> $data['use_yn'],
			'mod_idx'		=> $data['mod_idx'],
			'mod_date'		=> $data['mod_date']
		);
		$edit_where = array(
			'idx'		=> $data['idx']
		);
		$this->db->update('lime_columns', $edit_data, $edit_where);
		return $this->db->trans_status();
	}

	public function deleteColumn($idx){
		$this->db->where('idx', $idx);
		$this->db->delete('lime_columns');
		return $this->db->trans_status();
	}

}

?>
