<div class="aerobics view">
<h2><?php  echo __('Aerobic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($aerobic['User']['id'], array('controller' => 'users', 'action' => 'view', $aerobic['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aquecimento'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['aquecimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fcmax'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['fcmax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pse'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['pse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivo'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['objetivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacoes'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['observacoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($aerobic['Aerobic']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aerobic'), array('action' => 'edit', $aerobic['Aerobic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aerobic'), array('action' => 'delete', $aerobic['Aerobic']['id']), null, __('Are you sure you want to delete # %s?', $aerobic['Aerobic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobic Steps'), array('controller' => 'aerobic_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic Step'), array('controller' => 'aerobic_steps', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aerobic Steps'); ?></h3>
	<?php if (!empty($aerobic['AerobicStep'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aerobic Id'); ?></th>
		<th><?php echo __('Step'); ?></th>
		<th><?php echo __('Ergometro'); ?></th>
		<th><?php echo __('Tipo De Exercicio'); ?></th>
		<th><?php echo __('Tipo De Programa'); ?></th>
		<th><?php echo __('Tempo Total'); ?></th>
		<th><?php echo __('Numero De Sets'); ?></th>
		<th><?php echo __('Distancia Para Sets'); ?></th>
		<th><?php echo __('Tempo Para Sets'); ?></th>
		<th><?php echo __('Velocidade Sets'); ?></th>
		<th><?php echo __('Tempo De Recuperacao'); ?></th>
		<th><?php echo __('Velocidade De Recuperacao'); ?></th>
		<th><?php echo __('Inclinacao'); ?></th>
		<th><?php echo __('Resistencia'); ?></th>
		<th><?php echo __('Nivel'); ?></th>
		<th><?php echo __('Distancia Total'); ?></th>
		<th><?php echo __('Gasto Calorico'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aerobic['AerobicStep'] as $aerobicStep): ?>
		<tr>
			<td><?php echo $aerobicStep['id']; ?></td>
			<td><?php echo $aerobicStep['aerobic_id']; ?></td>
			<td><?php echo $aerobicStep['step']; ?></td>
			<td><?php echo $aerobicStep['ergometro']; ?></td>
			<td><?php echo $aerobicStep['tipo_de_exercicio']; ?></td>
			<td><?php echo $aerobicStep['tipo_de_programa']; ?></td>
			<td><?php echo $aerobicStep['tempo_total']; ?></td>
			<td><?php echo $aerobicStep['numero_de_sets']; ?></td>
			<td><?php echo $aerobicStep['distancia_para_sets']; ?></td>
			<td><?php echo $aerobicStep['tempo_para_sets']; ?></td>
			<td><?php echo $aerobicStep['velocidade_sets']; ?></td>
			<td><?php echo $aerobicStep['tempo_de_recuperacao']; ?></td>
			<td><?php echo $aerobicStep['velocidade_de_recuperacao']; ?></td>
			<td><?php echo $aerobicStep['inclinacao']; ?></td>
			<td><?php echo $aerobicStep['resistencia']; ?></td>
			<td><?php echo $aerobicStep['nivel']; ?></td>
			<td><?php echo $aerobicStep['distancia_total']; ?></td>
			<td><?php echo $aerobicStep['gasto_calorico']; ?></td>
			<td><?php echo $aerobicStep['created']; ?></td>
			<td><?php echo $aerobicStep['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aerobic_steps', 'action' => 'view', $aerobicStep['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aerobic_steps', 'action' => 'edit', $aerobicStep['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aerobic_steps', 'action' => 'delete', $aerobicStep['id']), null, __('Are you sure you want to delete # %s?', $aerobicStep['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aerobic Step'), array('controller' => 'aerobic_steps', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
