<div class="musculations form">
<?php echo $this->Form->create('Musculation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Musculation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('inicio');
		echo $this->Form->input('objetivos');
		echo $this->Form->input('observacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Musculation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Musculation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Musculations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
