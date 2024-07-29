document.addEventListener('DOMContentLoaded', function() {
    const leftBtn = document.querySelector('.left');
    const rightBtn = document.querySelector('.right');
    const images = document.querySelectorAll('.slider-img img');

    let currentIndex = 0;

    function changeImage(index) {
      images.forEach((image, i) => {
        image.style.display = i === index ? 'block' : 'none';
      });
    }

    // Hiển thị ảnh đầu tiên khi tải trang
    changeImage(currentIndex);

    leftBtn.addEventListener('click', function() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      changeImage(currentIndex);
    });

    rightBtn.addEventListener('click', function() {
      currentIndex = (currentIndex + 1) % images.length;
      changeImage(currentIndex);
    });

    function autoChangeImage() {
      currentIndex = (currentIndex + 1) % images.length;
      changeImage(currentIndex);
    }

    setInterval(autoChangeImage, 5000);
  });