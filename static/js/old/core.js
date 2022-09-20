// JavaScript Document
$(function(){
	$(".openSide").click(function(){
		$(".side").animate({left:"0px"},500);
		return false;
	})
$(".closeSide").click(function(){
	$(".side").animate({left:"-240px"},500);
		return false;
	})
});

/**/
function isElementUnderBottom(elem, triggerDiff) {
  const { top } = elem.getBoundingClientRect();
  const { innerHeight } = window;
  return top > innerHeight + (triggerDiff || 0);
}

function handleScroll() {
  const elems = document.querySelectorAll('.up-on-scroll');
  elems.forEach(elem => {
    if (isElementUnderBottom(elem, -20)) {
      elem.style.opacity = "0";
      elem.style.transform = 'translateY(70px)';
    } else {
      elem.style.opacity = "1";
      elem.style.transform = 'translateY(0px)';
    }
  })
}
window.addEventListener('scroll', handleScroll);
/**/


$(".side .mn_c .cate").click(function(){
	console.log("clickMenu");
	var tg = $(this).nextElementSibling;
	var dis = tg.css("display");
	console.log("tg_display : "+dis);
	if(dis=="none"){
		$(".mn_c .cate").removeClass("active");
		$(".mn_c .sub").slideUp(500);
		$(this).addClass("active");
		tg.slideDown(500);
	} else {
		$(".mn_c .cate").removeClass("active");
		$(".mn_c .sub").slideUp(500);
	}
	return false;
});

$(window).resize(function(){ 
	if (window.innerWidth > 1080) { // �ٹ��̽� ũ�Ⱑ 1080�̻��϶� 

		$(".cate2").off("click");
		return false; /*PC������ a��ũ Ŭ���ǵ��� ��ũ��Ʈ �����ؾ���...*/
	

	} else { 

	$(".side .side_dmn .cate2").click(function(){
		var tg = $(this).siblings(".sub_sub");
		var dis = tg.css("display");
		if(dis=="none"){
			$(".side_dmn .cate2").removeClass("active");
			$(".side_dmn .sub_sub").slideUp(500);
			$(this).addClass("active");
			tg.slideDown(500);
		} else {
			$(".side_dmn .cate2").removeClass("active");
			$(".side_dmn .sub_sub").slideUp(500);
		}
		return false; 
	});


	} 
	}).resize();
/**/
