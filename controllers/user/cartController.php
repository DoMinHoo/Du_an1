<?php
class CartController
{
    public $product;
    public function __construct()
    {
        $this->product = new productHomeModel();
    }
    public function addToCart()
    {
        $carts = $_SESSION['cart'] ?? [];

        //lấy sản phẩm theo id để add vào giỏ
        $id = $_GET['id'];
        $product = $this->product->find($id);

        if ($carts) {
            if (isset($carts['id'])) {
                $carts[$id]['quantity'] += 1;
            } else {
                $carts['id'] = [
                    'name' => $product['name'],
                    'img' => $product['img'],
                    'price' => $product['price'],
                    'quantity' => 1,
                ];
            }
            //Lưu giỏ hàng vào Session
            $_SESSION['cart'] = $carts;


            $url = $_SESSION['URI'];

            return header("location: . $url");
        }
    }
}
