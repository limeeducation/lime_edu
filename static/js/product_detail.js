$(document).ready(function(){
	$('.cs_form').length && csTab(); //지사선택탭
	$('.cs_form').length && csBtnPolicy(); //상담신청 보기 닫기 버튼
	$('.cs_form').length && csTabPolicy(); //개인정보 tab
	mapRes();
});

function csTab() { //지사선택탭
	$('.cs_form .tap_wrap > a').on('click', function(){
		if(!$(this).hasClass('off')){
			$(this).addClass('on').siblings().removeClass('on');
		}
	});
}

function csBtnPolicy() { //상담신청 보기 닫기 버튼
	$('.cs_form .btn_policy').on('click', function(){
		if($(this).hasClass('on')){
			$(this).text('[보기]');
			$('.cs_form .policy_cotn').stop().slideUp(600);
			$(this).removeClass('on');
		}else{
			$(this).text('[닫기]');
			$('.cs_form .policy_cotn').stop().slideDown(600);
			$(this).addClass('on');
		}
	});
}

function csTabPolicy() { //개인정보 tab
	$('.cs_form .policy_tab > a').on('click', function(){
		var tabCnt = $(this).index();
		$(this).addClass('on').siblings().removeClass('on');
		$('.cs_form .txt_list > div').hide().eq(tabCnt).stop().show();
	});
}

function mapRes(){
	if($('img[usemap]').length){
		$('img[usemap]').rwdImageMaps();
	}
}

