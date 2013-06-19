<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Aerobics'), array('controller' => 'aerobics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic'), array('controller' => 'aerobics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Musculations'), array('controller' => 'musculations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Musculation'), array('controller' => 'musculations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Metas'), array('controller' => 'user_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Meta'), array('controller' => 'user_metas', 'action' => 'add')); ?> </li>
	</ul>
</div>
