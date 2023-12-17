<?php
session_start();
require('../header.php');
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
    elseif (isset($_SESSION['message']) && $_SESSION['message']=="Invalid Credentials") {
    ?>
      <div id="alert-2" class="w-80 my-3 mx-auto flex items-center p-4 mb-4 rounded-lg bg-red-300 text-base text-red-600" role="alert">

        <div class="ms-3 text-sm font-medium">
          <?= $_SESSION['message'] ?>
        </div>
        <button id="cls" type="button" class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
        </button>
      </div>
    <?php
    
    }
	unset($_SESSION['message']);?>
<!-- component -->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Welcome to Gadgets90! Please login.</h1>
				</div>
				<div class="divide-y divide-gray-200">
					<form action="../functions/authcode.php" method="POST" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<input autocomplete="new-email" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
							<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm">Email Address</label>
						</div>
						<div class="relative">
							<input autocomplete="new-password" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
							<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm">Password</label>
						</div>
						<div class="relative">
							<button type="submit" name="login_btn" class="bg-blue-500 text-white rounded-md px-3 py-2">Log In</button>
						</div>
                    </form>
				</div>
                <div><a href="/user/forgot-password.php" class="text-blue-500">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/Gadgets90/user/signup.php" class="text-blue-500">SignUp</a></div>
			</div>
		</div>
	</div>
</div>
<?php require('../footer.php'); ?>
<script>
  var alert = document.getElementById('alert-2');
  document.getElementById('cls').onclick = function() {
    alert.classList.toggle('hidden');
  }
</script>