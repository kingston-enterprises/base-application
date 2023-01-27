<?php

namespace kingstonenterprises\core\form;

$form = new Form();

?>
<title><?php echo $title ?></title>

<!-- Contact section -->
<section id="login" class="container my-24 px-6 mx-auto" aria-label="Login Section">
  <div class="mb-32 text-gray-800">
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('/img/bg-1.jpg'); height: 300px;">
    </div>
    <div class="container w-full flex justify-center text-gray-800 px-4 md:px-12">
      <div class="block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 mb-12">
        
          
          
        </div>
        <div class="max-w-lg mx-auto">
		<?php $form = Form::begin('', 'post')?>
				<?php echo $form->field($model, 'email') ?>
				<?php echo $form->field($model, 'password')->passwordField() ?>
			
			<button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
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

            <p class="m-4 text-sm" aria-label="">
            	Don`t have an acount? 
            		<a href="/auth/register"
            			class="inline-block text-blue-500 font-medium text-xs leading-tight underline hover:text-blue-700">
            			Register Here</a>.
            	</p>
			
		<?php Form::end() ?>
        </div>
      </div>
    </div>

  </div>
</section>
