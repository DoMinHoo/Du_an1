<!-- header -->
<?php include './views/user/layout/header.php'; ?>
<!-- end header -->
<div class="container">
    <!-- slide show -->
    <!-- product detail -->
    <div class="container">
        <div class="product__detail">
            <div class="row product__detail-row">
                <div class="col-lg-6 col-12 daonguoc">
                    <div class="img-product">
                        <ul class="all-img">
                            <!-- <li class="img-item">
                                <img src="./assets/img/product/ult1.jpg" class="small-img" alt="anh 1" onclick="changeImg('one')" id="one">
                            </li>
                            <li class="img-item">
                                <img src="./assets/img/product/addidas1.jpg" class="small-img" alt="anh 2" onclick="changeImg('two')" id="two">
                            </li>
                            <li class="img-item">
                                <img src="./assets/img/product/giayxanh.jpg" class="small-img" alt="anh 3" onclick="changeImg('three')" id="three">
                            </li>
                            <li class="img-item">
                                <img src="./assets/img/product/giayxah2.jpg" class="small-img" alt="anh 4" onclick="changeImg('four')" id="four">
                            </li> -->

                        </ul>
                    </div>
                    <div id="main-img" style="cursor: pointer;">
                        <img src="<?= './uploads/' .  $product['img'] ?>" class="big-img" alt="<?= $product['name'] ?>" id="img-main">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="product__name">
                        <h2><?= $product['name'] ?> </h2>
                    </div>
                    <div class="status-product">
                        Trạng thái:
                        <?php if ($product['quantity'] > 0) : ?>
                            <b>Còn Hàng</b>
                        <?php else : ?>
                            <b>Hết Hàng</b>
                        <?php endif ?>
                    </div>
                    <div class="infor-oder">
                        Số lượng sản phẩm: <b><?= $product['quantity'] ?></b>
                    </div>

                    <div class="product__price">
                        <h2><?= number_format($product['price']) ?>$</h2>
                    </div>
                    <!-- <div class="product__color">
                <div class="select-swap">
                  <div class="circlecheck">
                    <input type="radio" id="f-option" class="circle-1" name="selector" checked>
                    <label for="f-option">Radio Mint Color</label>
                    
                    <div class="outer-circle"></div>
                  </div>
                  <div class="circlecheck">
                    <input type="radio" id="g-option" class="circle-2" name="selector">
                    <label for="g-option">Radio Orange Color</label>
                    
                    <div class="outer-circle"></div>
                  </div>
                  <div class="circlecheck">
                    <input type="radio" id="h-option" class="circle-3" name="selector">
                    <label for="h-option">Radio Purple Color</label>
                    
                    <div class="outer-circle"></div>
                  </div>
                  
                </div>
              </div> -->
                    <!-- <div class="product__color d-flex" style="align-items: center;">
                        <div class="title" style="font-size: 16px; margin-right: 10px;">
                            Màu:
                        </div>
                        <div class="select-swap d-flex">

                            <div class="circlecheck">
                                <input type="radio" id="f-option" class="circle-1" name="selector" checked>
                                <label for="f-option"></label>
                                <div class="outer-circle"></div>
                            </div>
                            <div class="circlecheck">
                                <input type="radio" id="g-option" class="circle-2" name="selector">
                                <label for="g-option"></label>
                                <div class="outer-circle"></div>
                            </div>
                            <div class="circlecheck">
                                <input type="radio" id="h-option" class="circle-3" name="selector">
                                <label for="h-option"></label>
                                <div class="outer-circle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product__size d-flex" style="align-items: center;">
                        <div class="title" style="font-size: 16px; margin-right: 10px;"> -->
                    <!-- Kích thước:
                        </div>
                        <div class="select-swap">
                            <div class="swatch-element" data-value="38">
                                <input type="radio" class="variant-1" id="swatch-1-38" name="mau" value="trung" onclick="check()">
                                <label for="swatch-1-38" class="sd"><span>38</span></label>
                            </div>
                            <div class="swatch-element" data-value="39">
                                <input type="radio" class="variant-1" id="swatch-1-39" name="mau" value="thanh" onclick="check()">
                                <label for="swatch-1-39" class="sd"><span>39</span></label>
                            </div>
                            <div class="swatch-element" data-value="40">
                                <input type="radio" class="variant-1" id="swatch-1-40" name="mau" value="hieu" onclick="check()">
                                <label for="swatch-1-40" class="sd"><span>40</span></label>
                            </div>
                        </div>
                    </div> -->
                    <div class="product__wrap">
                        <div class="product__amount">
                            <label for="">Số lượng: </label>
                            <input type="button" value="-" class="control" onclick="tru()" id="cong">
                            <input type="text" value="1" class="text-input" id="text_so_luong" onkeypress='validate(event)'>
                            <input type="button" value="+" class="control" onclick="cong()">
                        </div>
                        <button class="add-cart" onclick="fadeInModal()"><a href="<?= "index.php?act=add-cart&id=" . $product['id'] ?>">Thêm vào giỏ</a></button>
                    </div>
                    <div class="product__shopnow">
                        <button class="shopnow">Mua ngay</button>
                        <span class="home-product-item__like home-product-item__like--liked">
                            <i class="home-product-item__like-icon-empty far fa-heart" style="font-size: 24px;margin-top: 7px;"></i>
                            <i class="home-product-item__like-icon-fill fas fa-heart" style="font-size: 24px;margin-top: 7px;"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__describe">
        <div class="container">
            <h2 class="product__describe-heading">Mô tả</h2>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-11">
                    <h3 class="name__product"><?= $product['name'] ?></h3>
                    <h3> <?= $product['description'] ?> </h3>

                </div>
            </div>
        </div>
    </div>
    <div class="product__comment">
        <div class="container">
            <h2 class="product__describe-heading">Bình luận</h2>
            <div class="row">
                <div class="col-lg-4 col-12 mb-4">
                    <div class="home-product-item__rating" style="font-size: 24px;transform-origin: left;margin-bottom: 5px">
                        <i class="home-product-item__star--gold fas fa-star"></i>
                        <i class="home-product-item__star--gold fas fa-star"></i>
                        <i class="home-product-item__star--gold fas fa-star"></i>
                        <i class="home-product-item__star--gold fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <textarea name="" id="" cols="70" rows="10"></textarea>
                    <button type="submit" class="btn btn-comment">Gửi</button>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="body__comment">
                        <div class="comment" style="align-items: center;">
                            <img class="comment-img" src="./assets/img/product/noavatar.png" alt="">
                            <div class="comment__content">
                                <div class="comment__content-heding">
                                    <h4 class="comment__content-name">Đỗ Hào</h4>
                                    <span class="comment__content-time">2021-11-12</span>
                                </div>
                                <div class="home-product-item__rating" style="font-size: 14px;transform-origin: left;margin-bottom: 5px">
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="comment__content-content">
                                    <span>Đẹp quá</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img class="comment-img" src="./assets/img/product/noavatar.png" alt="">
                            <div class="comment__content">
                                <div class="comment__content-heding">
                                    <h4 class="comment__content-name">Đỗ Hào</h4>
                                    <span class="comment__content-time">2021-11-12</span>
                                </div>
                                <div class="home-product-item__rating" style="font-size: 14px;transform-origin: left;margin-bottom: 5px">
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="comment__content-content">
                                    <span>Quá đẹp</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img class="comment-img" src="./assets/img/product/noavatar.png" alt="">
                            <div class="comment__content">
                                <div class="comment__content-heding">
                                    <h4 class="comment__content-name">Đỗ Hào</h4>
                                    <span class="comment__content-time">2021-11-12</span>
                                </div>
                                <div class="home-product-item__rating" style="font-size: 14px;transform-origin: left;margin-bottom: 5px">
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="comment__content-content">
                                    <span>Đẹp quá</span>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img class="comment-img" src="./assets/img/product/noavatar.png" alt="">
                            <div class="comment__content">
                                <div class="comment__content-heding">
                                    <h4 class="comment__content-name">Đỗ Hào</h4>
                                    <span class="comment__content-time">2021-11-12</span>
                                </div>
                                <div class="home-product-item__rating" style="font-size: 14px;transform-origin: left;margin-bottom: 5px">
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="home-product-item__star--gold fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="comment__content-content">
                                    <span>Sản phẩm tốt</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="comment">
                  <img class="comment-img" src="./assets/img/product/noavatar.png" alt="" >
                  <div class="comment__content">
                    <div class="comment__content-heding">
                      <h4 class="comment__content-name">Đỗ Hào</h4>
                      <span class="comment__content-time">2021-11-12</span>
                    </div>
                    <div class="home-product-item__rating" style="font-size: 14px;transform-origin: left;margin-bottom: 5px">
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="home-product-item__star--gold fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="comment__content-content">
                      <span>Sản phẩm tốt</span>
                    </div>
                  </div>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product detail -->
    <!-- product relate to -->
    <div class="product__relateto">
        <div class="container">
            <h3 class="product__relateto-heading">Sản phẩm liên quan</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                    <a href="./ProductDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <div>
                                <img class="card-img-top" src="./assets/img/product/aohoodie1.jpg" alt="Card image cap">
                                <!-- <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form> -->
                            </div>
                            <div class="card-body">
                                <h5 class="card-title custom__name-product">
                                    Hoodie Adidas
                                </h5>
                                <div class="product__price">
                                    <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                    <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">79 đã bán</span>
                                </div>
                                <div class="sale-off">
                                    <span class="sale-off-percent">20%</span>
                                    <span class="sale-off-label">GIẢM</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                    <a href="./ProductDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <div>
                                <img class="card-img-top" src="./assets/img/product/aohoodie1.jpg" alt="Card image cap">
                                <!-- <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form> -->
                            </div>
                            <div class="card-body">
                                <h5 class="card-title custom__name-product">
                                    Hoodie Adidas
                                </h5>
                                <div class="product__price">
                                    <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                    <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">79 đã bán</span>
                                </div>
                                <div class="sale-off">
                                    <span class="sale-off-percent">20%</span>
                                    <span class="sale-off-label">GIẢM</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                    <a href="./ProductDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <div>
                                <img class="card-img-top" src="./assets/img/product/aohoodie1.jpg" alt="Card image cap">
                                <!-- <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form> -->
                            </div>
                            <div class="card-body">
                                <h5 class="card-title custom__name-product">
                                    Hoodie Adidas
                                </h5>
                                <div class="product__price">
                                    <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                    <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">79 đã bán</span>
                                </div>
                                <div class="sale-off">
                                    <span class="sale-off-percent">20%</span>
                                    <span class="sale-off-label">GIẢM</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
                    <a href="./ProductDetail.html" class="product__new-item">
                        <div class="card" style="width: 100%">
                            <div>
                                <img class="card-img-top" src="./assets/img/product/aohoodie1.jpg" alt="Card image cap">
                                <!-- <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form> -->
                            </div>
                            <div class="card-body">
                                <h5 class="card-title custom__name-product">
                                    Hoodie Adidas
                                </h5>
                                <div class="product__price">
                                    <p class="card-text price-color product__price-old">1,000,000 đ</p>
                                    <p class="card-text price-color product__price-new">1,000,000 đ</p>
                                </div>
                                <div class="home-product-item__action">
                                    <span class="home-product-item__like home-product-item__like--liked">
                                        <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                        <i class="home-product-item__like-icon-fill fas fa-heart"></i>
                                    </span>
                                    <div class="home-product-item__rating">
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="home-product-item__star--gold fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="home-product-item__sold">79 đã bán</span>
                                </div>
                                <div class="sale-off">
                                    <span class="sale-off-percent">20%</span>
                                    <span class="sale-off-label">GIẢM</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="seemore">
                <a href="./Product.html">Xem thêm</a>
            </div>
        </div>
    </div>
    <!-- end  product relate to-->
    <!-- end product -->
    <?php include './views/user/layout/footer.php'; ?>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/zoomsl.js"></script>
    <script>
        $(document).ready(function() {
            $(".big-img").imagezoomsl({
                zoomrange: [3, 3]

            });
        });
    </script>
    <script>
        function fadeInModal() {
            $('.alert').fadeIn();
            $('.overlay1').fadeIn();
        }

        function fadeOutModal() {
            $('.alert').fadeOut();
            $('.overlay1').fadeOut();
        }

        function fadeout() {
            $('.overlay1').fadeOut();
            $('.alert').fadeOut();
        }
        setInterval(fadeOutModal, 7000);
    </script>