<?php
session_start();
require('header.php');
?>
<?php
    if (isset($_SESSION['message'])) {
    ?>
      <div id="alert-2" class="w-80 my-3 mx-auto flex items-center p-4 mb-4 rounded-lg bg-emerald-400 text-base text-green-950" role="alert">

        <div class="ms-3 text-sm font-medium">
          <?= $_SESSION['message'] ?>
        </div>
        <button id="cls" type="button" class="ms-auto -mx-1.5 -my-1.5 text-success-700 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
        </button>
      </div>
    <?php
    } 
    unset($_SESSION['message']);
    ?>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="flex justify-between">
  <div>
    <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Mobiles</h2>
  </div>
  <div class="flex items-center">
    <a href="http://localhost/Gadgets90/mobiles.php" class="flex items-center">
      <span class="mr-1">View All</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
    </a>
  </div>
</header>


        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="flex justify-between">
        <div>
          <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Laptops</h2>
        </div>
        <div class="flex items-center">
          <a href="http://localhost/Gadgets90/laptops.php" class="flex items-center">
            <span class="mr-1">View All</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
          </a>
        </div>
      </header>


        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
        <header class="flex justify-between">
          <div>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Televisions</h2>
          </div>
          <div class="flex items-center">
            <a href="http://localhost/Gadgets90/televisions.php" class="flex items-center">
              <span class="mr-1">View All</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
            </a>
          </div>
        </header>


        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="flex justify-between">
        <div>
          <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Smart Watches</h2>
        </div>
        <div class="flex items-center">
          <a href="http://localhost/Gadgets90/smart watches.php" class="flex items-center">
            <span class="mr-1">View All</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
          </a>
        </div>
      </header>


        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="flex justify-between">
        <div>
          <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Headsets</h2>
        </div>
        <div class="flex items-center">
          <a href="http://localhost/Gadgets90/headsets.php" class="flex items-center">
            <span class="mr-1">View All</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
          </a>
        </div>
      </header>

        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="block overflow-hidden group">
              <img
                src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                alt=""
                class="h-[200px] w-75 object-cover transition duration-500 group-hover:scale-105 sm:h-[200px]"
              />

              <div class="relative pt-3 bg-white">
                <h3
                  class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                >
                  Basic Tee
                </h3>

                <p class="mt-2">
                  <span class="sr-only"> Regular Price </span>

                  <span class="tracking-wider text-gray-900"> £24.00 GBP </span>
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section>
      <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
      <header class="flex justify-between">
        <div>
          <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Latest Blogs</h2>
        </div>
        <div class="flex items-center">
          <a href="http://localhost/Gadgets90/blogs.php" class="flex items-center">
            <span class="mr-1">View All</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 384 512"><path d="M3.4 81.7c-7.9 15.8-1.5 35 14.3 42.9L280.5 256 17.7 387.4C1.9 395.3-4.5 414.5 3.4 430.3s27.1 22.2 42.9 14.3l320-160c10.8-5.4 17.7-16.5 17.7-28.6s-6.8-23.2-17.7-28.6l-320-160c-15.8-7.9-35-1.5-42.9 14.3z"/></svg>
          </a>
        </div>
      </header>

        <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
          <li>
            <!--
              This component uses @tailwindcss/line-clamp

              yarn add @tailwindcss/line-clamp
              npm install @tailwindcss/line-clamp

              plugins: [require('@tailwindcss/line-clamp')]
            -->

            <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<article class="overflow-hidden rounded-lg border border-gray-100 shadow-sm">
  <img
    alt="Office"
    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover"
  />

  <div class="p-4 sm:p-6">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </h3>
    </a>

    
  </div>
</article>

          </li>

          <li>
            <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<article class="overflow-hidden rounded-lg border border-gray-100 shadow-sm">
  <img
    alt="Office"
    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover"
  />

  <div class="p-4 sm:p-6">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </h3>
    </a>

    
  </div>
</article>


          </li>

          <li>
            <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<article class="overflow-hidden rounded-lg border border-gray-100 shadow-sm">
  <img
    alt="Office"
    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover"
  />

  <div class="p-4 sm:p-6">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </h3>
    </a>

    
  </div>
</article>


          </li>

          <li>
            <!--
              This component uses @tailwindcss/line-clamp

              yarn add @tailwindcss/line-clamp
              npm install @tailwindcss/line-clamp

              plugins: [require('@tailwindcss/line-clamp')]
            -->

            <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
-->

<article class="overflow-hidden rounded-lg border shadow-sm">
  <img
    alt="Office"
    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
    class="h-56 w-full object-cover"
  />

  <div class="p-4 sm:p-6">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </h3>
    </a>

    
  </div>
</article>

          </li>
        </ul>
      </div>
    </section>
</body>
<?php require('footer.php'); ?>