<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<div class="form-group">
    <form action="<?= BASE_URL . 'schools/luu-sua?id=' .$model->id?>" enctype="multipart/form-data" method="post">
  <label for="">Tên Trường</label>
  <input type="text" name="name" id="name" value="<?= $model->name ?>" class="form-control">
  <label for="">Địa Chỉ</label>
  <input type="text" name="address" value="<?= $model->address ?>" id="" class="form-control">
  <br>
 <div>
 <button type="submit" class="btn btn-danger"> Lưu </button>
 </div>
</form>
</div>