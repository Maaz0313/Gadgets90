<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <div class="container text-2xl items-center px-5 py-24 mx-auto flex flex-wrap" style="background:lightgrey">
      Your ad here
    </div>