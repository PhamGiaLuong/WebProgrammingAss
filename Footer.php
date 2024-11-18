        <!-- footer chung cho các tab -->
        <div class="col-12 d-flex flex-wrap mt-3" style="background-color:#222f3e; color: white; font-family: 'Asap', sans-serif;">
            <div class="col-12 fw-bold p-3">
                <h3>NHÃN HIỆU</h3>
            </div>
            <div class="col-12 col-md-6 p-3">
                <h5 class="border-bottom" style="width: 50%;">Trụ sở</h5>
                <p>666 đường 36, phường ANM, quận 9, TPHCM</p>
                <h5 class="border-bottom" style="width: 50%;">Chi nhánh</h5>
                <p>666 đường 36, phường ANM, quận 9, TPHCM</p>
                <p>666 đường 36, phường ANM, quận 9, TPHCM</p>
                <p>666 đường 36, phường ANM, quận 9, TPHCM</p>
            </div>
            <div class="col-12 col-md-6 p-3">
                <h5 class="border-bottom" style="width: 50%;">Thời gian hoạt động</h5>
                <p>8:00AM - 22:00PM</p>
                <h5 class="border-bottom" style="width: 50%;">Thông tin liên hệ</h5>
                <div class="col-12 d-flex justify-between">
                    <a href="#" class="w-25"><i class="bi bi-facebook fs-2 text-primary"></i></a>
                    <a href="#" class="w-25"><i class="bi bi-tiktok fs-2 text-white"></i></a>
                    <a href="#" class="w-25"><i class="bi bi-youtube fs-2 text-danger"></i></a>
                    <a href="#" class="w-25">
                        <i class="bi bi-instagram fs-2" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); background-clip: text; -webkit-background-clip: text; color: transparent;"></i>
                    </a>
                </div>
                <div class="col-12">
                    <a href="#" class="text-white">
                        <i class="bi bi-telephone-inbound fs-2"></i> 079 777 0365
                    </a>
                </div>
                <div class="col-12">
                    <a href="#" class="text-white">
                        <i class="bi bi-envelope-at fs-2 text-white"></i> <span>nhanhieu@gmail.com</span>
                    </a>
                </div>

            </div>
            <div class="col-12 text-center d-flex align-items-center justify-content-center" style="background-color: #222f3e; height: 40px;">
                <p class="m-0">Bản quyền &copy; 2024 NHÃN HIỆU. Bảo lưu mọi quyền.</p>
            </div>
        </div>

        <script>
            // Update active state of Tabs on Navigation bar
            const currentUrl = window.location.pathname;

            const navLinks = document.querySelectorAll('.nlink');
            navLinks.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page');
                } else {
                    link.classList.remove('active');
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/Assignment/script.js"></script>

    </body>

</html>