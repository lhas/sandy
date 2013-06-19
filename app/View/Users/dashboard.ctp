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