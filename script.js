$(document).ready(function () {
  // Fade-in animation
  const fadeIns = $(".fade-in");

  function handleScroll() {
    fadeIns.each(function () {
      const rect = this.getBoundingClientRect();
      if (rect.top < $(window).height() && rect.bottom >= 0) {
        $(this).addClass("visible");
      }
    });
  }

  $(window).on("scroll", handleScroll);
  handleScroll();

  // Đánh giá sản phẩm
  const stars = $("#starRating i");
  const ratingInput = $("#reviewRating");

  stars.on("click", function () {
    const rating = $(this).data("value");
    ratingInput.val(rating);

    // Xóa class active cho tất cả các ngôi sao
    stars.removeClass("active");

    // Thêm class active cho các ngôi sao từ 1 đến số được chọn
    for (let i = 0; i < rating; i++) {
      $(stars[i]).addClass("active");
    }
  });
});

// Xử lý khi người dùng chọn Lựa chọn "khác"
function toggleOtherInput() {
  var $select = $("#collection");
  var $otherInput = $("#otherCollection");

  if ($select.val() === "other") {
    $otherInput.show(); // Hiển thị ô nhập liệu
    $otherInput.prop("required", true); // Đặt ô nhập là bắt buộc
  } else {
    $otherInput.hide(); // Ẩn ô nhập liệu
    $otherInput.prop("required", false); // Bỏ yêu cầu bắt buộc khi ẩn
    $otherInput.val(""); // Xóa giá trị trong ô nhập khi không cần thiết
  }
}


$(document).ready(function () {
  // Hiển thị mũi tên trở về đầu trang khi cuộn xuống
  $(window).scroll(function () {
    const $backToTopButton = $("#backToTop");
    if ($(document).scrollTop() > 100) {
      $backToTopButton.show(); // Hiển thị nút
    } else {
      $backToTopButton.hide(); // Ẩn nút
    }
  });
  // Cuộn về đầu trang khi nhấn vào nút
  $("#backToTop").click(function (event) {
    event.preventDefault(); // Ngăn chặn hành động mặc định
    $("html, body").animate({ scrollTop: 0 }, "smooth"); // Cuộn về đầu trang với hiệu ứng mượt mà
  });
});



document.getElementById('searchBtn').addEventListener('click', function () {
  var searchInput = document.getElementById('searchInput');
  if (searchInput.style.display === 'none' || searchInput.style.display === '') {
    searchInput.style.display = 'block'; // Hiện ô tìm kiếm
    searchInput.focus(); // Đưa con trỏ vào ô tìm kiếm
  } else {
    searchInput.style.display = 'none'; // Ẩn ô tìm kiếm
  }
});

// Products carousel on Home page
const productContainer = document.querySelector('.products');
const productItems = document.querySelectorAll('.product-item');
const itemsToShow = 4; // Số sản phẩm hiển thị cùng một lúc
let currentIndex = 0;

function slideProducts() {
  currentIndex = (currentIndex + 1) % (productItems.length - itemsToShow + 1); // Tính toán chỉ số mới
  productContainer.style.transform = `translateX(-${currentIndex * (100 / itemsToShow)}%)`; // Dịch trái các sản phẩm
}

setInterval(slideProducts, 2000);

// Order History list
function toggleDetails(id) {
  const element = document.getElementById(id);
  element.classList.toggle("collapse");
}

// Tab productDetail  
// Xử lý chọn kích thước
const sizeButtons = document.querySelectorAll('.btn-outline-primary');
sizeButtons.forEach(button => {
  button.addEventListener('click', function () {
    sizeButtons.forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
  });
});

// Xử lý tăng giảm số lượng
const quantityInput = document.getElementById('quantityInput');
const increaseBtn = document.getElementById('increaseBtn');
const decreaseBtn = document.getElementById('decreaseBtn');

increaseBtn.addEventListener('click', () => {
  quantityInput.value = parseInt(quantityInput.value) + 1;
});

decreaseBtn.addEventListener('click', () => {
  if (quantityInput.value > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
});


// // Update active state of Tabs on Navigation bar
// const currentUrl = window.location.pathname;
// const navLinks = document.querySelectorAll('.nlink');
// navLinks.forEach(link => {
//     if (link.href === window.location.href) {
//         link.classList.add('active');
//         link.setAttribute('aria-current', 'page');
//     } else {
//         link.classList.remove('active');
//     }
// });