<?php 

// Require file Common
require_once './commons/env.php';
require_once './commons/database.php';
//user
//controller
require_once './controllers/user/userController.php';
//models
require_once './models/user/productHomeModel.php';



//Admin
//controller
require_once './controllers/admin/AdminDonHangController.php';
require_once './controllers/admin/userController.php';
require_once './controllers/admin/productController.php';
require_once './controllers/admin/commentController.php';
require_once './controllers/admin/categoriesController.php';

//models
require_once './models/admin/userModels.php';
require_once './models/admin/donHangModel.php';
require_once './models/admin/productModel.php';
require_once './models/admin/commentMode.php';
require_once './models/admin/categoriesMode.php';




$User = new HomeUserController();
$Admin = new HomeAdminController;
$AdminDonHang = new AdminDonHangController();
$AdminProduct = new ProductController();
$AdminComment = new CommentController();
$AdminCategory = new CategoryController();




// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

$act = $_GET['act'] ?? '/';

$response = match ($act) {
    // Người dùng
    '/' => $User->homeUser(),
    'trangchu' => $User->homeUser(),
    'intro' => $User->homeIntro(),
    'news' => $User->homeNew(),
    'login' => $User->homeLogin(),
    // Quản trị viên
    'admin/user' => $Admin->UserAdmin(),


    // quản lý đơn hàng
    // 'admin/donHang' => $AdminDonHang->getAllDonHang(),
    // 'admin/donHang/detail' => $AdminDonHang->detailDonHang(),
    // 'admin/donHang/edit' => $AdminDonHang->editDonHang(),
    // 'admin/donHang/editDonHang' => $AdminDonHang->postDonHang(),
    'admin/donHang' => $AdminDonHang->getAllDonHang(),
    'admin/DonHang/edit' => $AdminDonHang->editDonHang(),
    'admin/DonHang/editDonHang' => $AdminDonHang->postDonHang(),

    
    // quản lý người dùng
    'admin/user/add' =>$Admin->insertUser(),
    'admin/user/edit' => $Admin->editUser(),
    'admin/user/nextedit' => $Admin->nextedit(),
    'admin/user/delete' => $Admin->DeletetUser(),

    // quản lý sản phẩm
    'admin/product' =>$AdminProduct->getAllProduct(),
    'admin/product/edit' =>$AdminProduct->editProduct(),
    'admin/product/nextedit' =>$AdminProduct->nexteditProduct(),
    'admin/product/delete' =>$AdminProduct->DeleteProduct(),
    'admin/product/add' =>$AdminProduct->insertProduct(),


    // quản lý bình luận
    'admin/comment' => $AdminComment->getAllComment(),  

    // quản lý danh mục
    'admin/category' =>$AdminCategory->getAllCategory(),
    'admin/category/edit' =>$AdminCategory->editCategory(),
    'admin/category/nextedit' =>$AdminCategory->nexteditCategory(),
    'admin/category/delete' =>$AdminCategory->DeleteCategory(),
    'admin/category/add' =>$AdminCategory->insertCategory()
};




