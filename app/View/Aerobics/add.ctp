<div class="aerobics form">
<?php echo $this->Form->create('Aerobic'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Série Aeróbica'); ?></legend>
	<?php
		# Usuário
		echo $this->Form->input('user_id', array('label' => 'Usuário que terá esta série') );

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
		echo $this->Hasmany->init('AerobicStep');
		echo $this->Hasmany->add_button('AerobicStep', '<i class="icon-plus"></i> Adicionar Fase', array('action' => 'ajax_aerobicstep_fields') );

		# Enviar
		echo $this->Form->button('<i class="icon-ok"></i> Enviar', array('class' => 'btn btn-success', 'escape' => false) );
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		// Usuário
		$("#AerobicUserId").chosen();

		// 	Data de Nascimento
		$("#AerobicInicio").mask("99/99/9999");
	});
</script>