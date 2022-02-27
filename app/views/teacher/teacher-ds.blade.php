<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên </th>
            <th>Giới Tính</th>
            <th>Trường</th>
            <th>Major</th>
            <th>Salary</th>
            <th>Birth_day</th>
            <th>Ngày tạo</th>
            <th>Ngày update</th>
            <th>
                <a href="<?= BASE_URL . 'teachers/tao?school_id='.$schools->id?>">Tạo mới</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teachers as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->school_id}}</td>
            <td>{{$item->major}}</td>
            <td>{{$item->salary}}</td>
            <td>{{$item->birth_date}}</td>
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
