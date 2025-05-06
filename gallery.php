<!-- Include Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include Poppet CSS & JS (alternative to lightbox) -->
<link href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.umd.min.js"></script>

<!-- GALLERY SECTION -->
<section class="container py-5">
  <h2 class="text-center mb-4">Alumni Memories Gallery</h2>
  <div id="lightgallery" class="row g-3">
    <!-- Gallery Item -->
    <div class="col-6 col-sm-4 col-md-3 gallery-item" data-lg-size="1400-933">
      <a href="/images/coo1.jpg.JPG" class="d-block position-relative">
        <img src="images/gallery/_MG_9800IMG_8851.JPG" class="img-fluid rounded shadow-sm" alt="Alumni Event" />
        <img src="images/ALUMNI_LOGO (1).png" class="logo-overlay" alt="CT Logo" />
      </a>
    </div>
    <!-- Repeat above block for more images -->
    <!-- Example Additional Item -->
    <div class="col-6 col-sm-4 col-md-3 gallery-item" data-lg-size="1400-933">
      <a href="images/img2.jpg" class="d-block position-relative">
        <img src="images/img2.jpg" class="img-fluid rounded shadow-sm" alt="Alumni Meet" />
        <img src="images/logo.png" class="logo-overlay" alt="CT Logo" />
      </a>
    </div>
    <!-- Add more as needed -->
  </div>
</section>

<style>
  .gallery-item {
    position: relative;
    overflow: hidden;
  }

  .gallery-item img.logo-overlay {
    position: absolute;
    bottom: 8px;
    right: 8px;
    width: 50px;
    opacity: 0.8;
    transition: opacity 0.3s ease;
  }

  .gallery-item:hover img.logo-overlay {
    opacity: 1;
  }

  .gallery-item img {
    transition: transform 0.3s ease;
  }

  .gallery-item:hover img:first-child {
    transform: scale(1.05);
  }
</style>

<script>
  // Initialize lightGallery
  lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom],
    speed: 500,
    zoom: true
  });
</script>
