<?php include('../Header.php');?>
<!-- tab Liên hệ -->
<div class="container my-4 d-flex flex-wrap gap-3 justify-content-between">
    <div class="col-md-5 col-12" style="border: 1px #576574 solid; border-radius: 20px;">
        <h3 class="p-2" style="color: white; background-color: #576574; border-radius: 20px 20px 0 0;">
            Gửi Tin Nhắn
        </h3>
        <form class="p-2">
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" class="form-control" id="title" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Danh mục</label>
                <select class="form-select" id="category" required>
                    <option value="" disabled selected>Chọn danh mục</option>
                    <option value="product_feedback">Phản hồi sản phẩm</option>
                    <option value="product_warranty">Bảo hành sản phẩm</option>
                    <option value="custom_order">Đặt hàng riêng</option>
                    <option value="recruitment">Tuyển dụng</option>
                    <option value="other">Khác...</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Tin nhắn</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary w-25"><i class="bi bi-trash"></i> Xóa</button>
                <button type="submit" class="btn btn-primary w-25"><i class="bi bi-send"></i> Gửi</button>
            </div>
        </form>
    </div>
    <div class="col-md-6 col-12">
        <h3 class="p-2">Vị trí cửa hàng</h3>
        <!-- Nhúng bản đồ -->
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.7504954302826!2d106.65759843892833!3d10.772888535511097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3d80f81e9%3A0x9e862e2b1775a89e!2zMjY4IEzDvSBUaMaw4budbmcgS2nhu4d0LCBQaMaw4budbmcgMTQsIFF14bqtbiAxMCwgSOG7kyBDaMOtIE1pbmggNzAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1729959784191!5m2!1svi!2s" 
            width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>




<?php include('../Footer.php');?>