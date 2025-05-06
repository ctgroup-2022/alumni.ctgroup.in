<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recent Events Slider</title>
  <style>
    body {
  font-family: sans-serif;
  background-color: #f0f0f0;
}

.event-slider-container {
  width: 90%;
  max-width: 600px;
  margin: 30px auto;
  background: #13357B;
  color: white;
  border-radius: 16px;
  padding: 20px;
  text-align: center;
}

.event-slider-box {
  height: 300px;
  overflow-y: auto;
  scroll-behavior: smooth;
  border-radius: 12px;
  margin-top: 20px;
}

.event-slide {
  position: relative;
  margin-bottom: 20px;
  overflow: hidden;
  border-radius: 12px;
}

.event-slide img {
  width: 100%;
  display: block;
  border-radius: 12px;
}

.event-date-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: #137930; /* Changed from #ffca28 to #198754 */

  color: #000;
  padding: 6px 12px;
  font-weight: bold;
  border-radius: 6px;
  font-size: 14px;
}

.event-slide-caption {
  position: absolute;
  bottom: 10px;
  left: 15px;
  font-size: 18px;
  font-weight: 500;
}

.event-nav-buttons {
  margin-top: 20px;
}

.event-nav-buttons button {
  background-color: #137930; /* Changed from #ffca28 to #198754 */
  color: #000;
  border: none;
  padding: 10px 16px;
  margin: 5px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}

    </style>
</head>
<body>
  <div class="event-slider-container">
    <h2 style="color:#13357B;">Latest Upcoming Events</h2>
    <p style="color:white; font-weight:bolder;">Stay Updated with CT Group</p>
    <div class="event-slider-box" id="eventSliderBox">
      <!-- Event Slide 1 -->
      <div class="event-slide">
        <img src="images/banner2.png" alt="Event 1">
        <div class="event-date-badge">19 Mar 2025</div>
        <div class="event-slide-caption">The Grand Runway- 2025</div>
      </div>
      <!-- Event Slide 2 -->
      <div class="event-slide">
        <img src="images/culture.jpg" alt="Event 2">
        <div class="event-date-badge">10 Feb 2025</div>
        <div class="event-slide-caption">Cultural Fest - 2025</div>
      </div>
      <div class="event-slide">
        <img src="images/culture.jpg" alt="Event 2">
        <div class="event-date-badge">10 Feb 2025</div>
        <div class="event-slide-caption">Cultural Fest - 2025</div>
      </div>
      <div class="event-slide">
        <img src="images/culture.jpg" alt="Event 2">
        <div class="event-date-badge">10 Feb 2025</div>
        <div class="event-slide-caption">Cultural Fest - 2025</div>
      </div>
      <div class="event-slide">
        <img src="images/culture.jpg" alt="Event 2">
        <div class="event-date-badge">10 Feb 2025</div>
        <div class="event-slide-caption">Cultural Fest - 2025</div>
      </div>
      <div class="event-slide">
        <img src="images/culture.jpg" alt="Event 2">
        <div class="event-date-badge">10 Feb 2025</div>
        <div class="event-slide-caption">Cultural Fest - 2025</div>
      </div>
      <!-- Add more event slides as needed -->
    </div>
    <div class="event-nav-buttons">
      <button onclick="prevEventSlide()">Previous</button>
      <button onclick="nextEventSlide()">Next</button>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
