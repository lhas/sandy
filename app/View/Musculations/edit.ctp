<div class="musculations form">
<?php echo $this->Form->create('Musculation'); ?>
	<fieldset>
		<legend><?php echo __('Editar Série de Musculação'); ?></legend>
	<?php
		echo $this->Form->input('id');

		# Data de Início
		echo $this->Form->input('inicio', array('label' => 'Data de Início da série') );

		# Objetivos
		echo $this->Form->input('objetivos', array('label' => 'Objetivos') );

		# Observação
		echo $this->Form->input('observacao', array('label' => 'Observação') );

		# Hasmany Helper
		echo $this->Hasmany->init('MusculationExercise', count($this->request->data['MusculationExercise']));
	?>

	<div id="MusculationExerciseContainer">
		<?php for($i = 0; $i <= count($this->request->data['MusculationExercise']) - 1; $i++) { ?>

			<div id="campos-<?php echo $i + 1; ?>">
				<legend>Exercício #<?php echo $i + 1; ?>
					<a href="javascript:;" data-database-id="<?php echo $this->request->data['MusculationExercise'][$i]['id']; ?>" data-cadastrado="true" data-id="<?php echo $i + 1; ?>" class="btn-excluir-hasmany btn btn-danger"><i class="icon-trash"></i> Excluir</a>
				</legend>

				<?php echo $this->Form->input('MusculationExercise.' . $i . '.id'); ?>
				<?php echo $this->Form->input('MusculationExercise.' . $i . '.exercise', array('label' => 'Exercício') ); ?>
				<?php echo $this->Form->input('MusculationExercise.' . $i . '.reg', array('label' => 'Reg.') ); ?>
				<?php echo $this->Form->input('MusculationExercise.' . $i . '.set_rep', array('label' => 'Set./Rep.') ); ?>
				<?php echo $this->Form->input('MusculationExercise.' . $i . '.fase_1', array('label' => 'Fase 1') ); ?>
				<?php echo $this->Form->input('MusculationExercise.' . $i . '.fase_2', array('label' => 'Fase 2') ); ?>
			</div>
		<?php } ?>
	</div>

	<?php echo $this->Hasmany->add_button('MusculationExercise', '<i class="icon-plus"></i> Adicionar Exercício', array('action' => 'ajax_musculationexercise_fields') ); ?>

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

				$("#MusculationExercise").val(parseInt($("#MusculationExercise").val()) - 1);

				$("#campos-" + id).fadeOut(300);

				if($(this).data('cadastrado') == true) {
					$.ajax({
						type: 'POST',
						data: {'id': $(this).data('database-id')},
						url: '<?php echo $this->Html->url( array('controller' => 'musculations', 'action' => 'ajax_delete_exercise') ); ?>',
						success: function(data) {
							$("#campos-" + id).remove();
						}
					});
				}
			}
		});
	});
</script>