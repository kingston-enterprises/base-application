<?php

use kingston\icarus\Application;

use kingstonenterprises\app\models\User;

if (!Application::isGuest()) {
	$user = new User;
	$user = $user->findOne([
		'id' => Application::$app->session->get('user')
	]);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/img/favicon.ico">
	<link rel="stylesheet" href="/css/tailwind.css" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 p-5 bg-blue-200">
	<nav class="m-3 p-3 flex flex-row justify-between text-yellow-400 text-2xl font-bold underline">
		<div>
			<a href="/">Home</a>
		</div>
		<div>
			<ul class="flex flex-row justify-around">

				<?php if (Application::isGuest()) : ?>
					<li class="mx-2">
						<a href="/auth/login/">Login</a>
					</li>
					<li class="mx-2">
						<a href="/auth/register/">Register</a>
					</li>
				<?php else : ?>
					<li class="mx-2">
						<a href="/dashboard">
							<?php echo $user->getDisplayName() ?>
						</a>
					</li>
					<li class="mx-2">
						<a href="/auth/logout">
							Logout
						</a>
					</li>


				<?php endif; ?>
			</ul>
		</div>
	</nav>

	<?php if (Application::$app->session->getFlash('success')) : ?>
		<div class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700" role="alert">
			<p><?php echo Application::$app->session->getFlash('success') ?></p>
		</div>
	<?php elseif (Application::$app->session->getFlash('warning')) : ?>
		<div class="bg-orange-100 rounded-lg py-5 px-6 mb-4 text-base text-orange-700" role="alert">
			<p><?php echo Application::$app->session->getFlash('warning') ?></p>
		</div>
	<?php endif; ?>
	{{content}}
</body>

</html>