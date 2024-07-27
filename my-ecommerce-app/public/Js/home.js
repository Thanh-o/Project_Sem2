   // Slider
   document.addEventListener('DOMContentLoaded', function() {
    const leftBtn = document.querySelector('.left5');
    const rightBtn = document.querySelector('.right5');
    const images = document.querySelectorAll('.slider-top img');

    let currentIndex = 0;

    leftBtn.addEventListener('click', function() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      changeImage(currentIndex);
    });

    rightBtn.addEventListener('click', function() {
      currentIndex = (currentIndex + 1) % images.length;
      changeImage(currentIndex);
    });

    function changeImage(index) {
      images.forEach((image, i) => {
        if (i === index) {
          image.style.display = 'block';
        } else {
          image.style.display = 'none';
        }
      });
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.slider-top img');
    const totalImages = images.length;
    let currentIndex = 0;
  
    function changeImage() {
      images.forEach((image, index) => {
        if (index === currentIndex) {
          image.style.display = 'block';
        } else {
          image.style.display = 'none';
        }
      });
  
      currentIndex = (currentIndex + 1) % totalImages;
    }
  
    setInterval(changeImage, 5000);
  });
        // Flash Sales
          document.addEventListener('DOMContentLoaded', () => {
    let countdown;
    
    const startCountdown = (days, hours, minutes, seconds) => {
      const now = new Date().getTime();
      const countdownEnd = now + (days * 86400 + hours * 3600 + minutes * 60 + seconds) * 1000;
  
      if (countdown) {
        clearInterval(countdown);
      }
  
      countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownEnd - now;
  
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
        document.getElementById('days').textContent = String(days).padStart(2, '0');
        document.getElementById('hours').textContent = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
  
        if (distance < 0) {
          clearInterval(countdown);
          document.getElementById('days').textContent = '00';
          document.getElementById('hours').textContent = '00';
          document.getElementById('minutes').textContent = '00';
          document.getElementById('seconds').textContent = '00';
        }
      }, 1000);
    };
  
    startCountdown(1, 15, 17, 55);
  });

//   Product Sale
document.addEventListener('DOMContentLoaded', () => {
  const sale = document.querySelector('.sale');
  const div1 = document.querySelector('.div-1');
  const left = document.querySelector('.left');
  const right = document.querySelector('.right');
  const elementWidth = 300; 
  const maxPosition = -(sale.scrollWidth - div1.clientWidth);
  let currentPosition = 0;

  left.addEventListener('click', () => {
    currentPosition += elementWidth;
    if (currentPosition > 0) {
      currentPosition = 0;
    }
    sale.style.transform = `translateX(${currentPosition}px)`;
  });

  right.addEventListener('click', () => {
    currentPosition -= elementWidth;
    if (currentPosition < maxPosition) {
      currentPosition = maxPosition;
    }
    sale.style.transform = `translateX(${currentPosition}px)`;
  });
});

// Product Prominent
document.addEventListener('DOMContentLoaded', () => {
    const div3 = document.querySelector('.div-3');
    const prol = document.querySelector('.product-list');
    const arrowLeft = document.querySelector('.arrow-left');
    const arrowRight = document.querySelector('.arrow-right');
    const elementWidth = 200; 
    const maxPosition = -(div3.scrollWidth - prol.clientWidth);
    let currentPosition = 0;
  
    arrowLeft.addEventListener('click', () => {
      currentPosition += elementWidth;
      if (currentPosition > 0) {
        currentPosition = 0;
      }
      prol.style.transform = `translateX(${currentPosition}px)`;
    });
  
    arrowRight.addEventListener('click', () => {
      currentPosition -= elementWidth;
      if (currentPosition < maxPosition) {
        currentPosition = maxPosition;
      }
      prol.style.transform = `translateX(${currentPosition}px)`;
    });
});