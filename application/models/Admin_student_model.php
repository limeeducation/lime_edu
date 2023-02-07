<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_student_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Codeigniter : Write Less Do More
	}

	public function gatStudentList($isCnt = null){
		$q_get_simple_students = "SELECT con_idx, con_name, con_natio, con_study, con_start_dt, con_date, con_office, con_reg_dt
								  FROM apply_students
								  ORDER BY con_reg_dt DESC";

		if($isCnt){
			$q_get_simple_students = "SELECT count(*) as cnt FROM apply_students";
		}
		$result =  $this->db->query($q_get_simple_students)->result();
		return $result;
	}

	public function getStudentDetail($idx){
		$this->db->select('con_idx');
		$this->db->select('con_office');
		$this->db->select('con_date');
		$this->db->select('con_time');
		$this->db->select('con_name');
		$this->db->select('con_contact');
		$this->db->select('con_type');
		$this->db->select('con_natio');
		$this->db->select('con_study');
		$this->db->select('con_start_dt');
		$this->db->select('con_details');
		$this->db->select('con_reg_dt');
		$this->db->select('con_contact_yn');
		$this->db->select('con_manager');
		$this->db->select('con_regist_yn');
		$this->db->from('apply_students');
		$this->db->where('con_idx', $idx);
		return $this->db->get()->row_array();
	}

	public function addStudent($data){
		$this->db->insert('apply_students',$data);
        return $this->db->insert_id();
	}

	public function editStudent($data){
    	$edit_data = array(
    		'con_name' 			=> $data['con_name'],
            'con_contact' 		=> $data['con_contact'],
            'con_date' 			=> $data['con_date'],
            'con_time' 			=> $data['con_time'],
            'con_time' 			=> $data['con_time'],
            'con_type' 			=> $data['con_type'],
            'con_office' 		=> $data['con_office'],
            'con_study' 		=> $data['con_study'],
            'con_natio' 		=> $data['con_natio'],
            'con_start_dt' 		=> $data['con_start_dt'],
            'con_details' 		=> $data['con_details'],
            'con_manager' 		=> $data['con_manager'],
            'con_contact_yn' 	=> $data['con_contact_yn'],
            'con_regist_yn' 	=> $data['con_regist_yn'],
    		'con_mod_dt'		=> $data['con_mod_dt']
    	);
    	$edit_where = array(
    		'con_idx'		=> $data['con_idx']
    	);
    	$this->db->update('apply_students', $edit_data, $edit_where);
    	return $this->db->trans_status();
    }
}

?>
