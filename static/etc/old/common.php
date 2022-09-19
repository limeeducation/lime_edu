<?
/**
 * USU Boarding College Common Include PHP5
 *
 * @author		by Son
 * @version		0.1.2
 * @last update 2015.10.29
 */

/*
	W3C P3P 규약설정(보안설정이나 프레임이 달라도 쿠키가 통하도록 설정)
*/
@header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

############################################################################################
/*
	홈페이지 기본설정
*/
############################################################################################

error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);

session_cache_limiter('no-cache, must-revalidate');             // 만료된 페이지 정리
//ini_set("session.gc_maxlifetime", 10800);                         // 세션 만료시간을 세시간으로 설정 

@header("content-type: text/html; charset=UTF-8");         // 페이지 언어셋 설정

############################################################################################
/*
	기본 상수 설정
*/
############################################################################################
// 기본설정
define("ROOT_URL", "http://{$_SERVER['HTTP_HOST']}");
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']);
define("URL_TITLE", "명성유학원");
define("CHARSET", "UTF-8");
define("PHP_SELF", $_SERVER['PHP_SELF']);
// 인트라넷 경로
define("INTRANET_PATH", realpath("../../u"));
// 날짜관련
define("NOW_TIME", date("Y-m-d H:i:s", time()));
define("NOW_DATE", date("Y-m-d", time()));
define("THIS_YEAR", date("Y"));
define("THIS_MONTH", date("m"));
define("NEW_THING", 3);
//페이징 관련 변수
$rs = NULL;         //게시물 결과값
$totalItem = 0;     // 전체게시물 수
$bno = 0;           // 게시물 시작번호
$PerItem = 20;      // 게시판 목록수
$PerPage = 10;      // 페이지 블럭수

// Global Variable
$db = NULL;
//$db2 = new MySQL(true,"global_hy","localhost","global","global6333","euckr");
// 공통파일
define("COMMON_FOOTER", DOCUMENT_ROOT."/_common/_foot.php");
define("COMMON_CSS", DOCUMENT_ROOT."/_common/_css.php");
define("COMMON_JS", DOCUMENT_ROOT."/_common/_js.php");

############################################################################################
/*
	경로 상수 설정
*/
############################################################################################
// 에디터 이미지 저장 경로
define("EDITOR_UPLOAD_PATH", DOCUMENT_ROOT."/se2/upload");
// 동영상 대표이미지 저장 경로 ( 실제경로 및 URL 경로 )
define("VIDEOIMAGE_URL", ROOT_URL."/data/bbs");
define("VIDEOIMAGE_DIR", DOCUMENT_ROOT."/data/bbs");
define("BOARD_ROOT", DOCUMENT_ROOT."/skin");

############################################################################################
/*
	배열 변수 (관련 정보__코드) 정보
*/
############################################################################################
$ARR_GALLERY = "ARR_GALLERY";           // 갤러리 분류코드
$ARR_PHONE1 = "ARR_PHONE1";             // 핸드폰 처음 3자리 정보
$ARR_CPATH = "ARR_CPATH";                   //  가입경로
$ARR_COURSE = "ARR_COURSE";                 //  학부모 페이지 __내용분류 (메뉴)
$ARR_ATTENDANCE = "ARR_ATTENDANCE";     // 학부모 페이지 __ 출석확인 코드
$ARR_TIMETABLE = "ARR_TIMETABLE";                                // 학부모 페이지 __ 수업확인 코드
$ARR_NOTICEMENU = "ARR_NOTICEMENU";             // 공지사항 카테고리

############################################################################################
/*
	라이브러리 include
*/
$MACU_FQUOTA = 7;
$MACU_FCNT = 7;
############################################################################################
require DOCUMENT_ROOT."/_lib/db.class.php";
require DOCUMENT_ROOT."/_lib/db.function.php";
include DOCUMENT_ROOT."/_lib/function.php";
include DOCUMENT_ROOT."/_lib/utill.php";
include DOCUMENT_ROOT."/_lib/paging.php";
$DATA_DIR				= $_SERVER['DOCUMENT_ROOT']."/data/board/";					// 서포터즈 회원 갤러리 경로
$DATA_URL				="https://msuhak.com/data/board";
// INJECTION 방지
//protectFrom_INJECTION();
if(isset($_SERVER["HTTPS"]))
{
	header("Location: http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
	exit;
}
session_start();
?>