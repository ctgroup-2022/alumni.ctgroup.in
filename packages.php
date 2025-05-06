<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Packages Slider</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      
    }

    .packages-card {
      background-color: #13357B;
      border-radius: 16px;
      padding: 25px;
      color: #fff;
      text-align: center;
      min-height: 200px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .packages-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(255, 255, 255, 0.1);
    }

    .packages-card p {
      font-size: 16px;
      font-style: italic;
      margin-bottom: 10px;
    }

    .packages-card h4 {
      font-size: 18px;
      margin-bottom: 5px;
      color: #fff;
    }

    .packages-card h5 {
      font-size: 14px;
      color: aliceblue;
    }

    .packages-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid aliceblue;
      margin: 0 auto 15px;
      aspect-ratio: 1 / 1;
    }

    .packages-title {
      color: #fff;
      text-align: center;
      margin-bottom: 40px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container py-5">
  <h2 class="packages-title  fw-bolder" style="color: #13357B;">PACKAGES</h2>

  <div id="packagesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">

      <!-- Example Slide Start -->
      <div class="carousel-item active">
        <div class="row gx-4">
          <div class="col-md-4">
            <div class="packages-card">
              <img src="images/Aastha Dhir (1).jpeg" class="packages-img" alt="Aastha Dhir" />
              <p>"Regular Student with Part time job at Airport"</p>
              <h4>18 Thousand Dollars</h4>
              <h5>— AASTHA DHIR</h5>
            </div>
          </div>
          <div class="col-md-4 d-none d-md-block">
            <div class="packages-card">
              <img src="images/IMG_0513 - Rajwinder Kaur.jpeg" class="packages-img" alt="RAJWINDER KAUR" />
              <p>"America"</p>
              <h4>85000</h4>
              <h5>— RAJWINDER KAUR</h5>
            </div>
          </div>
          <div class="col-md-4 d-none d-lg-block">
            <div class="packages-card">
              <img src="images/IMG_20231101_182609 - Mandeep Kaur.jpg" class="packages-img" alt="MANDEEP KAUR" />
              <p>"Future infotech"</p>
              <h4>32 LPA</h4>
              <h5>— MANDEEP KAUR</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- Example Slide End -->

    <!-- SLIDE 2 -->
<div class="carousel-item">
  <div class="row gx-4">
    <div class="col-md-4">
      <div class="packages-card">
        <img src="images/IMG_20240125_133718 - Suraj mehmi.jpg" class="packages-img" alt="SURAJ MEHMI" />
        <p>"UK"</p>
        <h4>34 Lac</h4>
        <h5>— SURAJ MEHMI</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <div class="packages-card">
        <img src="images/IMG_20240126_193149 - Raju kumar.jpg" class="packages-img" alt="RAJU KUMAR" />
        <p>"AI Engineer"</p>
        <h4>10.35 Lac</h4>
        <h5>— RAJU KUMAR</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-lg-block">
      <div class="packages-card">
        <img src="images/IMG_20240129_154850 - Yogesh Sharma.jpg" class="packages-img" alt="YOGESH SHARMA" />
        <p>"MANKIND PHARMA LTD"</p>
        <h4>10000000</h4>
        <h5>— YOGESH SHARMA</h5>
      </div>
    </div>
  </div>
</div>

<!-- SLIDE 3 -->
<div class="carousel-item">
  <div class="row gx-4">
    <div class="col-md-4">
      <div class="packages-card">
        <img src="images/IMG_4922 - Manpreet Singh.jpeg" class="packages-img" alt="MANPREET SINGH" />
        <p>"Sunrise farm"</p>
        <h4>26 Lac</h4>
        <h5>— MANPREET SINGH</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <div class="packages-card">
        <img src="images/atmesh_banking_img - Atmesh Jha.jpg" class="packages-img" alt="ATMESH KUMAR JHA" />
        <p>"Software Developer, JP Morgan Chase & Co."</p>
        <h4>12.5 Lac</h4>
        <h5>— ATMESH KUMAR JHA</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-lg-block">
      <div class="packages-card">
        <img src="images/IMG-20240130-WA0000 - Gaurav Narula.jpg" class="packages-img" alt="GAURAV NARULA" />
        <p>"Owner of SRM pharmaceutical"</p>
        <h4>$150,000 CAD</h4>
        <h5>— GAURAV NARULA</h5>
      </div>
    </div>
  </div>
</div>

<!-- SLIDE 4 -->
<div class="carousel-item">
  <div class="row gx-4">
    <div class="col-md-4">
      <div class="packages-card">
        <img src="images/1000067978 - Vikas Duvedi.jpg" class="packages-img" alt="VIKAS DUVEDI" />
        <p>"Data Engineer"</p>
        <h4>12 Lac</h4>
        <h5>— VIKAS DUVEDI</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <div class="packages-card">
        <img src="images/HR--_DSC2619_1 4MB square (Large) - Ramneek Singh Kumar.jpg" class="packages-img" alt="RAMNEEK SINGH KUMAR" />
        <p>"Faculty at University Canada West"</p>
        <h4>$67000 CAD</h4>
        <h5>— RAMNEEK SINGH KUMAR</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-lg-block">
      <div class="packages-card">
        <img src="images/Screenshot 2025-04-29 135101.png" class="packages-img" alt="AMANDEEP SINGH" />
        <p>"Manager"</p>
        <h4>1000000</h4>
        <h5>— AMANDEEP SINGH</h5>
      </div>
    </div>
  </div>
</div>

<!-- SLIDE 5 -->
<div class="carousel-item">
  <div class="row gx-4">
    <div class="col-md-4">
      <div class="packages-card">
        <img src="images/IMG_20221208_162112 - Mithilesh Kumar.jpg" class="packages-img" alt="MITHILESH KUMAR" />
        <p>"Zonal Manager at Stellapps Technologies Pvt Ltd"</p>
        <h4>2100000</h4>
        <h5>— MITHILESH KUMAR</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <div class="packages-card">
        <img src="images/IMG_20190728_115329_522 - Harsh Punj.jpg" class="packages-img" alt="HARSH PUNJ" />
        <p>"Consultant"</p>
        <h4>25000£</h4>
        <h5>— HARSH PUNJ</h5>
      </div>
    </div>
    <div class="col-md-4 d-none d-lg-block">
      <div class="packages-card">
        <img src="images/IMG_9387 - JANVEE NAHAR.jpeg" class="packages-img" alt="JANVEE" />
        <p>"Financial Analyst, BC Housing"</p>
        <h4>$67000 CAD</h4>
        <h5>— JANVEE</h5>
      </div>
    </div>
  </div>
</div>


    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
