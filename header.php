<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Gadgets90</title>
</head>
<body>
<!-- navbar goes here -->
<nav class="bg-gray-500">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex justify-between">

      <div class="flex space-x-4">
        <!-- logo -->
        <div>
          <a href="http://localhost/Gadgets90/" class="flex items-center py-5 px-2 text-white text-2xl font-semibold italic hover:text-gray-900">
            Gadgets<span class="text-amber-500">90</span>
          </a>
        </div>

        <!-- primary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <a class="py-5 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/mobiles.php">Mobiles</a>
          <a class="py-5 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/laptops.php">Laptops</a>
          <a class="py-5 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/televisions.php">Televisions</a>
          <a class="py-5 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/smart_watches.php">Smart Watches</a>
          <a class="py-5 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/headsets.php">Headsets</a>
        </div>
      </div>

      <!-- secondary nav -->
      <div class="hidden md:flex items-center space-x-1">
        <a href="" class="py-2 px-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white border border-blue-500 hover:border-transparent rounded">Login</a>
        <a href="" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
      </div>

      <!-- mobile button goes here -->
      <div class="md:hidden flex items-center">
        <button id="toggleSidebarMobile" class="mobile-menu-button">
          <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <script>
          // sidebar functionality
          var sidebar = document.getElementById('sidebar');
  var toggleSidebarMobile = function toggleSidebarMobile(toggleSidebarMobileHamburger, toggleSidebarMobileClose) {
    toggleSidebarMobileHamburger.classList.toggle('hidden');
    toggleSidebarMobileClose.classList.toggle('hidden');
  };
  var toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
  var toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
  var toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
  toggleSidebarMobileEl.addEventListener('click', function () {
    toggleSidebarMobile(toggleSidebarMobileHamburger, toggleSidebarMobileClose);
  });
        </script>
      </div>

    </div>
  </div>
  <style>
    .login-signup-container {
  display: flex;
  flex-direction: row;
  align-items: center;
}

  </style>
  <!-- mobile menu -->
  <div class="mobile-menu hidden md:hidden">
    <a class="block py-2 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/mobiles.php">Mobiles</a>
    <a class="block py-2 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/laptops.php">Laptops</a>
    <a class="block py-2 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/televisions.php">Televisions</a>
    <a class="block py-2 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/smart_watches.php">Smart Watches</a>
    <a class="block py-2 px-3 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/headsets.php">Headsets</a>
    <form class="block py-2 px-4" action="">
        <input class="w-72 py-1 pl-3 pr-10 rounded-full focus:outline-0" type="text" placeholder="Search.." name="search">
        <button class="-ml-8 border-6 bg-trasparent" type="submit"><i class="fa fa-search text-gray-400"></i></button>
    </form>
    <div class="login-signup-container flex space-x-4 py-2 px-3">
      <a href="" class="py-2 px-3 w-20 inline-block text-center bg-blue-500 text-blue-700 text-white border border-transparent rounded">Login</a>
      <a href="" class="py-2 px-3 w-20 inline-block text-center bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
    </div>
  </div>
</nav>
<script>
    // grab everything we need
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

// add event listeners
btn.addEventListener("click", () => {
  menu.classList.toggle("hidden");
});
  </script>
    <div class="container text-2xl items-center px-5 py-24 mx-auto flex flex-wrap" style="background:lightgrey">
      Your ad here
    </div>