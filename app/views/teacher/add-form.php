<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<div class="form-group">
    <form action="<?= BASE_URL .'teachers/luu-tao?school_id=' . $school_id ?>" enctype="multipart/form-data" method="post">
  <label for="">Tên </label>
  <input type="text" name="name" id="name" class="form-control">
  <label for="">Địa Chỉ</label>
  <input type="text" name="address" id="" class="form-control">
  <label for="">Ảnh</label>
  <input type="file" name="logo" id="" class="form-control">
  <br>
 <div>
 <button type="submit" class="btn btn-danger"> Lưu </button>
 </div>
</form>
</div>