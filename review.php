
<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f9f9f9;
  }

  .testimonial-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #002244;
    color: white;
    padding: 20px 10px;
    overflow: hidden;
    width: 100%;
  }

  .testimonial-header {
    width: 100%;
    max-width: 800px;
    text-align: center;
    margin-bottom: 20px;
    padding: 0 15px;
  }

  .testimonial-header h2 {
    font-size: clamp(20px, 5vw, 24px);
    margin-bottom: 10px;
  }

  .testimonial-header p {
    font-size: clamp(13px, 4vw, 15px);
    line-height: 1.5;
  }

  .testimonial-slider {
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    position: relative;
    padding: 0 10px;
  }

  .testimonial-track {
    display: flex;
    gap: 15px;
    animation: scrollRightToLeft 60s linear infinite;
    padding: 10px 0;
  }

  .testimonial-track:hover {
    animation-play-state: paused;
  }

  @keyframes scrollRightToLeft {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .testimonial-card {
    background: white;
    color: #333;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 280px;
    min-width: 280px;
    aspect-ratio: auto;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px;
    box-sizing: border-box;
    text-align: center;
  }

  .testimonial-card img {
    width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
  }

  .testimonial-quote {
    font-size: 20px;
    color: #007acc;
    margin-bottom: 5px;
  }

  .testimonial-text {
    font-size: clamp(12px, 3.5vw, 14px);
    margin: 8px 0;
    line-height: 1.4;
    color: #444;
  }

  .testimonial-name {
    font-weight: bold;
    font-size: clamp(13px, 3.5vw, 15px);
  }

  .testimonial-role {
    font-size: clamp(11px, 3vw, 13px);
    color: #777;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .testimonial-card {
      width: 240px;
      min-width: 240px;
      padding: 12px;
    }
    
    .testimonial-track {
      gap: 12px;
    }
    
    .testimonial-section {
      padding: 15px 5px;
    }
  }

  @media (max-width: 480px) {
    .testimonial-card {
      width: 200px;
      min-width: 200px;
      padding: 10px;
    }
    
    .testimonial-track {
      gap: 10px;
    }
    
    .testimonial-card img {
      width: 60px;
      height: 60px;
    }
  }

  /* Touch device optimization */
  @media (hover: none) {
    .testimonial-track {
      touch-action: pan-x;
      -webkit-overflow-scrolling: touch;
    }
  }
  .testimonial-controls {
  display: flex;
  justify-content: space-between;
  width: 100%;
  max-width: 1000px;
  margin-top: 10px;
  position: relative;
  z-index: 2;
}

.arrow-btn {
  background-color: rgba(255, 255, 255, 0.8);
  border: none;
  color: #002244;
  font-size: 24px;
  padding: 10px 15px;
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s;
}

.arrow-btn:hover {
  background-color: #007acc;
  color: white;
}
@keyframes scrollRightToLeft {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}

</style>

</head>
<body>

<section class="testimonial-section">
  <div class="testimonial-header">
    <h2 class="text-light">What Students Say About CT Group</h2>
    <p>Discover real experiences from our students — their journey, growth, and success at CT Group.</p>
  </div>

  <div class="testimonial-slider">
    <div class="testimonial-track">
      <!-- Duplicate testimonials for seamless scroll -->
      <!-- Start of one full loop -->
      <div class="testimonial-card">
        <img src="images/testimonials/t1.png" alt="Reatshu">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">CTGI's Campus Placement Cell (CCPC) is highly dynamic.</p>
        <div class="testimonial-name">Reatshu</div>
        
        <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t2.png" alt="Palak">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">EDP has enriched my understanding and confidence.</p>
        <div class="testimonial-name">Palak Verma</div>
        
        <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t3.png" alt="Vinshika">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">On-campus interviews and job fairs stand out at CT.</p>
        <div class="testimonial-name">Vinshika Sood</div>
        
        <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t4.png" alt="Ankita">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">Amazing job fair opportunities tailored to our skills.</p>
        <div class="testimonial-name">Ankita</div>
        
        <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t5.jpg" alt="Aanchal">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">A perfect blend of learning and fun at CT Group!</p>
          <div class="testimonial-name">Aanchal</div> 
          
        <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t6.jpg" alt="Yogesh">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">The best place to shape a bright future.</p>
        <div class="testimonial-name">Yogesh Sharma</div>
       
        <div class="testimonial-role fw-bold">Faculty</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t8.png" alt="Ajay">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">My experience with CT Group has been beyond expectations.</p>
        <div class="testimonial-name">Ar. Ajay Kumar</div>
                <div class="testimonial-role fw-bold">Student</div>
      </div>

      <div class="testimonial-card">
        <img src="images/testimonials/t9.jpg" alt="Abhinav">
        <div class="testimonial-quote">"</div>
        <p class="testimonial-text">A vibrant academic environment fostering excellence.</p>
        <div class="testimonial-name">Mr. Abhinav Anand</div>
      
        <div class="testimonial-role fw-bold">Faculty</div>
      </div>
      <!-- End of one full loop -->
<!-- Duplicate of full testimonial set -->
<div class="testimonial-card">...</div>


</section>

</body>
<script>
  const track = document.querySelector('.testimonial-track');

function scrollTestimonials(direction) {
  const scrollAmount = 300;
  track.style.animation = 'none'; // Stop current animation

  const currentTransform = getComputedStyle(track).transform;
  let matrix = new DOMMatrix(currentTransform);
  let currentX = matrix.m41;

  if (direction === 'left') {
    track.style.transform = `translateX(${currentX + scrollAmount}px)`;
  } else {
    track.style.transform = `translateX(${currentX - scrollAmount}px)`;
  }

  // Restart animation after brief delay
  setTimeout(() => {
    track.style.animation = '';
  }, 100); // Adjust delay if needed
}

  </script>
