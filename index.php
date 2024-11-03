<!-- Trang chủ -->
<?php include('Header.php'); ?>
<!-- Mũi tên quay về đầu trang -->
<div id="backToTop" class="back-to-top">
  <i class="bi bi-arrow-up-circle text-white fs-3"></i>
</div>
<!-- Welcome image -->
<div id="carouselExample" class="carousel slide" style="overflow: hidden;" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cmsv2.yame.vn/uploads/9126cda4-f813-4131-b416-8801d485a5d5/BST_NO_STYLE_TRANG_CH%e1%bb%a6.jpg?quality=80&w=1280&h=0"
        class="d-block w-100" alt="Welcome image 1" style="object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://cmsv2.yame.vn/uploads/15f52d53-26f9-4c7b-ab60-8246210b4bb4/Bo_suu_tap_Doraemon.png?quality=80&w=1280&h=0"
        class="d-block w-100" alt="Welcome image 2" style="object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://cmsv2.yame.vn/uploads/f5a45bc2-1880-4adf-b4b3-640670a1bd3f/BST_THE_SEAFARER_TRANG_CH%e1%bb%a6.jpg?quality=80&w=1280&h=0"
        class="d-block w-100" alt="Welcome image 3" style="object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Welcome invitation -->
<div class="col-12 text-center" style="background-color: #8395a7; color: white;">
  <div class="col-12 p-5">
    <h1 style="font-family: 'Dancing Script', sans-serif;">Chào mừng bạn đến thăm chúng tôi!</h1>
  </div>
  <div class="col-12 d-flex flex-wrap justify-content-around gap-1 pb-3">
    <h4>Bạn muốn tìm hiểu về...</h4>
    <a href="" class="border-a fade-in p-2">Sản phẩm cho nam?</a>
    <a href="" class="border-a fade-in p-2">Sản phẩm cho nữ?</a>
    <a href="/Assignment/Tabs/Introduction.php" class="border-a fade-in p-2">Quá trình hình thành thương hiệu?</a>
    <a href="/Assignment/Tabs/Contact.php" class="border-a fade-in p-2">Cách thức liên lạc?</a>
    <a href="" class="border-a fade-in p-2">Thông tin tuyển dụng?</a>
  </div>
</div>

