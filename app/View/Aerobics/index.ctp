<div class="aerobics index">
	<h2><?php echo __('Aerobics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('aquecimento'); ?></th>
			<th><?php echo $this->Paginator->sort('fcmax'); ?></th>
			<th><?php echo $this->Paginator->sort('pse'); ?></th>
			<th><?php echo $this->Paginator->sort('objetivo'); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aerobics as $aerobic): ?>
	<tr>
		<td><?php echo h($aerobic['Aerobic']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($aerobic['User']['id'], array('controller' => 'users', 'action' => 'view', $aerobic['User']['id'])); ?>
		</td>
		<td><?php echo h($aerobic['Aerobic']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['aquecimento']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['fcmax']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['pse']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['objetivo']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['observacoes']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['created']); ?>&nbsp;</td>
		<td><?php echo h($aerobic['Aerobic']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $aerobic['Aerobic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $aerobic['Aerobic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $aerobic['Aerobic']['id']), null, __('Are you sure you want to delete # %s?', $aerobic['Aerobic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Aerobic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobic Steps'), array('controller' => 'aerobic_steps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic Step'), array('controller' => 'aerobic_steps', 'action' => 'add')); ?> </li>
	</ul>
</div>
