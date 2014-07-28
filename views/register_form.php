<div class="container">
	<div class="register">
		<h1 class="login_title">Register</h1>
		<?=Form::open()?>
	    	<div class="row">
	    		<?=Form::label('username', 'Username:')?>
				<?=Form::input('text', 'username')?>
	    	</div>
	    	<div class="row">
	    		<?=Form::label('password', 'Password:')?>
				<?=Form::input('password', 'password')?>
	    	</div>
    		<div class="row">
	    		<?=Form::label('confirm_password', 'Confirm Password:')?>
				<?=Form::input('password', 'confirm_password')?>
	    	</div>
	    	<div class="row">
	    	   <?=Form::submit()?>
	    	</div>
		    <?php if($error): ?>
				<p class="error"><?=$error?></p>
			<?php endif; ?>
		<?=Form::close()?>
	</div>