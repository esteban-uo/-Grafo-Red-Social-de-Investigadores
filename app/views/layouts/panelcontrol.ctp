<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php  echo $this -> Html -> charset();?>
		<title> Grafo - ¡Red Social de Investigadores! <?php  echo $title_for_layout;?></title>
		<?php
		echo $this -> Html -> meta('icon');
		echo $this -> Html -> css('cake.generic.css');
		?>
		<?php
		echo $scripts_for_layout;
		?>
	</head>
	<body>
	<div id="container">
		<div id="header">
			<h1>Panel de Control</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('email'); ?>

			<?php echo $content_for_layout; ?>

		</div>
	</div>
</body>
</html>