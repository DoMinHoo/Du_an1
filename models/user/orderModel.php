<?php
class OrderModel
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function all()
    {
        $sql = "SELECT o.*, user, email, address, tel WHERE orders o JOIN users u
        ON o.user_id = u.id ORDER BY o.id DESC";
        return $this->db->getAll($sql);
    }

    public function find($id)
    {
        $sql = "SELECT o.*, user, email, address, tel, od.money, od.quatity, 
        name, img FROM orders o JOIN users u ON o.user_id=u.id JOIN order_detail od ON od.id_orderdetail=o.id
        JOIN products p ON od.id_pro=p.id WHERE o.id = $id";
        return $this->db->insert($sql);
    }

    public function create($user_id, $status, $payment, $total_money)
    {
        $sql = "INSERT INTO orders(user_id, status, payment, total_money)
        VALUES($user_id, $status, $payment, $total_money)";
        return $this->db->insert($sql);

        //  $this->db->lastInsertId($sql);
    }

    public function updateStatus($id, $status)
    {
        $sql = "UPDATE oders SET status = $status WHERE id = $id";
        return $this->db->insert($sql);
    }

    public function createOrderDetail($order_id, $id_pro, $quantity, $money)
    {
        $sql = "INSERT INTO order_detail(order_id, id_pro, quantity ,money)
        VALUES ($order_id, $id_pro, $quantity ,$money)";
        return $this->db->insert($sql);
    }
}
