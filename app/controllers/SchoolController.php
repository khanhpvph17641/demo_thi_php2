<?php
namespace App\Controllers;
use App\Models\School;
class SchoolController{
    public function index()
    {
            $school = School::all();
            return view('school.school-ds',['school'=>$school]);
            
    }
    public function taoForm()
    {
            include_once "./app/views/school/add-form.php";
            
    }
    public function luuTao()
    {
            $model = new School();
            $data = [
                'name' =>$_POST['name'],
                'address' => $_POST['address'],
                'logo' => $_FILES['logo']['name']
            ];
            $file = $_FILES['logo'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'],'../views/src/'.$fileName);
            $model->insert($data);
            header('location:'.BASE_URL. 'schools');
            die;
    }
    public function suaForm($id =null)
    {
            $id = $_GET['id'];
            $model = School::where('id', $id)->first();
            if(!$model){
            header('location: ' . BASE_URL . 'schools');
            die;
        }
        include_once './app/views/school/edit-form.php';
            
    }
    public function luuSua($id = null)
    {
        $id = $_GET['id'];
        $model = School::where('id', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'schools');
            die;
        }
        
        $model->name=$_POST['name'];
        $model->content=$_POST['content'];
        move_uploaded_file($file['tmp_name'], './Front-end/Images/' .$fileName);
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
}

?>