<?php

class HomeUserController
{

    public $product;
    public $category;

    public function __construct()
    {
        $this->product = new productHomeModel();
        $this->category = new AdminCategoryModels();
    }
    public function homeUser()
    {
        $listTshirts = $this->product->getProductInCategory(3);
        $listPolo = $this->product->getProductInCategory(4);
        $listHoodies = $this->product->getProductInCategory(5);
        $listJackets = $this->product->getProductInCategory(1);
        $listShoes = $this->product->getProductInCategoryLimit3(6);

        $categories = $this->category->getAllCategory();
        // if ($listProduct) {
        require_once './views/user/home/home.php';


        // $products = new HomeModel();
        // $tshirts = $products->listShowProduct(3);


        // return view('home/home.php', compact('tshirts'));
        // require_once './views/user/home/home.php';
    }

    public function homeProduct()
    {

        $id = $_GET['id'];
        $products = $this->product->getProductsInCategory($id);

        $category_name = $this->product->getOneProduct($id)['cate_name'];

        $title = $category_name;
        $categories = $this->category->getAllCategory();



        require_once './views/user/product/product.php';

        // require_once './views/user/product/product.php';
    }

    public function productDetail()
    {
        $id = $_GET['id'];

        $product = $this->product->getOneProduct($id);
        // var_dump($product);
        $title = $product['name'] ?? '';
        $categories = $this->category->getAllCategory();

        //lưu thông tin uri
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];
        require_once './views/user/detail/detail.php';
    }

    public function homeIntro()
    {
        require_once './views/user/intro/intro.php';
    }

    public function homeNew()
    {
        require_once './views/user/news/news.php';
    }
    public function homeLogin()
    {
        require_once './views/user/loginAndRegister/login.php';
    }
}
