<?php
class CategoryController
{


    public $category;

    public function __construct()
    {
       $this->category=new AdminCategoryModels();
    }
    public function getAllCategory()
    {       
        $listCategory = $this->category->getAllCategory();
        // if ($listProduct) {
            require_once './views/admin/category/listCategory.php';
        // }
    }


    public function insertCategory()
    {
        if (isset($_POST['addCategory'])) {
            $error = [];
            $name = $_POST['cate_name'];
            if (empty($error)) {
                $this->category->insertCategory( $name);
                header("Location: ?act=admin/category&message=success");
            } else {
                header("Location: ?act=admin/category&message=error");
            }
        } else {
            header("Location: ?act=admin/category&message=error.");
        }
    }
   

    // Hàm lấy địa chỉ IP của người dùng
   public function DeleteCategory()
   {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $dataOneCategory= $this ->category->deleteCategory($id);
        header("Location: ?act=admin/category&message=success");
    }
   }



    public function editCategory()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $dataOneCategory = $this->category->getOneCategory($id);
            require_once './views/admin/category/editCategory.php';
            print_r($id);die();
        }
    }
    public function nexteditCategory()
    {
        if (isset($_POST['editCategory'])) {
            $error = [];
            $id = $_GET['id'];
            $name = $_POST['cate_name'];
            $status = $_POST['status'];
            if (empty($error)) {
                $this->category->editCategory($id, $name, $status);
                header("Location: ?act=admin/category&message=success");
            } else {
                header("Location: ?act=admin/category&message=error");
            }
        } else {
            header("Location: ?act=admin/category&message=error.");
        }
    }
}