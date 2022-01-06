<?php include('backend/config.php'); 
include('template/header.php')
?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                       <a href="http://localhost/CSE485_K61_KTGK_1951060683" style="color:#fff"><i class="fas fa-arrow-left"></i></a> <h2>Add</h2>
                </div>
            </div>
        <form method="post" action="src/add.php">
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
            
            <input type="submit" class="btn btn-primary" name='save' value="Submit">
        </form>
    </div>
</div>
<?php 
include('template/footer.php')
?>
