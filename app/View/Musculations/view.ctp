<div class="musculations view">
<h2><?php  echo __('Musculation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($musculation['User']['id'], array('controller' => 'users', 'action' => 'view', $musculation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objetivos'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['objetivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacao'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['observacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($musculation['Musculation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Musculation'), array('action' => 'edit', $musculation['Musculation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Musculation'), array('action' => 'delete', $musculation['Musculation']['id']), null, __('Are you sure you want to delete # %s?', $musculation['Musculation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Musculations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Musculation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
