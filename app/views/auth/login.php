<?php

namespace kingston\icarus\form;

$form = new Form();

?>
<title><?php echo $title ?></title>

<!-- Section: Login -->
<section id="login" class="container my-2 px-6 mx-auto" aria-label="Login Section">
<div class="mb-32 text-gray-800">
    <div class="rounded relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('/img/icarusPoster.jpg'); height: 300px;">
    </div>
    <div class="container w-full flex justify-center text-gray-800 px-4 md:px-12">
      <div class="w-8/12 block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="max-w-lg mx-auto">
			<?php $form = Form::begin('', 'post') ?>
			<?php echo $form->field($model, 'email') ?>
			<?php echo $form->field($model, 'password')->passwordField() ?>
			
			<button type="submit" class="block w-full p-3 text-base font-bold bg-blue-600 text-white
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" aria-label="Contact Section Form Submit Button">Login</button>

            <div class="text-center">
			<p class="m-4 text-sm" aria-label="">
            	Already have an acount? 
				<a href="/auth/register"
					class="inline-block text-blue-500 font-medium text-xs leading-tight underline hover:text-blue-700">
					Register Here</a>.
			</p>
			</div>
			
		<?php Form::end() ?>
        </div>
      </div>
    </div>
</section>