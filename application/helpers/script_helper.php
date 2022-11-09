<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	if(!function_exists('script_alert_go')) {
    	/**
    	 * 자바스크립트 블록을 생성하고, 메시지를 출력 후, URL로 이동합니다.
    	 *
    	 * @param $message
    	 * @param $url
    	 */
    	function script_alert_go($message, $url) {
    		exit('
                <script>
                    alert("'.$message.'");
                    location.href="'.$url.'";
                </script>
            ');
    	}
    }

    if(!function_exists('script_alert_back')) {
    	/**
    	 * 자바스크립트 블록을 생성하고, 메시지를 출력 후, history back을 실행합니다.
    	 *
    	 * @param $message
    	 */
    	function script_alert_back($message) {
    		exit('
                <script>
                    alert("'.$message.'");
                    history.back(-1);
                </script>
            ');
    	}
    }
?>
