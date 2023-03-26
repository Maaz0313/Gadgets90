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
    <nav class="relative px-5 flex justify-between items-center h-14 bg-black drop-shadow-md">
        <!-- Logo -->
        <div>
            <a href="http://localhost/Gadgets90/" class="text-white text-2xl font-semibold italic">
                Gadgets<span class="text-amber-500">90</span>
            </a>
        </div>

        <!-- This div and its children show up when screen's width >= 769px (md breakpoint) -->
        <div id="main-nav"
            class="hidden absolute top-14 right-0 px-5 py-10 bg-gray-700 h-screen flex flex-col 
            md:flex md:space-y-0 md:relative md:top-0 md:right-0 md:p-0 md:flex-row md:h-full md:flex-grow md:justify-between md:items-center md:ml-10 md:bg-inherit">
            <!-- Menu Links -->
            <div
                class="order-last flex flex-col items-end text-pink-200 space-y-3  md:flex-row md:items-start md:order-first md:space-y-0 md:space-x-3">
                <a class="text-white" href="http://localhost/Gadgets90/">Home</a>
                <a class="hover:text-white" href="http://localhost/Gadgets90/mobiles.php">Mobiles</a>
                <a class="hover:text-white" href="http://localhost/Gadgets90/laptops.php">Laptops</a>
                <a class="hover:text-white" href="http://localhost/Gadgets90/televisions.php">Televisions</a>
                <a class="hover:text-white" href="http://localhost/Gadgets90/smart_watches.php">Smart Watches</a>
                <a class="hover:text-white" href="http://localhost/Gadgets90/headsets.php">Headsets</a>
            </div>

            <!-- Search box -->
            <form class="order-first mb-10 md:mb-0 md:order-last md:pr-8" action="">
                <input class="w-72 py-1 pl-3 pr-10 rounded-full focus:outline-0" type="text" placeholder="Search.."
                    name="search">
                <button class="-ml-8 border-6 bg-trasparent" type="submit"><i
                        class="fa fa-search text-gray-400"></i></button>
            </form>
        </div>

        <!-- The hamburger icon to open/close the #main-nav when screen width < 768px (mobile devices) -->
        <a class="md:hidden text-white text-2xl" href="javascript:void(0)" onclick="toggleMenu()"><i
                id="toggle-menu-icon" class="fa-bars fa-solid"></i></a>

    </nav>
<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <!-- Left items -->
      <div class="flex-shrink-0 flex items-center">
        <a href="#" class="text-white font-bold">Logo</a>
      </div>

      <!-- Center items -->
      <div class="flex-grow flex items-center justify-center">
        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Item 1</a>
        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Item 2</a>
        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Item 3</a>
      </div>

      <!-- Right items -->
      <div class="flex items-center">
        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Signup</a>
      </div>
    </div>
  </div>
</nav>
<nav class="bg-gray-800">
  <div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <!-- Left items -->
        <div class="flex-shrink-0">
          <a href="#" class="text-white font-bold">Logo</a>
        </div>
        <div class="hidden md:block">
          <ul class="ml-10 flex items-baseline space-x-4">
            <li>
              <a href="#" class="text-gray-300 hover:text-white">Home</a>
            </li>
            <li>
              <a href="#" class="text-gray-300 hover:text-white">About</a>
            </li>
            <li>
              <a href="#" class="text-gray-300 hover:text-white">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Center items -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Notification icon -->
          </button>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Hamburger button -->
        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Hamburger icon -->
        </button>
      </div>
      <!-- Right items -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <a href="#" class="text-gray-300 hover:text-white">Login</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="md:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="#" class="text-gray-300 hover:text-white block">Home</a>
      <a href="#" class="text-gray-300 hover:text-white block">About</a>
      <a href="#" class="text-gray-300 hover:text-white block">Contact</a>
    </div>
  </div>
</nav>

    <div class="container text-2xl items-center px-5 py-24 mx-auto flex flex-wrap" style="background:lightgrey">
      Your ad here
    </div>