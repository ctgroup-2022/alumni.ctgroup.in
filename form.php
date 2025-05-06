<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CT Alumni Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-blue-300 min-h-screen flex items-center justify-center p-4">
  <div class="bg-white shadow-2xl rounded-2xl w-full max-w-lg p-8 space-y-6">
    <h2 class="text-3xl font-bold text-center text-blue-700" style="color: #13357B;">CT Alumni Registration</h2>
    <form action="/register" method="POST" class="space-y-5">
      
      <!-- Full Name -->
      <div>
        <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" required
          class="w-full mt-1 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- Passout Year -->
      <div>
        <label for="year" class="block text-sm font-semibold text-gray-700">Passout Year</label>
        <select id="year" name="year" required
          class="w-full mt-1 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-#13357B-500">
          <option value="">Select Year</option>
          <!-- You can dynamically generate these in backend -->
          <option>2025</option>
          <option>2024</option>
          <option>2023</option>
          <option>2022</option>
          <option>2021</option>
          <option>2020</option>
          <option>2019</option>
          <option>2018</option>
          <option>2017</option>
          <option>2016</option>
          <option>2015</option>
          <option>2014</option>
          <option>2013</option>
          <option>2012</option>
          <option>2011</option>
          <option>2010</option>
          <option>2009</option>
          <option>2008</option>
          <option>2007</option>
          <option>2006</option>
          <option>2005</option>
          <option>2004</option>
          <option>2003</option>
          <option>2002</option>
          <option>2001</option>
          <option>2000</option>
          
        </select>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full mt-1 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>

      <!-- WhatsApp Number -->
      <div>
        <label for="whatsapp" class="block text-sm font-semibold text-gray-700">WhatsApp Number</label>
        <input type="tel" id="whatsapp" name="whatsapp" required pattern="[0-9]{10}" placeholder=""
          class="w-full mt-1 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>
<!--contact number-->
      <div>
        <label for="contact" class="block text-sm font-semibold text-gray-700">Contact Number</label>
        <input type="tel" id="contact" name="contact" required pattern="[0-9]{10}" placeholder=""
          class="w-full mt-1 px-4 py-2 border rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
      </div>
      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit"
          class="w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition-all" style="background-color: #13357B;">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
