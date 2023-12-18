<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <title>Gadgets90</title>
  <style>
    .login-signup-container {
      display: flex;
      flex-direction: row;
      align-items: center;
    }
  </style>
</head>

<body>
  <!-- navbar goes here -->
  <nav class="bg-gray-500">
    <div class="max-w-6xl mx-auto px-4">
      <div class="flex justify-between">

        <div class="flex space-x-4">
          <!-- logo -->
          <div>
            <a href="http://localhost/Gadgets90/" class="flex items-center py-5 px-2 text-white text-2xl font-semibold italic">
              Gadgets<span class="text-amber-500">90</span>
            </a>
          </div>

          <!-- primary nav -->
          <div class="hidden md:flex items-center space-x-1">
            <a class="py-5 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/mobiles.php">Mobiles</a>
            <a class="py-5 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/laptops.php">Laptops</a>
            <a class="py-5 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/televisions.php">Televisions</a>
            <a class="py-5 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/smart watches.php">Smart Watches</a>
            <a class="py-5 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/headsets.php">Headsets</a>
          </div>
        </div>

        <!-- secondary nav -->
        <div class="hidden md:flex items-center space-x-1">
          <?php
          if (isset($_SESSION['auth'])) {
          ?>
            <!-- component -->
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
            <div class=" bg-gray-200 flex justify-center items-center dark:bg-gray-500">
              <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 w-64  shadow flex justify-center items-center">
                <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex justify-center items-center space-x-3 cursor-pointer">
                    <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                      <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="font-semibold dark:text-white text-gray-900 text-lg">
                      <div class="cursor-pointer"><?= $_SESSION['auth_user']['name']?></div>
                    </div>
                  </div>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                    <ul class="space-y-3 dark:text-white">
                      <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                          </div>
                          Account
                        </a>
                      </li>
                      <hr class="dark:border-gray-700">
                      <li class="font-medium">
                        <a href="logout.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                          <div class="mr-3 text-red-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                          </div>
                          Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php
          } else {
          ?>
          <a href="http://localhost/Gadgets90/user/login.php" class="py-2 px-3 text-yellow-300 bg-green-600 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white border border-blue-500 hover:border-transparent rounded">Login</a>
          <a href="http://localhost/Gadgets90/user/signup.php" class="py-2 px-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
        <?php }?>
        </div>

        <!-- mobile button goes here -->
        <div class="md:hidden flex items-center">
          <button id="toggleSidebarMobile" class="mobile-menu-button">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <?php
          if (isset($_SESSION['auth'])) {
          ?>
            <!-- component -->
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
            <div class=" bg-gray-200 flex justify-center items-center dark:bg-gray-500">
              <div x-data="{ open: false }" class="bg-white dark:bg-gray-800 w-64  shadow flex justify-center items-center">
                <div @click="open = !open" class="relative border-b-4 border-transparent py-3" :class="{'border-indigo-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
                  <div class="flex justify-center items-center space-x-3 cursor-pointer">
                    <div class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                      <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="w-full h-full object-cover">
                    </div>
                    <div class="font-semibold dark:text-white text-gray-900 text-lg">
                      <div class="cursor-pointer"><?= $_SESSION['auth_user']['name']?></div>
                    </div>
                  </div>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                    <ul class="space-y-3 dark:text-white">
                      <li class="font-medium">
                        <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                          <div class="mr-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                          </div>
                          Account
                        </a>
                      </li>
                      <hr class="dark:border-gray-700">
                      <li class="font-medium">
                        <a href="logout.php" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                          <div class="mr-3 text-red-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                          </div>
                          Logout
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
      else{
        ?>
      <div class="login-signup-container flex space-x-4 py-2 px-6">
        <a href="http://localhost/Gadgets90/user/login.php" class="py-2 px-3 w-20 inline-block text-center text-yellow-300 bg-green-600 hover:bg-blue-500 hover:text-white border border-transparent rounded">Login</a>
        <a href="http://localhost/Gadgets90/user/signup.php" class="py-2 px-3 w-20 inline-block text-center bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transition duration-300">Signup</a>
      </div>
      <?php }?>
        </div>
      </div>
    </div>
    <!-- mobile menu -->
    <div class="mobile-menu hidden md:hidden">
      <a class="block py-2 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/mobiles.php">Mobiles</a>
      <a class="block py-2 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/laptops.php">Laptops</a>
      <a class="block py-2 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/televisions.php">Televisions</a>
      <a class="block py-2 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/smart watches.php">Smart Watches</a>
      <a class="block py-2 px-6 text-white hover:underline underline-offset-8" href="http://localhost/Gadgets90/headsets.php">Headsets</a>
      <form class="block py-2 px-4" action="">
        <input class="w-72 py-1 pl-3 pr-10 rounded-full focus:outline-0" type="text" placeholder="Search.." name="search">
        <button class="-ml-8 border-6 bg-trasparent" type="submit"><i class="fa fa-search text-gray-400"></i></button>
      </form>
      
    </div>
  </nav>
  <script>
    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
    //toggle functionality for menu
    // add event listeners
    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
    // toggle functionality for hambuger & close icons
    var toggleSidebarMobile = function toggleSidebarMobile(toggleSidebarMobileHamburger, toggleSidebarMobileClose) {
      toggleSidebarMobileHamburger.classList.toggle('hidden');
      toggleSidebarMobileClose.classList.toggle('hidden');
    };
    var toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
    var toggleSidebarMobileHamburger = document.getElementById('toggleSidebarMobileHamburger');
    var toggleSidebarMobileClose = document.getElementById('toggleSidebarMobileClose');
    toggleSidebarMobileEl.addEventListener('click', function() {
      toggleSidebarMobile(toggleSidebarMobileHamburger, toggleSidebarMobileClose);
    });
  </script>
  <div class="w-full text-2xl items-center px-5 py-24 mx-auto flex flex-wrap" style="background:lightgrey">
    Your ad here
  </div>