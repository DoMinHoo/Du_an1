<!-- header -->
<?php include './views/user/layout/header.php'; ?>
<!-- end header -->
<!-- content -->
<div class="container">
  <!-- slide show -->
  <?php include './views/user/layout/slider.php'; ?>

  <!-- end slide show -->
  <div class="product">
    <div class="container">
      <div class="product_popular">
        <h3 class="product__popular title-product">Sản phẩm phổ biến</h3>
        <div class="row">
          <?php foreach ($listShoes as $shoe): ?>
            <div class="col-lg-4 col-sm-12 mb-20">
              <div class="card" style="width: 100%;">
                <img class="card-img-top" src="<?= 'uploads/' . $shoe['img'] ?>" alt="Card image" style="width:100%">
                <div class="card-body">
                  <h4 class="card-title"><?= $shoe['name'] ?></h4>
                  <p class="card-text description" style="font-weight: 400;"><?= $shoe['description'] ?></p>
                  <a href="index.php?act=detail&id=<?= $shoe['id'] ?>" title="" class="btn btn-buynow">Xem ngay <i class="fas fa-arrow-right"
                      style="font-size: 16px;margin-left: 5px;"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="product__new">
        <h3 class="product__ne title-product">Áo Thun</h3>
        <div class="row">
          <?php foreach ($listTshirts as $tshirt) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
              <a href="index.php?act=detail&id=<?= $tshirt['id'] ?>" class="product__new-item">
                <div class="card" style="width: 100%">
                  <div>
                    <img class="card-img-top" src="<?= 'uploads/' . $tshirt['img'] ?>" alt="Card image cap">
                    <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title description">
                      <?= $tshirt['name'] ?>
                    </h5>
                    <div class="product__price">
                      <p class="card-text price-color product__price-new"><?= $tshirt['price'] . '$' ?></p>
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

                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
      <div class="product__sale">
        <h3 class="product__sale title-product">Áo Hoodies</h3>
        <div class="row">
          <?php foreach ($listHoodies as $hoddie) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
              <a href="index.php?act=detail&id=<?= $hoddie['id'] ?>" class="product__new-item">
                <div class="card" style="width: 100%">
                  <div>
                    <img class="card-img-top" src="<?= 'uploads/' . $hoddie['img'] ?>" alt="Card image cap">
                    <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title description">
                      <?= $hoddie['name'] ?>
                    </h5>
                    <div class="product__price">
                      <p class="card-text price-color product__price-new"><?= $hoddie['price'] ?></p>
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
          <?php endforeach; ?>
        </div>
      </div>
      <section class="awe-section-9">
        <div class="section_policy clearfix">
          <div class="col-12">
            <div class="owl-policy-mobile">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item">
                    <div class="section_policy_content">

                      <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_1.png?1628514159582" alt="">
                      <div class="section-policy-padding">
                        <h3>Miễn phí vận chuyển</h3>
                        <div class="section_policy_title">Cho các đơn hàng</div>
                      </div>

                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="section_policy_content">

                      <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_2.png?1628514159582" alt="">
                      <div class="section-policy-padding">
                        <h3>Hỗ trợ 24/7</h3>
                        <div class="section_policy_title">Liên hệ hỗ trợ 24h/ngày</div>
                      </div>

                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="section_policy_content">

                      <img src="	https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_3.png?1628514159582" alt="">
                      <div class="section-policy-padding">
                        <h3>Hoàn tiền 100%</h3>
                        <div class="section_policy_title">Nếu sản phẩm bị lỗi, hư hỏng</div>
                      </div>

                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="section_policy_content">

                      <img src="https://bizweb.dktcdn.net/100/344/983/themes/704702/assets/policy_images_4.png?1628514159582" alt="">
                      <div class="section-policy-padding">
                        <h3>Thanh toán</h3>
                        <div class="section_policy_title">Được bảo mật 100%</div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="product__yml">
        <h3 class="product__yml title-product">Có thể bạn sẽ thích</h3>
        <div class="row">
          <?php foreach ($listJackets as $jacket) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
              <a href="index.php?act=detail&id=<?= $jacket['id'] ?>" class="product__new-item">
                <div class="card" style="width: 100%">
                  <div>
                    <img class="card-img-top" src="<?= 'uploads/' . $jacket['img'] ?>" alt="Card image cap">
                    <form action="" class="hover-icon hidden-sm hidden-xs">
                      <input type="hidden">
                      <a href="./pay.html" class="btn-add-to-cart" title="Mua ngay">
                        <i class="fas fa-cart-plus"></i>
                      </a>
                      <a data-toggle="modal" data-target="#myModal" class="quickview" title="Xem nhanh">
                        <i class="fas fa-search"></i>
                      </a>
                    </form>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title description">
                      <?= $jacket['name'] ?>
                    </h5>
                    <div class="product__price">
                      <p class="card-text price-color product__price-new"><?= $jacket['price'] ?></p>
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

                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
  </div>

