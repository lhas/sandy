<div class="aerobics view">
<legend><?php  echo __('Visualização da Série'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'aerobics', 'action' => 'index'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<dl>
		<dt><?php echo __('Usuário'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aerobic['User']['UserMeta']['16']['value'], array('controller' => 'users', 'action' => 'view', $aerobic['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Início da Série'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aquecimento'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['aquecimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FCmax'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['fcmax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('PSE'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['pse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observações'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['observacoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data de Inserção'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['created']); ?>
			&nbsp;
		</dd>
	</dl>

	<dl>
	<?php foreach ($aerobic['AerobicStep'] as $aerobicStep): ?>
		<legend>Fase #<?php echo $aerobicStep['step']; ?></legend>
		<dt>
			<dt>Ergômetro</dt>
			<dd>
				<?php echo $aerobicStep['ergometro']; ?>
			</dd>
			<dt>Tipo de Exercício</dt>
			<dd>
				<?php echo $aerobicStep['tipo_de_exercicio']; ?>
			</dd>
			<dt>Tipo de Programa</dt>
			<dd>
				<?php echo $aerobicStep['tipo_de_programa']; ?>
			</dd>
			<dt>Tempo Total</dt>
			<dd>
				<?php echo $aerobicStep['tempo_total']; ?>
			</dd>
			<dt>Número de Sets</dt>
			<dd>
				<?php echo $aerobicStep['numero_de_sets']; ?>
			</dd>
			<dt>Distância para Sets</dt>
			<dd>
				<?php echo $aerobicStep['distancia_para_sets']; ?>
			</dd>
			<dt>Tempo para Sets</dt>
			<dd>
				<?php echo $aerobicStep['tempo_para_sets']; ?>
			</dd>
			<dt>Velocidade de Sets</dt>
			<dd>
				<?php echo $aerobicStep['velocidade_sets']; ?>
			</dd>
			<dt>Tempo de Recuperação</dt>
			<dd>
				<?php echo $aerobicStep['tempo_de_recuperacao']; ?>
			</dd>
			<dt>Velocidade de Recuperação</dt>
			<dd>
				<?php echo $aerobicStep['velocidade_de_recuperacao']; ?>
			</dd>
			<dt>Inclinação</dt>
			<dd>
				<?php echo $aerobicStep['inclinacao']; ?>
			</dd>
			<dt>Resistência</dt>
			<dd>
				<?php echo $aerobicStep['resistencia']; ?>
			</dd>
			<dt>Nível</dt>
			<dd>
				<?php echo $aerobicStep['nivel']; ?>
			</dd>
			<dt>Distância Total</dt>
			<dd>
				<?php echo $aerobicStep['distancia_total']; ?>
			</dd>
			<dt>Gasto Calórico</dt>
			<dd>
				<?php echo $aerobicStep['gasto_calorico']; ?>
			</dd>
			<dt>Data de Inserção</dt>
			<dd>
				<?php $data = new DateTime($aerobicStep['created']); echo $data->format('d/m/Y'); ?>
			</dd>
		</dt>
	<?php endforeach; ?>
	</dl>
</div>