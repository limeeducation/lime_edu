<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<HTML>
<HEAD>
<TITLE>휴대폰인증</TITLE>
</HEAD>

<BODY bgcolor="#FFFFFF">
<form name="form1" action="/test/check_mobile" method="post">
    휴대폰번호 :
		<select name='hp_num1'>
		<option value='010'>010</option>
		<option value='011'>011</option>
		<option value='016'>016</option>
		<option value='017'>017</option>
		<option value='018'>018</option>
		<option value='019'>019</option>
		</select>
		 -
		<input type='text' name='hp_num2' size='4' maxlength='4' > -
		<input type='text' name='hp_num3'  size='4' maxlength='4' >

		<br>

	<input type="submit" value="확  인" >
</form>
</BODY>
</HTML>
