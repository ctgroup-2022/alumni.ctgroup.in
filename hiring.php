
  <style>
    .carousel-wrapper {
      position: relative;
    }

    .carousel-container {
      display: flex;
      overflow-x: auto;
      scroll-behavior: smooth;
      gap: 20px;
      padding: 20px 0;
    }

    .carousel-container::-webkit-scrollbar {
      display: none;
    }

    .hiring-card {
      flex: 0 0 auto;
      width: 100%;
      max-width: 300px;
      height: 300px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    .hiring-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .hiring-card:hover img {
      transform: scale(1.05);
    }

    .carousel-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.6);
      border: none;
      color: white;
      padding: 18px;
      z-index: 10;
      border-radius: 50%;
    }

    .carousel-button.left {
      left: -20px;
    }

    .carousel-button.right {
      right: -20px;
    }

    @media (max-width: 768px) {
      .hiring-card {
        max-width: 80%;
        height: 200px;
      }

      .carousel-button {
        padding: 8px;
      }
    }
    @media (max-width: 768px) {
  .carousel-button {
    width: 32px;
    height: 32px;
    line-height: 32px;
    font-size: 18px;
  }
}

  </style>
</head>
<body>
  <div class="container py-5">
    <div class="text-center mb-5">
      <h1 class="section-title">JOB OPPORTUNITIES</h1>
    </div>

    <div class="carousel-wrapper position-relative">
      <button class="carousel-button left" onclick="slideCarousel('left')">
        ‹
      </button>
      <div class="carousel-container" id="carousel">
        <div class="hiring-card">
          <img src="images/job_opp/job.jpg" alt="Card 1" />
        </div>
        <div class="hiring-card">
          <img src="images/job_opp/job2.jpeg" alt="Card 2" />
        </div>
        <div class="hiring-card">
          <img src="images/job_opp/job3.jpeg" alt="Card 3" />
        </div>
        <div class="hiring-card">
          <img src="images/job_opp/job4.jpeg" alt="Card 4" />
        </div>
        <div class="hiring-card">
          <img src="images/job_opp/job5.jpeg" alt="Card 5" />
        </div>
        <div class="hiring-card">
          <img src="images/job_opp/job6.jpeg" alt="Card 5" />
        </div>
      </div>
      <button class="carousel-button right" onclick="slideCarousel('right')">
        ›
      </button>
    </div>
  </div>

  <script>
    function slideCarousel(direction) {
      const container = document.getElementById("carousel");
      const scrollAmount = container.offsetWidth * 0.8; // 80% of visible width

      if (direction === "left") {
        container.scrollBy({ left: -scrollAmount, behavior: "smooth" });
      } else {
        container.scrollBy({ left: scrollAmount, behavior: "smooth" });
      }
    }
  </script>

 
</body>
</html>
