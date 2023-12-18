<?php
session_start();
require('../header.php');
?>
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<style>
  input::placeholder {
    font-size: 1rem;
    padding-left: 2%;
  }

  input.email::placeholder {
    padding-left: 1%;
  }
</style>
<main aria-label="Main" class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6">
  <div class="max-w-xl lg:max-w-3xl">
    <?php
    if (isset($_SESSION['message'])) {
    ?>
      <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">

        <div class="ms-3 text-sm font-medium">
          <?= $_SESSION['message'] ?>
        </div>
        <button id="cls" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
        </button>
      </div>
    <?php
    unset($_SESSION['message']);
    } ?>
    <div>
      <h1 class="text-2xl font-semibold">Create an account</h1>
    </div>
    <form class="mt-8 grid grid-cols-6 gap-6" action="../functions/authcode.php" method="POST">
      <div class="col-span-6 sm:col-span-3">
        <label for="FirstName" class="block text-sm font-medium text-gray-700">
          First Name
        </label>

        <input type="text" id="FirstName" name="first_name" class="mt-1 h-8 w-full rounded-md border border-gray-400 bg-white text-lg text-gray-700 shadow-sm" placeholder="Enter First Name" required />
      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="LastName" class="block text-sm font-medium text-gray-700">
          Last Name
        </label>

        <input type="text" id="LastName" name="last_name" class="mt-1 h-8 w-full rounded-md border border-gray-400 bg-white text-lg text-gray-700 shadow-sm" placeholder="Enter Last Name" required />
      </div>

      <div class="col-span-6">
        <label for="Email" class="block text-sm font-medium text-gray-700">
          Email
        </label>

        <input type="email" id="Email" name="email" class="email mt-1 h-8 w-full rounded-md border border-gray-400 bg-white text-lg text-gray-700 shadow-sm" placeholder="Enter your Email address" required />
      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="Password" class="block text-sm font-medium text-gray-700">
          Password
        </label>

        <input type="password" id="Password" name="password" class="mt-1 h-8 w-full rounded-md border border-gray-400 bg-white text-lg text-gray-700 shadow-sm" placeholder="Enter Password" required />
      </div>

      <div class="col-span-6 sm:col-span-3">
        <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
          Password Confirmation
        </label>

        <input type="password" id="PasswordConfirmation" name="password_confirmation" class="mt-1 h-8 w-full rounded-md border border-gray-400 bg-white text-lg text-gray-700 shadow-sm" placeholder="Confirm Password" required />
      </div>

      <div class="col-span-6">
        <p class="text-sm text-gray-500">
          By creating an account, you agree to our
          <a href="#" class="text-gray-700 underline">
            terms and conditions
          </a>
          and
          <a href="#" class="text-gray-700 underline">privacy policy</a>.
        </p>
      </div>

      <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
        <button class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500" name="register_btn">
          Create an account
        </button>

        <p class="mt-4 text-sm text-gray-500 sm:mt-0">
          Already have an account?
          <a href="/Gadgets90/user/login.php" class="text-gray-700 underline">Log in</a>.
        </p>
      </div>
    </form>
  </div>
</main>
<?php require('../footer.php'); ?>