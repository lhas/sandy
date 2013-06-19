<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>
		Daniel Sandy  - Área do Aluno
	</title>
	<?php
		// Meta
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		// CSS
			// Bootstrap
			echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css');
			// Bootstrap Responsive
			echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css');
			// Font Awesome
			echo $this->Html->css('http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css');
			// jQuery Chosen
			echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.css');
			// Application
			echo $this->Html->css('application');
		echo $this->fetch('css');

		// JS
			// jQuery
			echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js');
			// jQuery Migrate
			echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js');
			// Bootstrap
			echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js');
			// jQuery Masked Input
			echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js');
			// jQuery Chosen
			echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/chosen/0.9.15/chosen.jquery.min.js');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class="container">

		<header>

			<div class="row">

				<div class="span12">

					<h2 id="logo" class="span4">
						<?php echo $this->Html->image('logo.png'); ?>
					</h2> <!-- #logo -->

					<div id="logout" class="span3">
						<?php echo $this->Html->link('<i class="icon-off"></i> Sair', array('controller' => 'users', 'action' => 'logout'), array('class' => 'btn', 'escape' => false) ); ?>
					</div> <!-- #logout -->

					<div class="clear clearfix"></div>

					<hr>

				</div> <!-- .span12 -->

			</div> <!-- .row -->

		</header>

		<aside id="flash-messages">

			<div class="row">

				<?php echo $this->Session->flash(); ?>

			</div> <!-- .row -->

		</aside> <!-- #flash-messages -->

		<section id="content">

			<?php echo $this->fetch('content'); ?>

		</section> <!-- #content -->

		<footer>

			<div class="row">

				<div class="span12">
					<hr>

					<p>
						Daniel Sandy  - Área do Aluno <?php echo date('Y'); ?>.
					</p>

					<a href="http://marketingshop.com.br" title="Powered by Marketing Shop" target="_blank">
						<?php echo $this->Html->image('marketing-shop.png', array('alt' => 'Marketing Shop') ); ?>
					</a>
				</div>

			</div> <!-- .row -->

		</footer>

		<aside id="sql-dump">

			<div class="row">

				<?php echo $this->element('sql_dump'); ?>

			</div> <!-- .row -->
			
		</aside> <!-- #sql-dump -->

	</div> <!-- .container -->

	<?php echo $this->Js->writeBuffer(); ?>
</body>
</html>
