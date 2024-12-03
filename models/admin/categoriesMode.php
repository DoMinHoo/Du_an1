<?php
class AdminCategoryModels
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        return $this->db->getAll($sql);
    }

    public function getOneCategory($id)
    {
        $sql = "SELECT * FROM categories WHERE id=$id";
        return $this->db->getOne($sql);
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id=$id";
        return $this->db->getOne($sql);
    }


    public function insertCategory($cate_name)
    {
        $sql = "INSERT INTO `categories`(`cate_name`) 
        VALUES ('$cate_name')";
        return $this->db->insert($sql);
    }

    public function editCategory($id, $cate_name, $status)
    {
        $sql = "UPDATE `categories` SET `cate_name`='$cate_name',`status`='$status' WHERE id=$id ";
        return $this->db->insert($sql);
    }
}//model​07:54/-strong/-heart:>:o:-((:-h Nguyễn Trung Đức đang soạn tin trên máy tínhXem trước khi gửiThả Files vào đây để xem lại trước khi gửi