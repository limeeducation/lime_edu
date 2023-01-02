<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	if(!function_exists('get_contents_web')) {
    	/**
    	*	특정 URL에서 내용 가져오기
    	*/
    	function get_contents_web($url) {
    		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_URL, $url);
    		// 헤더는 제외하고 content 만 받음
            curl_setopt($ch, CURLOPT_HEADER, 0);
            // 응답 값을 브라우저에 표시하지 말고 값을 리턴
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$content = curl_exec($ch);
			curl_close($ch);
			return $content;
    	}
    }
?>
