<?php
include ('../backend/config.php');
if(isset($_POST['save']))
{	 
	$tenmh=$_POST['name'];
	$stc=$_POST['stc'];
	$stlt=$_POST['stlt'];
	$stbt=$_POST['stbt'];
	$stth=$_POST['stth'];
	$sogio=$_POST['sg'];

	$sql = "INSERT INTO monhoc(ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$tenmh','$stc','$stlt','$stbt','$stth','$sogio')";
	 if (mysqli_query($conn, $sql)) {
		Header('location: http://localhost/CSE485_K61_KTGK_1951060683/');
	 } else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060683/error.php');

	 }
	 mysqli_close($conn);
}
?>