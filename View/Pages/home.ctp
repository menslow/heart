<h1>Home</h1>

<h3>User:</h3>
<?php if($user) : ?>
	<?php echo debug($user); ?>
<?php endif; ?>

<h3>Facebook Login/out:</h3>
<?php if($facebook_user) : ?>
	<?php echo debug($facebook_user); ?>
<?php endif; ?>