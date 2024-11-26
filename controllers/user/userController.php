<?php 

class HomeUserController{
    
    public $product;

    public function __construct()
    {
       $this->product=new productHomeModel();
    }
    public function homeUser(){
        $listTshirts = $this->product->getProductInCategory(3);
        $listPolo = $this->product->getProductInCategory(4);
        $listHoodies = $this->product->getProductInCategory(5);
        $listJackets = $this->product->getProductInCategory(1);
        // if ($listProduct) {
            require_once './views/user/home/home.php';
        // $products = new HomeModel();
        // $tshirts = $products->listShowProduct(3);
        

    // return view('home/home.php', compact('tshirts'));
    require_once './views/user/home/home.php';
    }
        
    public function homeIntro(){
        require_once './views/user/intro/intro.php';
    }

    public function homeNew(){
        require_once './views/user/news/news.php';
    }
    public function homeLogin(){
        require_once './views/user/login/login.php';
    }
}