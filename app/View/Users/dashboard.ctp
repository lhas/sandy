<?php if(AuthComponent::user('role') == 'admin') { ?>

<legend class="legend-dashboard">Adicionar...</legend>

<?php echo $this->Html->link('<i class="icon-user"></i> Usuário', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<div class="clear clearfix"></div>

<?php echo $this->Html->link('<i class="icon-list"></i> Série de Aeróbica', array('controller' => 'aerobics', 'action' => 'add'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<div class="clear clearfix"></div>

<?php echo $this->Html->link('<i class="icon-list"></i> Série de Musculação', array('controller' => 'musculations', 'action' => 'add'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<legend class="legend-dashboard">Gerenciar...</legend>

<?php echo $this->Html->link('<i class="icon-user"></i> Usuário', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<div class="clear clearfix"></div>

<?php echo $this->Html->link('<i class="icon-list"></i> Série de Aeróbica', array('controller' => 'aerobics', 'action' => 'index'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<div class="clear clearfix"></div>

<?php echo $this->Html->link('<i class="icon-list"></i> Série de Musculação', array('controller' => 'musculations', 'action' => 'index'), array('class' => 'btn btn-inverse btn-dashboard', 'escape' => false) ); ?>

<?php } else { ?>

<legend class="legend-dashboard">Minhas Séries</legend>

<h4>Aeróbica</h4>

<ul>
	<?php foreach($series_aerobica as $serie) : ?>
	<li>
		<a href="<?php echo $this->Html->url( array('controller' => 'aerobics', 'action' => 'table', $serie['Aerobic']['id']) ); ?>">
			Início: <?php echo $serie['Aerobic']['inicio']; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>

<h4>Musculação</h4>

<ul>
	<?php foreach($series_musculacao as $serie) : ?>
	<li>
		<a href="<?php echo $this->Html->url( array('controller' => 'musculations', 'action' => 'table', $serie['Musculation']['id']) ); ?>">
			Início: <?php echo $serie['Musculation']['inicio']; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
<?php } ?>