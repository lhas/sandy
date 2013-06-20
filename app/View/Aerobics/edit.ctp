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
	?>

	<div id="AerobicStepContainer">
		<?php for($i = 0; $i <= count($this->request->data['AerobicStep']) - 1; $i++) { ?>

			<div id="campos-<?php echo $i + 1; ?>">
				<legend>Fase #<?php echo $i + 1; ?>
					<a href="javascript:;" data-database-id="<?php echo $this->request->data['AerobicStep'][$i]['id']; ?>" data-cadastrado="true" data-id="<?php echo $i + 1; ?>" class="btn-excluir-hasmany btn btn-danger"><i class="icon-trash"></i> Excluir</a>
				</legend>

				<?php echo $this->Form->input('AerobicStep.' . $i . '.id'); ?>
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
			</div>
		<?php } ?>
	</div>

	<?php echo $this->Hasmany->add_button('AerobicStep', '<i class="icon-plus"></i> Adicionar Fase', array('action' => 'ajax_aerobicstep_fields') ); ?>

	<?php
		# Enviar
		echo $this->Form->button('<i class="icon-ok"></i> Enviar', array('class' => 'btn btn-success', 'escape' => false) );
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("body").on("click", ".btn-excluir-hasmany", function() {
			var confirmacao = confirm("Você tem certeza disto? Esta ação é PERMANENTE!");

			if(confirmacao) {
				var id = $(this).data('id');

				$("#AerobicStep").val(parseInt($("#AerobicStep").val()) - 1);

				$("#campos-" + id).fadeOut(300);

				if($(this).data('cadastrado') == true) {
					$.ajax({
						type: 'POST',
						data: {'id': $(this).data('database-id')},
						url: '<?php echo $this->Html->url( array('controller' => 'aerobics', 'action' => 'ajax_delete_step') ); ?>',
						success: function(data) {
							$("#campos-" + id).remove();
						}
					});
				}
			}
		});
	});
</script>