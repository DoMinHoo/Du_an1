<!-- header -->
<?php include './views/user/layout/header.php'; ?>
<!-- end header -->

<div class="cart">
    <div class="container">
        <div class="cart-wrap">
            <div class="cart-content">
                <form action="<?= "index.php?act=update-cart" ?>" class="form-cart">
                    <div class="cart-body-left">
                        <div class="cart-heding hidden-xs">
                            <div class="row cart-row">
                                <div class="col-11" style="text-align: center;">
                                    <div class="row">
                                        <div class="col-5">Sản phẩm</div>
                                        <div class="col-2">Đơn giá</div>
                                        <div class="col-3">Số lượng</div>
                                        <div class="col-2">Thành tiền</div>
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                        <div class="cart-body">
                            <?php foreach ($carts as $id => $cart) : ?>
                                <div class="row cart-body-row cart-body-row-1" style="align-items: center;">
                                    <div class="col-md-11 col-10" style="text-align: center;">
                                        <div class="row card-info" style="align-items: center;">
                                            <div class="col-md-2 col-12 card-info-img">
                                                <a href=""><img class="cart-img" src="<?= './uploads/' . $cart['img'] ?>" alt=""></a>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <a href="" class="cart-name">
                                                    <h5><?= $cart['name'] ?></h5>
                                                </a>
                                            </div>
                                            <div class="col-md-2 col-12" style="font-size: 16px;">
                                                <span><?= number_format($cart['price'])  ?> $</span>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="cart-quantity">
                                                    <input type="text" value="<?= $cart['quantity'] ?>" class="text-input" name="quantity[<?= $id ?>]" id="text_so_luong-1" '>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12 hidden-xs" style="font-size: 16px;">
                                                <span><?= number_format($cart['price'] * $cart['quantity']) ?>$</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-2 text-right">
                                        <a href="<?= "index.php?act=delete-cart&id=" . $id ?>"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        <div class="cart-footer">
                            <div class="row cart-footer-row">
                                <div class="col-11 continue">
                                    <button type="submit">
                                        <i class=""></i>
                                        Cập Nhập Đơn Hàng
                                    </button>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cart-body-right">
                        <div class="cart-total">
                            <label for="">Thành tiền:</label>
                            <span class="total__price"><?= number_format($sumPrice) ?>$</span>
                        </div>
                        <div class="cart-buttons">
                            <a style="display: block; text-align: center;" href="<?= "index.php?act=view-checkout" ?>" class="chekout">THANH TOÁN</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './views/user/layout/footer.php'; ?>