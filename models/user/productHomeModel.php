<?php
class productHomeModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllProduct()
    {
        $sql = "SELECT p.*, cate_name  FROM product p JOIN categories c ON p.id_categories = c.id";
        return $this->db->getAll($sql);
    }

    public function getOneProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id=$id";
        return $this->db->getOne($sql);
    }

    public function getProductsInCategory($id)
    {
        $sql = "SELECT p.*, cate_name  FROM product p JOIN categories c ON p.id_categories = c.id 
        WHERE c.id=$id ";
        return $this->db->getAll($sql);
    }

    public function getProductInCategory($id)
    {
        $sql = "SELECT p.*, cate_name  FROM product p JOIN categories c ON p.id_categories = c.id 
        WHERE c.id=$id LIMIT 4";
        return $this->db->getAll($sql);
    }

    public function getProductInCategoryLimit3($id)
    {
        $sql = "SELECT p.*, cate_name  FROM product p JOIN categories c ON p.id_categories = c.id 
        WHERE c.id=$id LIMIT 3";
        return $this->db->getAll($sql);
    }

    public function listShowProduct($id_categories)
    {
        $sql = "SELECT p.*, c.name 'cate_name' FROM product p
                INNER JOIN categories c ON product.id_categories = categories.name 
                WHERE product.id_categories = $id_categories LIMIT 4;";
        return $this->db->getOne($sql);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM categories WHERE id = $id";
        return $this->db->getOne($sql);
    }

    public function detailProduct($id_categories)
    {
        $sql = "SELECT p.*, c.name 'cate_name' FROM product p
                INNER JOIN categories c ON product.id_categories = categories.name;
                WHERE product.id_categories = $id_categories;";
        return $this->db->getOne($sql);
    }
}
