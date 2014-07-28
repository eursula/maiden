<div class="container">
	<div class="login">
		<h1 class="login_title">Login</h1>
		<p class="existing">For existing members</p>
		<?=Form::open()?>
	    	<div class="row">
	    		<?=Form::label('username', 'Username:')?>
	    		<?=Form::input('text', 'username')?>
	    	</div>
	    	<div class="row">
	    		<?=Form::label('password', 'Password:')?>
				<?=Form::input('password', 'password')?>
	    	</div>
	   			<?=Form::submit()?>
	   		</div>
    		<?php if($error): ?>
				<p class="error"><?=$error?></p>
			<?php endif; ?>
		<?=Form::close()?>
    </div>