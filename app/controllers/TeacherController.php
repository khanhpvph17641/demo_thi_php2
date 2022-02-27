<?php
namespace App\Controllers;
use App\Models\Teacher;
use App\Models\School;
class TeacherController{
    public function index()
    {
        $id = $_GET['school_id'];
        $schools = School::where('id', $id)->first();
        $teachers  =    Teacher::where('school_id', $id)->get();
        return view('teacher.teacher-ds',['teachers'=>$teachers,'schools'=>$schools]);
    }
    public function taoForm()
    {
        $school_id = $_GET['school_id'];
        include_once './app/views/teacher/add-form.php';
    }
    public function luuTao()
    {
        $school_id = $_GET['school_id'];
        $data =[
            'name' =>$_POST['name'],
            'gender' => isset($_POST['gender']) ? 0 : 1,
            'subject_id' => $school_id,
            'avatar' =>$_FILES['avatar']['name'],
            'major' =>$_POST['major'],
            'salary' =>$_POST['salary'],
            'birth_date' =>$_POST['birth_date'],
            'created_at' =>$_POST['created_at'],
            'updated_at' =>$_POST['updated_at'],

        ];
        $file = $_FILES['avatar'];
        $fileName = $file['name'];
        move_uploaded_file($file['tmp_name'],'../views/src/'.$fileName);
        $model->insert($data);
        header('location:'.BASE_URL. 'teachers?school_id='. $school_id);
        die;
    }
}

?>