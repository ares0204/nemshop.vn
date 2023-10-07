// Slide shows
const images = document.querySelectorAll(".slider__banner-img");
let currentIndex = 0;

document.getElementById("nextBtn").addEventListener("click", nextImage);
document.getElementById("prevBtn").addEventListener("click", prevImage);

function nextImage() {
  images[currentIndex].style.display = "none";
  currentIndex = (currentIndex + 1) % images.length;
  images[currentIndex].style.display = "block";
}

function prevImage() {
  images[currentIndex].style.display = "none";
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  images[currentIndex].style.display = "block";
}

// Hàm để cuộn lên đầu trang
function topFunction() {
  const scrollToTop = () => {
      const scrollStep = -window.scrollY / 15;
      if (window.scrollY > 0) {
          window.scrollBy(0, scrollStep);
          requestAnimationFrame(scrollToTop);
      }
  };
  scrollToTop();
}

// Thêm sự kiện cuộn trang
window.addEventListener('scroll', () => {
  const myBtn = document.getElementById('myBtn');
  if (window.scrollY > 200) {
      myBtn.classList.add('active');
  } else {
      myBtn.classList.remove('active');
  }
});
