document.addEventListener("DOMContentLoaded", function () {
  // Fade-in annimation
  const fadeIns = document.querySelectorAll(".fade-in");

  function handleScroll() {
    fadeIns.forEach((fadeIn) => {
      const rect = fadeIn.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom >= 0) {
        fadeIn.classList.add("visible");
      }
    });
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll();

  // Đánh giá sản phẩm
  const stars = document.querySelectorAll("#starRating i");
  const ratingInput = document.getElementById("reviewRating");

  stars.forEach(star => {
    star.addEventListener("click", () => {
      const rating = star.getAttribute("data-value");
      ratingInput.value = rating;

      // Xóa class active cho tất cả các ngôi sao
      stars.forEach(s => s.classList.remove("active"));

      // Thêm class active cho các ngôi sao từ 1 đến số được chọn
      for (let i = 0; i < rating; i++) {
        stars[i].classList.add("active");
      }
    });
  });


});
// lựa chọn "khác" về BST khi thêm sản phẩm mới
function toggleOtherInput() {
  var select = document.getElementById("collection");
  var otherInput = document.getElementById("otherCollection");
  if (select.value === "other") {
    otherInput.style.display = "block"; // Hiển thị ô nhập liệu
    otherInput.required = true; // Đặt ô nhập là bắt buộc
  } else {
    otherInput.style.display = "none"; // Ẩn ô nhập liệu
    otherInput.required = false; // Bỏ yêu cầu bắt buộc khi ẩn
    otherInput.value = ""; // Xóa giá trị trong ô nhập khi không cần thiết
  }
}

// Hiển thị mũi tên trở về đầu trang khi cuộn xuống
window.onscroll = function () {
  const backToTopButton = document.getElementById('backToTop');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    backToTopButton.style.display = "block";
  } else {
    backToTopButton.style.display = "none";
  }
};
// Cuộn về đầu trang khi nhấn vào nút
document.getElementById('backToTop').addEventListener('click', function (event) {
  event.preventDefault(); // Ngăn chặn hành động mặc định
  window.scrollTo({ top: 0, behavior: 'smooth' }); // Cuộn về đầu trang với hiệu ứng mượt mà
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