<?php
class UserAccountController
{

    public $user;

    public function __construct()
    {
        $this->user = new UserModel();
    }
    //Đăng Ký
    public function register()
    {
        if (isset($_POST['addUser'])) {
            $error = [];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $tel = $_POST['tel'];
            if (empty($error)) {
                $this->user->create(
                    $user,
                    $email,
                    $password,
                    $address,
                    $tel,
                );
                header("Location: ?act=register");
            }
        } else {
            var_dump($_POST['addUser']);
            require_once './views/user/loginAndRegister/register.php';
        }
    }





    //Đăng Nhập
    public function login() {}
}