<!-- Main content -->
<div class="container mt-3" style="color: #222f3e;">
  <div class="col-12 d-flex flex-wrap">
    <div class="col-md-3 col-6 border d-flex flex-wrap justify-content-center align-items-center p-3">
      <i class="bi bi-box-seam fs-1 col-12 text-center"></i>
      <p>Miễn phí đổi trả trong 7 ngày</p>
    </div>
    <div class="col-md-3 col-6 border d-flex flex-wrap justify-content-center align-items-center p-3">
      <i class="bi bi-headset fs-1 col-12 text-center"></i>
      <p>Hỗ trợ khách hàng 24/7</p>
    </div>
    <div class="col-md-3 col-6 border d-flex flex-wrap justify-content-center align-items-center p-3">
      <i class="bi bi-rocket-takeoff fs-1 col-12 text-center"></i>
      <p>Giao hàng miễn phí đơn trên 500k</p>
    </div>
    <div class="col-md-3 col-6 border d-flex flex-wrap justify-content-center align-items-center p-3">
      <i class="bi bi-credit-card fs-1 col-12 text-center"></i>
      <p>Đặt hàng online</p>
    </div>
  </div>

  <!-- Sản phẩm nổi bật -->
  <div id="productCarousel" class="carousel slide my-2" data-bs-ride="carousel">
    <div class="d-flex align-items-center">
      <h2>Sản phẩm nổi bật</h2>
      <div style="height: 2px; background-color: #222f3e; flex-grow: 1;"></div>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <?php
          $products = [
            ['id' => 1, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
            ['id' => 2, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
            ['id' => 3, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver144-0021849/bb49e3f6-6f7f-6e00-9591-001a33e033ba.jpg?w=800'],
            ['id' => 4, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
            ['id' => 5, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
            ['id' => 6, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
            ['id' => 7, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
            ['id' => 8, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
            ['id' => 9, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
            ['id' => 10, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://example.com/image2.jpg'],
            ['id' => 11, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
            ['id' => 12, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756'],
            ['id' => 13, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://example.com/image1.jpg'],
            ['id' => 14, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],
            ['id' => 15, 'name' => 'Áo Sơ Mi Nam', 'price' => '365.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756'],
            ['id' => 16, 'name' => 'Áo Thun Nữ', 'price' => '250.000 VND', 'image' => 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756'],

          ];
          foreach ($products as $index => $product): ?>
            <div class="col-md-3 col-6 d-flex align-items-stretch product-item">
              <a href="/Assignment/Tabs/ProductDetail.php" class="text-decoration-none text-dark">
                <div class="card border-0 flex-fill">
                  <div class="col-12 d-flex justify-content-center align-items-center product-image">
                    <img src="<?= $product['image']; ?>" class="card-img-top" alt="<?= $product['name']; ?>"
                      onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/017/173/007/original/can-not-load-corrupted-image-concept-illustration-flat-design-eps10-modern-graphic-element-for-landing-page-empty-state-ui-infographic-icon-vector.jpg';"
                      style="object-fit: contain; height: 100%;">
                  </div>
                  <div class="card-body p-1 text-center">
                    <h5 class="card-title"><?= $product['name']; ?></h5>
                    <p class="card-text"><?= $product['price']; ?></p>
                    <div class="col-12 d-flex justify-content-center">
                      <a href="#" class="btn btn-danger"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</a>
                    </div>
                  </div>
                </div>
              </a>
              <span class="badge bg-danger position-absolute top-0 start-0 m-2">Nổi bật</span>
            </div>
            <?php if (($index + 1) % 4 === 0 && $index + 1 < count($products)): ?>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

<!-- Tin tức -->
  <div class="d-flex align-items-center">
    <h2>Tin tức</h2>
    <div style="height: 2px; background-color: #222f3e; flex-grow: 1;"></div>
  </div>
  <div class="col-md-3 col-6 border rounded-4 m-2">
    <div class="col-12 rounded-top-4" style="overflow: hidden; height: 20px;">
        <img src="https://th.bing.com/th/id/OIP.V8mCmqniJFqF6DMsjGDpJQHaEK?w=236&h=132&c=7&o=5&dpr=1.3&pid=1.20" class="img-fluid" alt="News Image">
    </div>
    <div class="col-12 p-2">
        <h5 class="card-title truncate-1">Tiêu đề bài viết</h5>
        <p class="card-text text-muted">Ngày tạo: 2024-11-03</p>
        <p class="card-text truncate-3">Đoạn nhỏ nội dung của bài viết này sẽ được hiển thị ở đây, cung cấp cho người đọc một phần giới thiệu ngắn gọn mà không quá dài, nếu không sẽ bị ẩn đi.</p>
        <a href="#" class="btn col-12 text-end">Đọc thêm <i class="bi bi-arrow-right-circle"></i></a>
    </div>
  </div>


</div>



  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cmsv2.yame.vn/uploads/8f5f13ba-9939-4fd2-bb33-813b93b18288/BST_COOL_TOUCH_TRANG_CH%e1%bb%a6.jpg?quality=80&w=1280&h=0" class="d-block w-100" alt="Sản phẩm 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cmsv2.yame.vn/uploads/62cf34fe-6fdb-437e-9376-f5a10a500628/M%e1%bb%9f_b%c3%a1n_25.10_trang_ch%e1%bb%a7.jpg?quality=80&w=1280&h=0" class="d-block w-100" alt="Sản phẩm 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cmsv2.yame.vn/uploads/15f52d53-26f9-4c7b-ab60-8246210b4bb4/Bo_suu_tap_Doraemon.png?quality=80&w=1280&h=0" class="d-block w-100" alt="Sản phẩm 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<?php include('Footer.php'); ?>