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

<<<<<<< HEAD
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
        <button class="mobile-menu-button">
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
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
=======
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
    <nav class="relative px-4 py-4 flex justify-between items-center bg-white">
		<a class="mr-auto text-3xl font-bold leading-none" href="http://localhost/Gadgets90/">
                Gadgets<span class="text-amber-500">90</span>
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-blue-600 font-bold" href="#">About Us</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Services</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Pricing</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
		</ul>
    <!-- Search box -->
    <form class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl" action="">
                <input class="w-72 py-1 pl-3 pr-10 rounded-full focus:outline-0" type="text" placeholder="Search.."
                    name="search">
                <button class="-ml-8 border-6 bg-trasparent" type="submit"><i
                        class="fa fa-search text-gray-400"></i></button>
    </form>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">Sign In</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Sign up</a>
	</nav>
  <!-- Mobile menu -->
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="http://localhost/Gadgets90/">
                Gadgets<span class="text-amber-500">90</span>
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Services</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Pricing</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="#">Sign Up</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2021</span>
				</p>
			</div>
		</nav>
	</div>
<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');
>>>>>>> fa7a9ee85e3da6995f4d93f2125a3bd48fa29a33

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>
    <div class="container text-2xl items-center px-5 py-24 mx-auto flex flex-wrap" style="background:lightgrey">
      Your ad here
    </div>