<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form with Images</title>
  <link rel="stylesheet" href="styles.css">
  
  <style>
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background-color: #f9f9f9;
  padding: 20px;
}

.container {
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  justify-content: center;
  align-items: flex-start;
}

.contact-form, .image-section {
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  flex: 1 1 300px;
  max-width: 500px;
}

.contact-form h2 {
  margin-bottom: 20px;
  color: #333;
}

.contact-form form label {
  display: block;
  margin-top: 15px;
  color: #555;
}

.contact-form form input,
.contact-form form textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

.contact-form form button {
  margin-top: 20px;
  padding: 12px 20px;
  background-color: #0077ff;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.contact-form form button:hover {
  background-color: #005fcc;
}

.image-section {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.image-section img {
  width: 100%;
  border-radius: 10px;
  object-fit: cover;
}

    </style>
</head>
<body>
  <div class="container-fluid">
    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Contact Us</h2>
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>

    <!-- Image Section -->
    
  </div>
</body>
</html>
