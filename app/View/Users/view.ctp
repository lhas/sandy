<div class="users view">
<legend><?php  echo __('Visualização do Usuário'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<dl>
		<dt><?php echo __('E-mail'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<?php foreach ($user['UserMeta'] as $userMeta): ?>
		<dt><?php echo $userMeta['label']; ?></dt>
		<dd>
			<?php echo $userMeta['value']; ?>
		</dd>
		<?php endforeach; ?>
		<dt><?php echo __('Data de Inserção'); ?></dt>
		<dd>
			<?php $data = new DateTime($user['User']['created']); echo $data->format('d/m/Y'); ?>
			&nbsp;
		</dd>
	</dl>
</div>