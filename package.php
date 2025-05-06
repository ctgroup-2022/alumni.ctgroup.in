
<body>

 <!-- Testimonials Section -->
<section class="py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-10">What Our Students Say</h2>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Testimonial Card 1 -->
        <div class="swiper-slide flex justify-center">
          <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col justify-between max-w-sm w-full">
            <p class="text-gray-600 mb-6">
              "CT Group gave me the platform to achieve success in life. "
            </p>
            <div class="flex items-center">
              <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Student 1">
              <div>
                <h4 class="font-bold text-gray-800">Rahul Sharma</h4>
                <span class="text-sm text-gray-500">B.Tech, 2022</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="swiper-slide flex justify-center">
          <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col justify-between max-w-sm w-full">
            <p class="text-gray-600 mb-6">
              "A beautiful campus, amazing teachers, and endless learning opportunities!"
            </p>
            <div class="flex items-center">
              <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Student 2">
              <div>
                <h4 class="font-bold text-gray-800">Simran Kaur</h4>
                <span class="text-sm text-gray-500">MBA, 2023</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="swiper-slide flex justify-center">
          <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col justify-between max-w-sm w-full">
            <p class="text-gray-600 mb-6">
              "Best memories of my life! CT Group helped me build a bright career."
            </p>
            <div class="flex items-center">
              <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/45.jpg" alt="Student 3">
              <div>
                <h4 class="font-bold text-gray-800">Arjun Verma</h4>
                <span class="text-sm text-gray-500">BBA, 2021</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial Card 4 -->
        <div class="swiper-slide flex justify-center">
          <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col justify-between max-w-sm w-full">
            <p class="text-gray-600 mb-6">
              "The faculty here really cares about students' growth. Proud to be an alumnus."
            </p>
            <div class="flex items-center">
              <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/52.jpg" alt="Student 4">
              <div>
                <h4 class="font-bold text-gray-800">Priya Mehta</h4>
                <span class="text-sm text-gray-500">MCA, 2020</span>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Swiper Pagination -->
      <div class="swiper-pagination mt-6"></div>
    </div>

  </div>
</section>


  <!-- Swiper.js Script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Swiper Initialize -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

</body>

