<?php
require('../header.php');
?>
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
					<form class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<input autocomplete="new-email" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
							<label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm">Email Address</label>
						</div>
						<div class="relative">
							<input autocomplete="new-password" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
							<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm">Password</label>
						</div>
						<div class="relative">
							<button class="bg-blue-500 text-white rounded-md px-3 py-2">Log In</button>
						</div>
                    </form>
				</div>
                <div><a href="http://localhost/Gadgets90/user/forgot-password.php" class="text-blue-500">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://localhost/Gadgets90/user/signup.php" class="text-blue-500">SignUp</a></div>
			</div>
		</div>
	</div>
</div>
<?php require('../footer.php'); ?>