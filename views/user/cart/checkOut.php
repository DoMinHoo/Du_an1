<?php include './views/user/layout/header.php'; ?>
<div class="content">
    <div class="wrap">
        <div class="container">
            <form action="<?= "index.php?act=check-out" ?>" method="POST">
                <div class="row">
                    <!-- <div class="summary col-lg-6 col-12 hidden">
                        <div class="summary-heading">
                            <div class="summary-heading-title">
                                <h4>Thông tin đơn hàng</h4>
                            </div>
                            <div class="summary-heading-price">
                                <h4>3.000.000 <i class="fas fa-chevron-down"
                                        style="margin-left: 20px;margin-right: 5px;"></i></h4>
                            </div>
                        </div>
                        <div class="summary-content hidden">
                            <div class="sliderbar">
                                <div class="sliderbar-content">
                                    <div class="row row-sliderbar">
                                        <div class="col-6">
                                            <img src="./assets/img/product/stansmith.jpg" alt="" width="80%">
                                            <span class="notice">3</span>
                                        </div>
                                        <div class="col-6">
                                            <h5>ÁO THỦ MÔN ĐTVN 2021 GRAND SPORT - 038-322 - VÀNG CAM</h5>
                                            <span>625,000₫</span>
                                        </div>
                                    </div>
                                    <div class="row row-sliderbar">
                                        <div class="col-6">
                                            <img src="./assets/img/product/stansmith.jpg" alt="" width="80%">
                                            <span class="notice">3</span>
                                        </div>
                                        <div class="col-6">
                                            <h5>ÁO THỦ MÔN ĐTVN 2021 GRAND SPORT - 038-322 - VÀNG CAM</h5>
                                            <span>625,000₫</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-footer">
                                    <div class="subtotal">
                                        <div class="row row-sliderbar-footer">
                                            <div class="col-6"><span>Tạm tính:</span></div>
                                            <div class="col-6 text-right"><span>625,000₫</span></div>
                                        </div>
                                        <div class="row row-sliderbar-footer">
                                            <div class="col-6"><span>Phí vận chuyển</span></div>
                                            <div class="col-6 text-right"><span>625,000₫</span></div>
                                        </div>
                                    </div>
                                    <div class="total">
                                        <div class="row row-sliderbar-footer">
                                            <div class="col-6"><span>Tổng cộng:</span></div>
                                            <div class="col-6 text-right"><span>625,000₫</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-12">
                        <div class="main">
                            <div class="main-header">
                                <a href="">
                                    <h1>P&T SHOP</h1>
                                </a>
                            </div>
                            <div class="main-content">
                                <div class="main-title">
                                    <h2>Thông tin giao hàng</h2>
                                </div>
                                <div class="main-customer-info">

                                    <div class="main-customer-info-logged">
                                        <p class="main-customer-info-logged-paragraph"></p>
                                    </div>
                                </div>
                                <div class="fieldset">
                                    <div class="fieldset-address form-group">
                                        <label for="diachi" class="form-label" for="">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="fieldset-email form-group">
                                        <label for="email" class="form-label" for="">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="fieldset-name form-group">
                                        <label for="hoten" class="form-label" for="">Họ tên</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="fieldset-phone form-group">
                                        <label for="sdt" class="form-label" for="">Số điện thoại</label>
                                        <input type="text" class="form-control" id="tel" name="phone">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="fieldset-payment form-group">
                                        <input type="radio" name="payment"
                                            id="payment" value="1">
                                        <label for="" class="form-check-lable">Thanh Toán Online</label>

                                        <input type="radio" name="payment"
                                            id="payment" value="0" checked>
                                        <label for="" class="form-check-lable">Thanh Toán Khi Nhận Hàng</label>
                                    </div>
                                </div>
                            </div>
                            <div class="main-footer">
                                <div class="continue">
                                    <a>
                                        <i class="fi-rs-angle-left"></i>
                                        Giỏ hàng
                                    </a>
                                </div>
                                <div class="pay">
                                    <button type="submit" name="thanhToan" class="btn-pay form-submit">Thanh toán</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 hidden-sm hidden-xs" style="background-color:#f3f3f3;">
                        <div class="sliderbar">
                            <div class="sliderbar-header">
                                <h2>Thông tin đơn hàng</h2>
                            </div>
                            <div class="sliderbar-content">
                                <div class="row row-sliderbar">
                                    <?php foreach ($carts as $cart) : ?>
                                        <div class="col-4">
                                            <img src="<?= './uploads/' . $cart['img'] ?>" alt="" width="80%">
                                            <span class="notice"><?= $cart['quantity'] ?></span>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $cart['name'] ?></h5>
                                        </div>
                                        <div class="col-2">
                                            <span><?= number_format($cart['price'] * $cart['quantity']) ?>$</span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="slider-footer">
                                <div class="subtotal">
                                    <div class="row row-sliderbar-footer">
                                        <div class="col-6"><span>Tạm tính:</span></div>
                                        <div class="col-6 text-right"><span><?= $sumPrice ?>$</span></div>
                                    </div>
                                </div>
                                <div class="total">
                                    <div class="row row-sliderbar-footer">
                                        <div class="col-6"><span>Tổng cộng:</span></div>
                                        <div class="col-6 text-right"><span><strong><?= $sumPrice ?>$</strong></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include './views/user/layout/footer.php'; ?>