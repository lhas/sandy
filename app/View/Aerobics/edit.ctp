<div class="aerobics form">
<?php echo $this->Form->create('Aerobic'); ?>
	<fieldset>
		<legend>
			<?php echo __('Editar Série Aeróbica'); ?> de <?php echo $this->request->data['User']['username']; ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn', 'escape' => false) ); ?>
		</legend>
	<?php
		echo $this->Form->input('id');

		# Data de Início
		echo $this->Form->input('inicio', array('label' => 'Data de Início da série') );

		# Aquecimento
		echo $this->Form->input('aquecimento', array('label' => 'Aquecimento') );

		# FCmax
		echo $this->Form->input('fcmax', array('label' => 'FCmax') );

		# PSE
		echo $this->Form->input('pse', array('label' => 'PSE') );

		# Objetivo
		echo $this->Form->input('objetivo', array('label' => 'Objetivo') );

		# Observações
		echo $this->Form->input('observacoes', array('label' => 'Observações') );

		# Hasmany Helper
		echo $this->Hasmany->init('AerobicStep', count($this->request->data['AerobicStep']));
		echo $this->Hasmany->add_button('AerobicStep', '<i class="icon-plus"></i> Adicionar Fase', array('action' => 'ajax_aerobicstep_fields') );
	?>

	<?php for($i = 0; $i <= count($this->request->data['AerobicStep']); $i++) { ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.step', array('value' => $i + 1, 'type' => 'hidden') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.ergometro', array('label' => 'Ergômetro') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.tipo_de_exercicio', array('label' => 'Tipo de Exercício') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.tipo_de_programa', array('label' => 'Tipo de Programa') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_total', array('label' => 'Tempo Total') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.numero_de_sets', array('label' => 'Número de Sets') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.distancia_para_sets', array('label' => 'Distância para Sets') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_para_sets', array('label' => 'Tempo para Sets') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.velocidade_sets', array('label' => 'Velocidade dos Sets') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_de_recuperacao', array('label' => 'Tempo de Recuperação') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.velocidade_de_recuperacao', array('label' => 'Velocidade de Recuperação') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.inclinacao', array('label' => 'Inclinação') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.resistencia', array('label' => 'Resistência') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.nivel', array('label' => 'Nível') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.distancia_total', array('label' => 'Distância Total') ); ?>
		<?php echo $this->Form->input('AerobicStep.' . $i . '.gasto_calorico', array('label' => 'Gasto Calórico') ); ?>
	<?php } ?>

	<?php
		# Enviar
		echo $this->Form->button('<i class="icon-ok"></i> Enviar', array('class' => 'btn btn-success', 'escape' => false) );
		?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aerobic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aerobic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aerobics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobic Steps'), array('controller' => 'aerobic_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic Step'), array('controller' => 'aerobic_steps', 'action' => 'add')); ?> </li>
	</ul>
</div>