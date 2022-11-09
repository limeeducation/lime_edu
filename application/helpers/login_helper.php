<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	if(!function_exists('is_user_logged_in')) {
		function is_user_logged_in(){
			$CI =& get_instance();
			$user = $CI->session->userdata('user');
			if (!isset($user)) { return false; }
			else { return true; }
		}
	}
?>
