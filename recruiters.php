<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recruiters Logos Slider</title>
  <style>
    :root {
      --item-width: 180px;
      --item-height: 90px;
      --space-between-layers: 20px; /* Added space between layers */
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: #f0f0f0;
      font-family: sans-serif;
    }

    .slider-container {
      overflow: hidden;
      width: 100%;
      background: white;
      padding: 20px 0;
      margin-bottom: var(--space-between-layers); /* Added space between layers */
    }

    .slider-track,
    .slider-track-bottom {
      display: flex;
      flex-wrap: nowrap;
      animation: slide 20s linear infinite;
      margin-bottom: var(--space-between-layers); /* Added space between layers */
    }

    .slider-track-bottom {
      animation-direction: reverse;
    }

    .slider-item {
      flex: 0 0 auto;
      width: var(--item-width);
      height: var(--item-height);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px;
    }

    .slider-item img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      transition: transform 0.3s ease;
    }

    .slider-item img:hover {
      animation: repeat 0.3s ease infinite;
    }

    @keyframes repeat {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }

    @keyframes slide {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    .slider-top,
    .slider-bottom {
      position: relative;
      top: 0;
      margin-bottom: var(--space-between-layers); /* Added space between layers */
      overflow: hidden;
    }

    .top h1, .top h4 {
      text-align: center;
      color: #224e91;
      margin: 0 1rem;
    }

    .top h1 {
      font-weight: bold;
      font-size: 2rem;
    }

    .top h4 {
      font-weight: normal;
      font-size: 1rem;
      margin-top: 10px;
      line-height: 1.5;
    }

    /* Media Queries */
    @media (max-width: 1024px) {
      :root {
        --item-width: 150px;
        --item-height: 80px;
        --space-between-layers: 15px; /* Adjusted space between layers for smaller screens */
      }

      .top h1 {
        font-size: 1.75rem;
      }

      .top h4 {
        font-size: 0.95rem;
      }
    }

    @media (max-width: 768px) {
      :root {
        --item-width: 130px;
        --item-height: 70px;
        --space-between-layers: 10px; /* Adjusted space between layers for smaller screens */
      }

      .top h1 {
        font-size: 1.5rem;
      }

      .top h4 {
        font-size: 0.9rem;
      }
    }

    @media (max-width: 480px) {
      :root {
        --item-width: 100px;
        --item-height: 60px;
        --space-between-layers: 5px; /* Adjusted space between layers for smaller screens */
      }

      .top h1 {
        font-size: 1.25rem;
      }

      .top h4 {
        font-size: 0.85rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="top mx-auto text-center mb-5">
      
      <h1 id="recruiters" class="section-title px-3 text-primary text-center">Recruiters at CT Group</h1>
      <h4 class="fw-bolder fs-5">We'll help you get hired. Our team will work with you throughout the program and after graduation to help you embellish your portfolio, practice interviewing, and land a job that enhances your skills and accelerates your growth.</h4>
    </div>

    <!-- Top Slider -->
    <div class="slider-top">
      <div class="slider-track">
        <!-- Repeat your logos -->
        <div class="slider-item"><img src="images/recruiters/f1.png" alt="Indeed"></div>
        <div class="slider-item"><img src="images/recruiters/f2.png" alt="LinkedIn"></div>
        <div class="slider-item"><img src="images/recruiters/f3.png" alt="Glassdoor"></div>
        <div class="slider-item"><img src="images/recruiters/f4.png" alt="Monster"></div>
        <div class="slider-item"><img src="images/recruiters/f5.png" alt="ZipRecruiter"></div>
        <div class="slider-item"><img src="images/recruiters/f6.png" alt="Upwork"></div>
        <div class="slider-item"><img src="images/recruiters/f7.png" alt="Freelancer"></div>
        <div class="slider-item"><img src="images/recruiters/f8.png" alt="Indeed"></div>
        <div class="slider-item"><img src="images/recruiters/f9.png" alt="LinkedIn"></div>
        <div class="slider-item"><img src="images/recruiters/f10.png" alt="Glassdoor"></div>
        <div class="slider-item"><img src="images/recruiters/f11.png" alt="Monster"></div>
        <div class="slider-item"><img src="images/recruiters/airtel.png" alt="Airtel"></div>
        <div class="slider-item"><img src="images/recruiters/f13.png" alt="Upwork"></div>
        <div class="slider-item"><img src="images/recruiters/coca-cola.png" alt="Coca Cola"></div>
      </div>
    </div>

    <!-- Bottom Slider -->
    <div class="slider-bottom">
      <div class="slider-track-bottom">
        <!-- Same logos duplicated -->
        <div class="slider-item"><img src="images/recruiters/r1r.png" alt="Indeed"></div>
        <div class="slider-item"><img src="images/recruiters/r2.png" alt="LinkedIn"></div>
        <div class="slider-item"><img src="images/recruiters/r3.png" alt="Glassdoor"></div>
        <div class="slider-item"><img src="images/recruiters/r4.png" alt="Monster"></div>
        <div class="slider-item"><img src="images/recruiters/r5.png" alt="ZipRecruiter"></div>
        <div class="slider-item"><img src="images/recruiters/r6.png" alt="Upwork"></div>
        <div class="slider-item"><img src="images/recruiters/r7.png" alt="Freelancer"></div>
        <div class="slider-item"><img src="images/recruiters/r8.png" alt="Indeed"></div>
        <div class="slider-item"><img src="images/recruiters/r9.png" alt="LinkedIn"></div>
        <div class="slider-item"><img src="images/recruiters/r10.png" alt="Glassdoor"></div>
        <div class="slider-item"><img src="images/recruiters/f11.png" alt="Monster"></div>
        <div class="slider-item"><img src="images/recruiters/airtel.png" alt="Airtel"></div>
        <div class="slider-item"><img src="images/recruiters/r4.png" alt="Upwork"></div>
        <div class="slider-item"><img src="images/recruiters/coca-cola.png" alt="Coca Cola"></div>
      </div>
    </div>
  </div>
</body>
</html>
