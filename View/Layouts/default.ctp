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
			<h1><?php __('Heart'); ?></h1>
		</div>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>

		<div id="footer">
		</div>
	</div>
	<?php //debug($this->Session, true); ?>
	<?php echo $this->element('sql_dump'); ?>
	<?php //echo $this->Facebook->init(); ?>
</body>
</html>