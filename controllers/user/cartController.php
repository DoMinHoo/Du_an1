<?php
class CartController
{
    public $product;
    public $category;

    public $user;
    // public $cart;

    public function __construct()
    {
        $this->product = new productHomeModel();
        $this->category = new AdminCategoryModels();
        $this->user = new UserModel();

        // $this->cart = new CartController();
    }
    public function addToCart()
    {
        $carts = $_SESSION['cart'] ?? [];

        //lấy sản phẩm theo id để add vào giỏ
        $id = $_GET['id'];
        $product = $this->product->getOneProduct($id);
        // var_dump($product);

        if (isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
        } else {
            $carts[$id] = [
                'name' => $product['name'],
                'img' => $product['img'],
                'price' => $product['price'],
                'quantity' => 1,
            ];
        }
        //Lưu giỏ hàng vào Session
        $_SESSION['cart'] = $carts;
        $url = $_SESSION['URI'];
        var_dump($carts);

        return header("location: " . $url);
    }

    //Tính tổng số lượng sản phẩm
    public function totalSumQuantity()
    {
        $carts =  $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['quantity'];
        }
        return $total;
    }

    // Trang Giỏ Hàng
    public function viewCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $categories = $this->category->getAllCategory();
        $sumPrice = $this->sumPrice();

        $_SESSION['totalQuantity'] = $this->totalSumQuantity();

        require_once './views/user/cart/viewCart.php';
    }

    // Cộng Tổng Số tiền
    public function sumPrice()
    {
        $carts = $_SESSION['cart'] ?? [];
        $total = 0;
        foreach ($carts as $cart) {
            $total = $cart['quantity'] * $cart['price'];
        }
        return $total;
    }

    // Xóa sản phẩm trong giỏ hàng
    public function deleteProductInCart()
    {
        $carts = $_SESSION['cart'] ?? [];

        $sumPrice = $this->sumPrice();
        $id = $_GET['id'];
        unset($_SESSION['cart'][$id]);
        return header("Location: index.php?act=view-cart");
        // require_once './views/user/cart/viewCart.php';

    }

    // public function updateCart()
    // {
    //     $quantities = $_POST['quantity'];
    //     foreach ($quantities as $id => $qty) {
    //         $_SESSION['cart'][$id]['quantity'] = $qty;
    //     }
    //     return header("Location: index.php?act=view-cart");
    //     // var_dump($quantity);
    //     // die;
    // }




    // Hiển thị thông tin thanh toán

    public function viewCheckOut()
    {
        $carts  =  $_SESSION['cart'];
        // echo "<pre>";
        // var_dump($carts);
        // $user = $_SESSION['account'];
        $sumPrice = $this->sumPrice();

        require_once './views/user/cart/checkOut.php';
    }

    // Thanh Toán
    public function checkOut()
    {
        $carts  =  $_SESSION['cart'];

        //Lấy thông tin người dùng
        $sumPrice = $this->sumPrice();
        if (isset($_POST['thanhToan'])) {
            $address = $_POST['address'];
            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $payment = $_POST['payment'];
            $status = 1;
            $total_money = $sumPrice;

            $order_id = (new OrderModel)->create($fullname, $email, $phone, $address, $status, $payment, $total_money);

            foreach ($carts as $id_pro => $cart) {
                (new OrderModel())->createOrderDetail($order_id, $id_pro, $cart['quantity'], $cart['price']);
            }
            echo "Thêm đơn hàng thành công";
        } else {
            echo "Bạn Cần Nhập Đầy Đủ Thông Tin";
        }
    }
}
