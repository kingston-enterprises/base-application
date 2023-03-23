<?php

namespace kingston\icarus\form;

$form = new Form();
?>
<title><?php echo $title ?></title>

<!-- Main section -->
<section id="dashboard" class="container my-24 px-6 mx-auto" aria-label="Dashboard Section">
    <div class="container w-full flex items-center justify-center text-gray-800 px-4 md:px-12">

        <div class="block border-2 w-10/12 rounded-lg shadow-lg py-10 md:py-8 px-4 md:px-6">
        <div class="max-w-lg mx-auto text-xs">
					<?php $form = Form::begin('', 'post') ?>
					<?php echo $form->field($model, 'firstname', $user->firstname) ?>
					<?php echo $form->field($model, 'lastname', $user->lastname) ?>
					<?php echo $form->field($model, 'email', $user->email) ?>

					<?php echo $form->field($model, 'password', 'Old Password')->passwordField() ?>
					<?php echo $form->field($model, 'password', 'New Password')->passwordField() ?>
					<?php echo $form->field($model, 'passwordConfirm', 'Confirm New Password')->passwordField() ?>

					<button type="submit" class="block w-full p-3 text-base font-bold bg-blue-600 text-white
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" aria-label="Contact Section Form Submit Button">Save</button>

					<?php Form::end() ?>
				</div>
        </div>

    </div>

</section>