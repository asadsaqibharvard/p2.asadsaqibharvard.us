<?php if($user): ?>
	
	<pre>
	<?php
	print_r($user);
	?>
	<pre>

	Hello <?=$user->first_name;?>
<?php else: ?>
	<div class='headertext'>
	Welcome to my app. Please sign up or log in
	</div>
	<br />
	<img src='/images/lion_cute.png' class='imagecenter' />
	<br />
	<div class='center'>
	<a href='/users/signup' class='homebutton'>Signup</a>
	<a href='/users/login' class='homebutton'>Login</a>
</div>
<?php endif; ?>