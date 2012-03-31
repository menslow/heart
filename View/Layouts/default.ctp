<!DOCTYPE html>
<?php //echo $this->Facebook->html(); ?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Mister Machine: Heart'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php //echo $this->Html->link(__('Facebook Example', true), 'http://cake-1-3.local.com'); ?></h1>
			<div>
			<?php if($user) : ?>
				<?php echo $this->Html->link(__('Log Out', true), array('controller' => 'users', 'action' => 'logout')); ?>
			<?php else : ?>
				<?php //if(!$facebook_user) : ?>
					<?php //echo $this->Html->link(__('Log In', true), array('controller' => 'users', 'action' => 'login')); ?>
					&nbsp;|&nbsp;
					<?php //echo $this->Html->link(__('Register', true), array('controller' => 'users', 'action' => 'register')); ?>
					&nbsp;|&nbsp;
					<?php //echo $this->Facebook->login(array('perms' => 'email,user_activities,user_education_history')); ?>
				<?php //endif; ?>
			<?php endif; ?>
			</div>

		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php //debug($this->Session, true); ?>
	<?php echo $this->element('sql_dump'); ?>
	<?php //echo $this->Facebook->init(); ?>
</body>
</html>