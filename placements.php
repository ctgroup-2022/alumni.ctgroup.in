<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seamless Auto Image Slider</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f0f0f0;
    }

    .placement-slider-container {
      width: 100%;
      margin: 50px auto;
      overflow: hidden;
      position: relative;
    }

    .placement-slider {
      display: flex;
      transition: transform 0.5s linear;
    }

    .placement-card {
      min-width: 300px;
      margin: 10px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .placement-card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      transition: transform 0.4s ease, filter 0.4s ease;
      cursor: pointer;
    }

    .placement-card:hover img {
      transform: scale(1.05);
      filter: brightness(90%);
    }

    /* Lightbox Styles */
    .placement-lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.9);
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .placement-lightbox img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div id="placements" class="placement-slider-container text-center">
  <h1 class="section-title px-3  text-center" style="color: #13357B;">Placements</h1>
               
    <div class="placement-slider" id="placement-slider">
      <!-- Cards -->
      <div class="placement-card"><img src="images/placements/plc1.jpg" alt="Image 1"></div>
      <div class="placement-card"><img src="images/placements/plc2.jpg" alt="Image 2"></div>
      <div class="placement-card"><img src="images/placements/plc3.jpg" alt="Image 3"></div>
      <div class="placement-card"><img src="images/placements/plc4.jpg" alt="Image 4"></div>
      <div class="placement-card"><img src="images/placements/plc5.jpg" alt="Image 5"></div>
      <div class="placement-card"><img src="images/placements/plc6.jpg" alt="Image 6"></div>
      <div class="placement-card"><img src="images/placements/plc7.jpg" alt="Image 7"></div>
      <div class="placement-card"><img src="images/placements/plc8.jpg" alt="Image 8"></div>
      <div class="placement-card"><img src="images/placements/plc9.jpg" alt="Image 9"></div>
      <div class="placement-card"><img src="images/placements/plc10.jpg" alt="Image 10"></div>
      <div class="placement-card"><img src="images/placements/placement1.jpg" alt="Image 12"></div>
      <div class="placement-card"><img src="images/placements/placement2.jpg" alt="Image 13"></div>
    </div>
  </div>
</div>

<!-- Lightbox Modal -->
<div class="placement-lightbox" id="placement-lightbox">
  <img src="" alt="Full Image" id="placement-lightbox-img">
</div>

<script>
  const slider = document.getElementById('placement-slider');
  const cards = document.querySelectorAll('.placement-card');
  const cardWidth = cards[0].offsetWidth + 20;
  const visibleCards = Math.floor(slider.parentElement.offsetWidth / cardWidth);
  let position = 0;

  // Clone first few cards to create the loop
  for (let i = 0; i < visibleCards; i++) {
    const clone = cards[i].cloneNode(true);
    slider.appendChild(clone);
  }

  function autoSlide() {
    position += 0.5;
    slider.style.transform = `translateX(-${position}px)`;

    if (position >= cardWidth * (cards.length)) {
      slider.style.transition = 'none';
      position = 0;
      slider.style.transform = `translateX(0px)`;
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          slider.style.transition = 'transform 0.5s linear';
        });
      });
    }
  }

  setInterval(autoSlide, 10);

  // Lightbox Functionality
  const lightbox = document.getElementById('placement-lightbox');
  const lightboxImg = document.getElementById('placement-lightbox-img');
  const allImages = document.querySelectorAll('.placement-card img');

  allImages.forEach(img => {
    img.addEventListener('click', () => {
      lightboxImg.src = img.src;
      lightbox.style.display = 'flex';
    });
  });

  lightbox.addEventListener('click', () => {
    lightbox.style.display = 'none';
    lightboxImg.src = '';
  });
</script>


</body>
</html>