</div>
<!-- footer -->
<?php include './views/user/layout/footer.php'; ?>
<div id="go-to-top">
  <a class="btn-gototop"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- end footer -->
<!-- modal -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">

      <!-- Modal Header -->
      <!-- <div class="modal-header">
          <h4 class="modal-title">Giày ADIDAS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-6">
            <div class="mb-2 main-img-2">
              <img src="./views/user/assets/img/product/ars1.jpg" alt="" id="img-main" xoriginal="./views/user/assets/img/product/ars1.jpg">
            </div>
            <ul class="all-img-2">
              <li class="img-item-2">
                <img src="./views/user/assets/img/product/ars1.jpg" alt="" onclick="changeImg('one')" id="one">
              </li>
              <li class="img-item-2">
                <img src="./views/user/assets/img/product/ars2.jpg" alt="" onclick="changeImg('two')" id="two">
              </li>
              <li class="img-item-2">
                <img src="./views/user/assets/img/product/ars3.jpg" alt="" onclick="changeImg('three')" id="three">
              </li>
              <li class="img-item-2">
                <img src="./views/user/assets/img/product/ars4.jpg" alt="" onclick="changseImg('four')" id="four">
              </li>
            </ul>
          </div>
          <div class="col-6">
            <div class="info-product">
              <h3 class="product-name">
                <a href="" title="">Giày ADIDAS</a>
              </h3>
              <div class="status-product">
                Trạng thái: <b>Còn hàng</b>
              </div>
              <div class="infor-oder">
                Loại sản phẩm: <b>Giày dép</b>
              </div>
              <div class="price-product">
                <div class="special-price">
                  <span>540.000đ</span>
                </div>
                <div class="price-old">
                  Giá gốc:
                  <del>650.000đ</del>
                  <span class="discount">(-20%)</span>
                </div>
              </div>
              <div class="product-description">
                Đầu tháng /2021, Nike chính thức trình
                làng thế hệ tiếp theo của dòng giày đá bóng huyền thoại
                thuộc nhà Swoosh là Tiempo Legend 9. Được mệnh danh là
                thế hệ nhẹ nhất từ trước đến nay của dòng giày đá bóng Tiempo,
                Legend 9 đã có những thay đổi đáng kể
                về mặt thiết kế lẫn công nghệ nhằm giúp người chơi có thể tự
                tin và phát huy tối đa khả năng khi chơi bóng.
              </div>

              <div class="product__color d-flex" style="align-items: center;">
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
                <div class="title" style="font-size: 16px; margin-right: 10px;">
                  Kích thước:
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
              </div>
              <div class="product__wrap">
                <div class="product__amount">
                  <label for="">Số lượng: </label>
                  <input type="button" value="-" class="control" onclick="tru()">
                  <input type="text" value="1" class="text-input" id="text_so_luong" onkeypress='validate(event)'>
                  <input type="button" value="+" class="control" onclick="cong()">
                </div>
              </div>
              <div class="product__shopnow">
                <button class="shopnow2">Mua ngay</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="btn-default btn-close" data-dismiss="modal">
        <i class="fas fa-times-circle"></i>
      </button>
      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>
<!-- end modal -->
</body>
<script src="./views/user/assets/css/main.js"></script>

</html>