<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên Trường</th>
            <th>Địa Chỉ</th>
            <th>Ngày Tạo</th>
            <th>Ngày Update</th>
            <th>
                <a href="<?= BASE_URL . 'schools/tao'?>">Tạo mới</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($school as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>
                <a href="{{ BASE_URL . 'teachers?school_id=' . $item->id }}"><?= $item->name ?></a>
            </td>
            
            <td>{{$item->address}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>
                <a class="btn btn-sm btn-primary"
                 href="{{ BASE_URL . 'schools/sua?id=' . $item->id }}">Sửa</a>
                <a class="btn btn-sm btn-danger btn-remove" 
                href="{{ BASE_URL . 'schools/xoa?id=' . $item->id }}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
