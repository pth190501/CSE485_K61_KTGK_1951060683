<?php
include 'database.php';

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
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


if(count($_POST)>0){
	if($_POST['type']==1){
		$tenmh=$_POST['ten_mh'];
		$stc=$_POST['sotinchi'];
		$stlt=$_POST['sotiet_lt'];
		$stbt=$_POST['sotiet_bt'];
		$stth=$_POST['sotiet_thtn'];
		$sogio=$_POST['sogio_tuhoc'];

		$sql = "INSERT INTO monhoc(ten_mh,sotinchi,sotiet_lt,sotiet_bt,sotiet_thtn,sogio_tuhoc) VALUES ('$tenmh','$stc','$stlt','$stbt','$stth','$sogio')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['mamh'];
		$tenmh=$_POST['ten_mh'];
		$stc=$_POST['sotinchi'];
		$stlt=$_POST['sotiet_lt'];
		$stbt=$_POST['sotiet_bt'];
		$stth=$_POST['sotiet_thtn'];
		$sogio=$_POST['sogio_tuhoc'];
		$sql = "UPDATE 'crud' SET 'ten_mh'='$ten_mh','sotinchi'='$stc','sotiet_lt'='$stlt','sotiet_bt'='$stbt','sotiet_thtn'='$stth', 'sogio_tuhoc'='$sogio' WHERE mamh=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>