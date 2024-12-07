<?php
class UserModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all()
    {
        $sql = "SELECT * FROM account";
        $this->db->getAll($sql);
    }


    public function find($id)
    {
        $sql = "SELECT * FROM account WHERE id=$id";
        $this->db->getOne($sql);
    }

    public function findUserOfEmail($email)
    {
        $sql = "SELECT * FROM account WHERE email='$email'";

        return $this->db->getOne($sql);
    }

    public function create($user, $password, $email, $address, $tel)
    {
        $sql = "INSERT INTO user(user, password, email, address, tel) VALUES 
        ('$user', '$password', '$email', '$address', '$tel')";
        $this->db->insert($sql);
    }

    public function update($id, $user, $address, $tel, $role, $active)
    {
        $sql = "UPDATE `account` SET `user`='$user',`address`='$address',`tel`='$tel',
        ,`role`='$role',`active`='$active' WHERE id=$id ";
        return $this->db->insert($sql);
    }
}
