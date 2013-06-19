<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aerobics'), array('controller' => 'aerobics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aerobic'), array('controller' => 'aerobics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Musculations'), array('controller' => 'musculations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Musculation'), array('controller' => 'musculations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Metas'), array('controller' => 'user_metas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Meta'), array('controller' => 'user_metas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Aerobics'); ?></h3>
	<?php if (!empty($user['Aerobic'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Aquecimento'); ?></th>
		<th><?php echo __('Fcmax'); ?></th>
		<th><?php echo __('Pse'); ?></th>
		<th><?php echo __('Objetivo'); ?></th>
		<th><?php echo __('Observacoes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Aerobic'] as $aerobic): ?>
		<tr>
			<td><?php echo $aerobic['id']; ?></td>
			<td><?php echo $aerobic['user_id']; ?></td>
			<td><?php echo $aerobic['inicio']; ?></td>
			<td><?php echo $aerobic['aquecimento']; ?></td>
			<td><?php echo $aerobic['fcmax']; ?></td>
			<td><?php echo $aerobic['pse']; ?></td>
			<td><?php echo $aerobic['objetivo']; ?></td>
			<td><?php echo $aerobic['observacoes']; ?></td>
			<td><?php echo $aerobic['created']; ?></td>
			<td><?php echo $aerobic['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aerobics', 'action' => 'view', $aerobic['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aerobics', 'action' => 'edit', $aerobic['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aerobics', 'action' => 'delete', $aerobic['id']), null, __('Are you sure you want to delete # %s?', $aerobic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aerobic'), array('controller' => 'aerobics', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Musculations'); ?></h3>
	<?php if (!empty($user['Musculation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Inicio'); ?></th>
		<th><?php echo __('Objetivos'); ?></th>
		<th><?php echo __('Observacao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Musculation'] as $musculation): ?>
		<tr>
			<td><?php echo $musculation['id']; ?></td>
			<td><?php echo $musculation['user_id']; ?></td>
			<td><?php echo $musculation['inicio']; ?></td>
			<td><?php echo $musculation['objetivos']; ?></td>
			<td><?php echo $musculation['observacao']; ?></td>
			<td><?php echo $musculation['created']; ?></td>
			<td><?php echo $musculation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'musculations', 'action' => 'view', $musculation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'musculations', 'action' => 'edit', $musculation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'musculations', 'action' => 'delete', $musculation['id']), null, __('Are you sure you want to delete # %s?', $musculation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Musculation'), array('controller' => 'musculations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Metas'); ?></h3>
	<?php if (!empty($user['UserMeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Key'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserMeta'] as $userMeta): ?>
		<tr>
			<td><?php echo $userMeta['id']; ?></td>
			<td><?php echo $userMeta['user_id']; ?></td>
			<td><?php echo $userMeta['key']; ?></td>
			<td><?php echo $userMeta['value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_metas', 'action' => 'view', $userMeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_metas', 'action' => 'edit', $userMeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_metas', 'action' => 'delete', $userMeta['id']), null, __('Are you sure you want to delete # %s?', $userMeta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Meta'), array('controller' => 'user_metas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
