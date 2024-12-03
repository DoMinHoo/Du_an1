<?php
class AdminProductModels
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllProduct()
    {
        $sql = "SELECT p.*, cate_name FROM product p INNER JOIN categories c ON p.id_categories = c.id";
        return $this->db->getAll($sql);
    }

    public function getOneProduct($id)
    {
        $sql = "SELECT * FROM product WHERE id=$id";
        return $this->db->getOne($sql);
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM product WHERE id=$id";
        return $this->db->getOne($sql);
    }


    public function insertProduct($name, $price, $img, $description, $id_categories, $quantity)
    {
        $sql = "INSERT INTO `product`(`name`, `price`, `img`, `description`, `id_categories`, `quantity`) 
        VALUES ('$name','$price','$img','$description','$id_categories', '$quantity')";
        return $this->db->insert($sql);
    }

    public function editProduct($id, $name, $price, $img, $description, $id_categories, $status, $quantity)
    {
        $sql = "UPDATE `product` SET `name`='$name',`price`='$price',
        `img`='$img',`description`='$description',`id_categories`='$id_categories',
        `status`='$status', `quantity`='$quantity' WHERE id=$id;";
        return $this->db->insert($sql);
    }
    public function detailProduct($id_categories)
    {
        $sql = "SELECT p.*, c.name 'cate_name' FROM product p
                INNER JOIN categories c ON product.id_categories = categories.name;
                WHERE product.id_categories = $id_categories;";
        return $this->db->getOne($sql);
    }
}
