<?php
include ('../backend/config.php');
include('../template/header.php');

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE monhoc set ten_mh='" . $_POST['name'] . "', sotinchi='" . $_POST['stc'] . "', sotiet_lt='" . $_POST['sttl='] . "' ,sotiet_bt='" . $_POST['stbt'] . "',sotiet_thtn='" . $_POST['stth'] . "',sogio_tuhoc='" . $_POST['sg'] . "' WHERE mamh='" . $_GET['mamh'] . "'");
Header('location: http://localhost/CSE485_K61_KTGK_1951060683/');
}else {
}

?>
<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951060683" style="color:#fff"><i class="fas fa-arrow-left"></i> Back</a> <h2>Update</h2>
                </div>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<?php $result = mysqli_query($conn,"SELECT * FROM monhoc WHERE mamh='" . $_GET['mamh'] . "'");
while($row = mysqli_fetch_array($result)) {

?>
            
            <label for="rName" class="form-label">Tên môn học</label>
            <input type="text" class="form-control" id="name" name='name'>
            </div>
            <div class="mb-3">
            <label for="stc" class="form-label">Số tín chỉ</label>
            <input type="number" class="form-control" id="stc" name="stc">
            </div>
            <div class="mb-3">
            <label for="stlt" class="form-label">Số tiết lí thuyết</label>
            <input type="text" class="form-control" id="stlt" name='stlt'>
            </div>
            <div class="mb-3">
            <label for="stbt" class="form-label">Số tiết bài tập</label>
            <input type="text" class="form-control" id="stbt" name="stbt" >
            </div>
            <div class="mb-3">
            <label for="stth" class="form-label">Số tiết thực hành, thí nghiệm</label>
            <input type="text" class="form-control" id="stth" name="stth" >
            </div>
            <div class="mb-3">
            <label for="sg" class="form-label">Số giờ tự học</label>
            <input type="text" class="form-control" id="sg" name="sg" >
            
            </div>
            <?php
				};
				?>
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>	
    </div>
<?php 
include('../template/header.php')

?>