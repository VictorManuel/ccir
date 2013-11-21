<!DOCTYPE html>
<html>
<head>
	
	<title>
		Administrador: >>CCIR<<
	</title>
	<?php
	header ('Content-type: text/html; charset=utf-8');
	?>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>ADMINISTRADOR >>CCIR<<</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

			<?php 	if($this->Session->read('Auth.User')){
						echo $this->element('menu');
					}?>

		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
