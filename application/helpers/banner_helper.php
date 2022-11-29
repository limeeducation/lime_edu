<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	if(!function_exists('get_baanner')) {
		function get_baanner($tab, $type){
			$CI =& get_instance();
			$CI->load->model('banner_model');
			return $CI->banner_model->getBanner($tab, $type);
		}
	}
?>
