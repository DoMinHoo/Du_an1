<?php

class DonHangModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllDonHang()
    {
        $sql = "SELECT * FROM orders";
        return $this->db->getAll($sql);
    }

    public function detailDonHang($id)
    {
        $sql = "SELECT ord.*, acc FROM orders ord
                INNER JOIN account acc ON ord.user_id = acc.id";
        // $sql = "SELECT * FROM orders WHERE id=$id";
        return $this->db->getOne($sql);
    }

    public function getOneDonHang($id)
    {
        $sql = "SELECT * FROM orders WHERE id=$id";
        return $this->db->getOne($sql);
    }

    public function editDonHang($id, $order_date, $status, $payment, $total_money, $created_at, $update_at)
    {
        $sql = "UPDATE `orders` SET `order_date` = '$order_date', `status` = '$status', `payment` = '$payment', `total_money` = '$total_money', `created_at` = '$created_at', `update_at` = '$update_at' WHERE `id` = $id";
        // var_dump($sql);
        // die;
        return $this->db->insert($sql);
    }
}
