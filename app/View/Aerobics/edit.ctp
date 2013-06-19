<div class="aerobics form">
<?php echo $this->Form->create('Aerobic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Aerobic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('inicio');
		echo $this->Form->input('aquecimento');
		echo $this->Form->input('fcmax');
		echo $this->Form->input('pse');
		echo $this->Form->input('objetivo');
		echo $this->Form->input('observacoes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aerobic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aerobic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aerobics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobic Steps'), array('controller' => 'aerobic_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic Step'), array('controller' => 'aerobic_steps', 'action' => 'add')); ?> </li>
	</ul>
</div>
