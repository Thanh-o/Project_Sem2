document.addEventListener('DOMContentLoaded', () => {
  const div37 = document.querySelector('.div-37');
  const div30 = document.querySelector('.div-30');
  const left = document.querySelector('.left');
  const right = document.querySelector('.right');
  const elementWidth = 300; 
  const maxPosition = -(div37.scrollWidth - div30.clientWidth);
  let currentPosition = 0;

  left.addEventListener('click', () => {
    currentPosition += elementWidth;
    if (currentPosition > 0) {
      currentPosition = 0;
    }
    div37.style.transform = `translateX(${currentPosition}px)`;
  });

  right.addEventListener('click', () => {
    currentPosition -= elementWidth;
    if (currentPosition < maxPosition) {
      currentPosition = maxPosition;
    }
    div37.style.transform = `translateX(${currentPosition}px)`;
  });
});

document.addEventListener('DOMContentLoaded', () => {
    const build = document.querySelector('.build');
    const buildDiv = document.querySelector('.builddiv');
    const arrowLeft = document.querySelector('.arrow-left');
    const arrowRight = document.querySelector('.arrow-right');
    const elementWidth = 200; 
    const maxPosition = -(build.scrollWidth - buildDiv.clientWidth);
    let currentPosition = 0;
  
    arrowLeft.addEventListener('click', () => {
      currentPosition += elementWidth;
      if (currentPosition > 0) {
        currentPosition = 0;
      }
      build.style.transform = `translateX(${currentPosition}px)`;
    });
  
    arrowRight.addEventListener('click', () => {
      currentPosition -= elementWidth;
      if (currentPosition < maxPosition) {
        currentPosition = maxPosition;
      }
      build.style.transform = `translateX(${currentPosition}px)`;
    });
});

document.addEventListener('DOMContentLoaded', () => {
  const desktops = document.querySelector('.desktops');
  const desktopsDiv = document.querySelector('.desktops-div');
  const left2 = document.querySelector('.left2');
  const right2 = document.querySelector('.right2');
  const elementWidth = 200; 
  const maxPosition = -(desktops.scrollWidth - desktopsDiv.clientWidth);
  let currentPosition = 0;

  left2.addEventListener('click', () => {
    currentPosition += elementWidth;
    if (currentPosition > 0) {
      currentPosition = 0;
    }
    desktops.style.transform = `translateX(${currentPosition}px)`;
  });

  right2.addEventListener('click', () => {
    currentPosition -= elementWidth;
    if (currentPosition < maxPosition) {
      currentPosition = maxPosition;
    }
    desktops.style.transform = `translateX(${currentPosition}px)`;
  });
});
  
document.addEventListener('DOMContentLoaded', () => {
  const monitors = document.querySelector('.monitors');
  const gaming = document.querySelector('.gaming');
  const left3 = document.querySelector('.left3');
  const right3 = document.querySelector('.right3');
  const elementWidth = 200; 
  const maxPosition = -(monitors.scrollWidth - gaming.clientWidth);
  let currentPosition = 0;

  left3.addEventListener('click', () => {
    currentPosition += elementWidth;
    if (currentPosition > 0) {
      currentPosition = 0;
    }
    monitors.style.transform = `translateX(${currentPosition}px)`;
  });

  right3.addEventListener('click', () => {
    currentPosition -= elementWidth;
    if (currentPosition < maxPosition) {
      currentPosition = maxPosition;
    }
    monitors.style.transform = `translateX(${currentPosition}px)`;
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const laptop = document.querySelector('.laptop');
  const laptopDiv = document.querySelector('.laptop-div');
  const left4 = document.querySelector('.left4');
  const right4 = document.querySelector('.right4');
  const elementWidth = 200; 
  const maxPosition = -(laptop.scrollWidth - laptopDiv.clientWidth);
  let currentPosition = 0;

  left4.addEventListener('click', () => {
    currentPosition += elementWidth;
    if (currentPosition > 0) {
      currentPosition = 0;
    }
    laptop.style.transform = `translateX(${currentPosition}px)`;
  });

  right4.addEventListener('click', () => {
    currentPosition -= elementWidth;
    if (currentPosition < maxPosition) {
      currentPosition = maxPosition;
    }
    laptop.style.transform = `translateX(${currentPosition}px)`;
  });
});

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
  