<div class="musculations form">
<?php echo $this->Form->create('Musculation'); ?>
	<fieldset>
		<legend>
			<?php echo __('Adicionar Série Musculação'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn', 'escape' => false) ); ?>
		</legend>
		<?php
			# Usuário
			echo $this->Form->input('user_id', array('label' => 'Usuário que terá esta série') );

			# Data de Início
			echo $this->Form->input('inicio', array('label' => 'Data de Início da série') );

			# Objetivos
			echo $this->Form->input('objetivos', array('label' => 'Objetivos') );

			# Observação
			echo $this->Form->input('observacao', array('label' => 'Observação') );

			# Hasmany Helper
			echo $this->Hasmany->init('MusculationExercise');
			echo $this->Hasmany->add_button('MusculationExercise', '<i class="icon-plus"></i> Adicionar Exercício', array('action' => 'ajax_musculationexercise_fields') );

			# Enviar
			echo $this->Form->button('<i class="icon-ok"></i> Enviar', array('class' => 'btn btn-success', 'escape' => false) );
		?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// Usuário
		$("#MusculationUserId").chosen();

		// 	Data de Nascimento
		$("#MusculationInicio").mask("99/99/9999");
	});
</script>