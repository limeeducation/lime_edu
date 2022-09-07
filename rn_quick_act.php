<?
include_once($_SERVER['DOCUMENT_ROOT']."/config/common.php");

switch($_POST['temp_address'])
{

	case "1":
		$temp_addr="강원";
		break;
	case "2":
		$temp_addr="경기";
		break;
	case "3":
		$temp_addr="경남";
		break;
	case "4":
		$temp_addr="경북";
		break;
	case "5":
		$temp_addr="광주";
		break;
	case "6":
		$temp_addr="대구";
		break;
	case "7":
		$temp_addr="대전";
		break;
	case "8":
		$temp_addr="부산";
		break;
	case "9":
		$temp_addr="서울";
		break;
	case "10":
		$temp_addr="울산";
		break;
	case "11":
		$temp_addr="인천";
		break;
	case "12":
		$temp_addr="전남";
		break;
	case "13":
		$temp_addr="전북";
		break;
	case "14":
		$temp_addr="제주";
		break;
	case "15":
		$temp_addr="충남·세종";
		break;
	case "16":
		$temp_addr="충북";
		break;
	case "17":
		$temp_addr="기타";
		break;

}
$temp_name = $_POST['temp_namef'];
$tel = $_POST['temp_tel_01']."".$_POST['temp_tel_02']."".$_POST['temp_tel_03'];
$temp_startdate=$_POST['temp_startdate'];
$temp_stetc=addslashes($_POST['temp_stetc']);
$reg_date = date("Y-m-d H:i:s");
$title = "[".$temp_name."]님 문의신청";

$cs_sql="insert into ms_board_table3 set tn = 'ms_board_table3', name = '".$_POST['temp_namef']."', userid = 'guest', reg_date = '".$reg_date."', title = '".$title."', contents = '".$temp_stetc."',etc_1 = '".$temp_addr."',etc_2 = '".$temp_startdate."',etc_3 = '".$tel."'";
$db->Query($cs_sql);

$nicesms_content="[".$temp_addr."][".$temp_startdate."][".$temp_name."][".$tel."][".$temp_stetc."]";
$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://push.doday.net/api/push');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'uuid=ab75aa1a3459411c&secret_key=4XTvSaPD10&code=sylph34&body='.$nicesms_content);
		$result = curl_exec($ch);
		curl_close($ch);

echo "ok";


?>