<!-- header -->
<?php include './views/user/layout/header.php'; ?>
<!-- end header -->
<div class="container">
  <!-- slide show -->
  <?php include './views/user/layout/slider.php'; ?>

  <!-- end slide show -->

  <div class="product">
    <div class="container">
      <div class="product__sale">
        <h3 class="product__sale title-product"><?= $category_name ?></h3>
        <div class="row">
          <?php foreach ($products as $product) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-20">
              <a href="./ProductDetail.html" class="product__new-item">
                <div class="card" style="width: 100%">
                  <div>
                    <img class="card-img-top" src="<?= 'uploads/' . $product['img'] ?>" alt="Card image cap">
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
                      <?= $product['name'] ?>
                    </h5>
                    <div class="product__price">
                      <p class="card-text price-color product__price-new"><?= $product['price'] ?></p>
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

    </div>
  </div>
</div>
<!-- end bộ lộc mobile -->
<!-- end product -->
<?php include './views/user/layout/footer.php'; ?>