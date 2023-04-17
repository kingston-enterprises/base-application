<?php

use kingston\icarus\Application;

?>
<title><?php echo $title ?></title>

<!-- Main section -->
<section id="dashboard" class="my-24 px-6 mx-auto" aria-label="Dashboard Section">
	<div class="mb-32 text-gray-800" aria-label="Dashboard Section">
		<div class="flex flex-col justify-between relative overflow-none bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('/img/bg-1.jpg'); height: 300px;">

		</div>
		<div class="container w-full flex justify-center text-gray-800 px-4 md:px-12">

			<div class="block w-10/12 rounded-lg shadow-lg py-10 md:py-8 px-4 md:px-6" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
				<div class="p-5 mb-12 flex flex-row flex-wrap items-center justify-center lg:justify-start">
					<img class="m-2 max-h-40 rounded-full" src="/img/person-icon.png" alt="default Profile Picture">
					<div class="">

						<h1> <?php echo $user->getDisplayName(); ?> </h1>

						<h2><?php echo $user->email; ?></h2>
						<h2>since: <?php echo $user->joined; ?></h2>

						<div class="p-3 flex flex-row flex-wrap">

							<a class="text-blue-500 mx-1 underline text-sm" href="/update/profile">
								Edit Profile
							</a>
							<a class="text-blue-500 mx-1 underline text-sm" href="#">
								Upload Profile Picture
							</a>
						</div>

						<div class="flex flex-row flex-wrap">
							<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">
								<div class="flex items-center" aria-label="total visitors">
									<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">0</span>
									<h3 class="text-base font-normal text-gray-500">Posts</h3>
								</div>
							</div>
							<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">
								<div class="flex items-center" aria-label="total visitors">
									<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">0</span>
									<h3 class="text-base font-normal text-gray-500">Comments</h3>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="mb-12">
					<p class="text-2xl font-bold underline">Site Stats</p>

					<div class="flex flex-row flex-wrap">

						<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">
							<div class="flex items-center" aria-label="total visitors">
								<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">
									0
								</span>
								<h3 class="text-base font-normal text-gray-500">Total Posts</h3>
							</div>
						</div>
						<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">
							<div class="flex items-center" aria-label="total visitors">
								<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">
									0
								</span>
								<h3 class="text-base font-normal text-gray-500">Total Comments</h3>
							</div>
						</div>
						<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">

							<div class="flex items-center" aria-label="total visitors">
								<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">
									<?php echo $visitors ?>
								</span>
								<h3 class="text-base font-normal text-gray-500">Total Visitors</h3>
							</div>
						</div>

						<div class="m-3 bg-white shadow border rounded-lg p-4" aria-label="total visitors stats">
							<div class="flex items-center" aria-label="total visitors">
								<span class="text-xl sm:text-xl leading-none font-bold text-gray-900">
									0
								</span>
								<h3 class="text-base font-normal text-gray-500">Total Votes</h3>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

</section>
