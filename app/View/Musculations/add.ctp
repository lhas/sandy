<div class="musculations form">
<?php echo $this->Form->create('Musculation'); ?>
	<fieldset>
		<legend><?php echo __('Add Musculation'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Musculations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
