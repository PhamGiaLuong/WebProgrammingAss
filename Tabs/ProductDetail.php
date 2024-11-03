<?php include('../Header.php'); ?>
<!-- tab Chi tiết sản phẩm -->
    <div class="container d-flex flex-wrap mt-4">
        <!-- Breadcrumb -->
         <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/Assignment/Tabs/Products.php">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Clothing</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Men's Shirts</li>
                </ol>
            </nav>
         </div>
        
        <!-- Cột hiển thị hình ảnh sản phẩm lớn với trình chiếu hình ảnh tự động -->
        <div class="col-md-7 col-12" style="height: 60vh;">
            <div id="productImageCarousel" class="carousel slide h-100" data-bs-ride="carousel" style="overflow: hidden;">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100">
                        <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" 
                            class="d-block w-100 h-100" 
                            alt="Product Image 1" 
                            style="object-fit: contain;">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756" 
                            class="d-block w-100 h-100" 
                            alt="Product Image 2" 
                            style="object-fit: contain;">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756" 
                            class="d-block w-100 h-100" 
                            alt="Product Image 3" 
                            style="object-fit: contain;">
                    </div>
                    <!-- Thêm các hình ảnh khác nếu cần -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productImageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productImageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-md-5 col-12 p-2 text-center">
            <h2>Áo sơ mi nam</h2>
            <h2>251,000 VND</h2>
            <form action="">
                <div class="d-flex flex-wrap justify-content-center mb-3">
                    <button type="button" class="btn btn-outline-secondary me-2" data-size="S">S</button>
                    <button type="button" class="btn btn-outline-secondary me-2" data-size="M">M</button>
                    <button type="button" class="btn btn-outline-secondary me-2" data-size="L">L</button>
                    <button type="button" class="btn btn-outline-secondary me-2" data-size="XL">XL</button>
                    <button type="button" class="btn btn-outline-secondary" data-size="XXL">XXL</button>
                </div>
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <button type="button" id="decreaseBtn" class="btn btn-secondary">-</button>
                    <input type="number" id="quantityInput" value="1" min="1" class="form-control mx-2 text-center" style="width: 60px;" readonly>
                    <button type="button" id="increaseBtn" class="btn btn-secondary">+</button>
                </div>

                <button type="submit" id="addToCartBtn" class="btn btn-outline-danger w-50 my-2"><i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng</button>
                <button type="submit" id="addToCartBtn" class="btn btn-danger w-50 my-2">Mua ngay</button>
            </form>
            <div class="col-12 d-flex flex-wrap justify-content-around gap-1">
                <a href="" class="border-b fade-in p-2">Áo nam</a>
                <a href="" class="border-b fade-in p-2">Bán chạy</a>
                <a href="" class="border-b fade-in p-2">Bộ sưu tập NA</a>
                <a href="" class="border-b fade-in p-2">Thun lạnh</a>
                <a href="" class="border-b fade-in p-2">Oversize</a>
                <a href="" class="border-b fade-in p-2">Tay dài</a>
                <a href="" class="border-b fade-in p-2">Cổ cao</a>
            </div>
        </div>

        <!-- Tab con chứa Hình ảnh sản phẩm, Chi tiết sản phẩm, và Đánh giá -->
        <div class="col-12 mt-4 border-top">
            <ul class="nav nav-underline fs-md-5 fs-6" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark active" id="productImages-tab" data-bs-toggle="tab" data-bs-target="#productImages" type="button" role="tab" aria-controls="productImages" aria-selected="true"aria-current="page" >Hình ảnh sản phẩm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark" id="productDetails-tab" data-bs-toggle="tab" data-bs-target="#productDetails" type="button" role="tab" aria-controls="productDetails" aria-selected="false">Chi tiết sản phẩm</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-dark" id="productReviews-tab" data-bs-toggle="tab" data-bs-target="#productReviews" type="button" role="tab" aria-controls="productReviews" aria-selected="false">Đánh giá</button>
                </li>
            </ul>
            <div class="tab-content p-3" id="productTabsContent">
                <!-- Tab Hình ảnh sản phẩm -->
                <div class="tab-pane fade show active" id="productImages" role="tabpanel" aria-labelledby="productImages-tab">
                    <div class="d-flex flex-column">
                        <img src="https://cdn2.yame.vn/pimg/ao-so-mi-co-be-tay-ngan-soi-nhan-tao-tham-hut-bieu-tuong-dang-rong-on-gian-seventy-seven-22-0023256/c78dc017-9d42-dd00-b203-001b3f0898db.jpg?w=540&h=756" class="mb-2" alt="Product Image 1">
                        <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="mb-2" alt="Product Image 2">
                        <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="mb-2" alt="Product Image 3">
                        <!-- Thêm các hình ảnh khác nếu cần -->
                    </div>
                </div>

                <!-- Tab Chi tiết sản phẩm -->
                <div class="tab-pane fade" id="productDetails" role="tabpanel" aria-labelledby="productDetails-tab">
                    <p>Chi tiết sản phẩm sẽ hiển thị ở đây.</p>
                </div>

                <!-- Tab Đánh giá -->
                <div class="tab-pane fade" id="productReviews" role="tabpanel" aria-labelledby="productReviews-tab">
                    <div class="reviews border rounded p-2">
                        <div class="review mb-3">
                            <h5>Nguyễn Văn A <span>★★★★★</span></h5>
                            <p class="fst-italic">2024-10-31</p>
                            <p>Rất tốt, sản phẩm đẹp.</p>
                        </div>
                        <!-- Thêm các đánh giá khác nếu có -->
                    </div>
                    <!-- Form gửi đánh giá -->
                    <form class="mt-4 border rounded p-2 d-flex flex-wrap justify-content-end">
                        <h4 class="col-12">Đánh giá của bạn</h4>
                        <div class="col-md-6 col-12 mb-3 d-flex">
                            <div class="col-3">
                                <label for="reviewerName" class="form-label fw-bold fst-italic">Nickname</label>
                            </div>
                            <div class="col-8">
                                <input type="text" class="form-control" id="reviewerName" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3 d-flex">
                            <div class="col-3">
                                <label class="form-label fw-bold fst-italic">Đánh giá</label>
                            </div>
                            <div class="col-8">
                                <div id="starRating" class="star-rating">
                                    <i class="bi bi-star" data-value="1"></i>
                                    <i class="bi bi-star" data-value="2"></i>
                                    <i class="bi bi-star" data-value="3"></i>
                                    <i class="bi bi-star" data-value="4"></i>
                                    <i class="bi bi-star" data-value="5"></i>
                                </div>
                                <input type="hidden" id="reviewRating" name="reviewRating" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <textarea class="form-control" id="reviewDetails" rows="3" required placeholder="Đánh giá của bạn..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark col-md-3 col-6">Gửi đánh giá</button>
                    </form>
                </div>
            </div>

        </div>

        <!-- Gợi ý các sản phẩm liên quan -->
        <div class="col-12 mt-4">
            <div class="col-12 p-2" style="background-color: #222f3e;color: white;">
                <h4 class="m-0">Có thể bạn sẽ thích</h4>
            </div>
            <div id="relatedProductsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="d-block w-100" alt="Related Product 1">
                            </div>
                            <div class="col-3">
                                <img src="path/to/related-product2.jpg" class="d-block w-100" alt="Related Product 2">
                            </div>
                            <div class="col-3">
                                <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="d-block w-100" alt="Related Product 3">
                            </div>
                            <div class="col-3">
                                <img src="path/to/related-product4.jpg" class="d-block w-100" alt="Related Product 4">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://cdn2.yame.vn/pimg/ao-khoac-bomber-premium-34-0022615/08583102-08d6-1300-22f0-001ad42f4b5d.jpg?w=540&h=756" class="d-block w-100" alt="Related Product 5">
                            </div>
                            <div class="col-3">
                                <img src="path/to/related-product6.jpg" class="d-block w-100" alt="Related Product 6">
                            </div>
                            <div class="col-3">
                                <img src="https://cdn2.yame.vn/pimg/ao-khoac-khong-non-vai-denim-thoang-mat-tron-dang-rong-on-gian-premium-73-0023071/2e07fe26-c6af-1300-525b-001b17ca099d.jpg?w=540&h=756" class="d-block w-100" alt="Related Product 7">
                            </div>
                            <div class="col-3">
                                <img src="path/to/related-product8.jpg" class="d-block w-100" alt="Related Product 8">
                            </div>
                        </div>
                    </div>
                    <!-- Thêm các sản phẩm liên quan khác nếu cần -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#relatedProductsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#relatedProductsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

<?php include('../Footer.php'); ?>
