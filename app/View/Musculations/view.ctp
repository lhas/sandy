<div class="musculations view">
<legend><?php  echo __('Visualização da Série'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'musculations', 'action' => 'index'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<dl>
		<dt><?php echo __('Usuário'); ?></dt>
		<dd>
			<?php echo $this->Html->link($musculation['User']['UserMeta']['16']['value'], array('controller' => 'users', 'action' => 'view', $musculation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Início'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['objetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['observacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Inserção'); ?></dt>
		<dd>
			<?php $data = new DateTime($musculation['Musculation']['created']); echo $data->format('d/m/Y');
			?>
			&nbsp;
		</dd>
	</dl>

	<dl>
	<?php foreach ($musculation['MusculationExercise'] as $musculationExercise): ?>
		<legend>Exercício: <?php echo $musculationExercise['exercise']; ?></legend>

			<dt>Reg.</dt>
			<dd>
				<?php echo $musculationExercise['reg']; ?>
			</dd>
			<dt>Set./Rep.</dt>
			<dd>
				<?php echo $musculationExercise['set_rep']; ?>
			</dd>
			<dt>Fase 1</dt>
			<dd>
				<?php echo $musculationExercise['fase_1']; ?>
			</dd>
			<dt>Fase 2</dt>
			<dd>
				<?php echo $musculationExercise['fase_2']; ?>
			</dd>
	<?php endforeach; ?>
	</dl>
</div>