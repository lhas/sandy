<div class="users index">
	<legend><?php echo __('Usuários'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('username', 'E-mail'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Data de Inserção'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php $data = new DateTime($user['User']['created']); echo $data->format('d/m/Y'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $user['User']['id']), null, __('Você tem certeza que quer excluir este usuário? Esta ação é PERMANENTE!', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, exibindo {:current} registros do total de {:count}, iniciando pelo registro {:start}, terminando no registro {:end}.')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('anterior', array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next('próximo', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(".paging a, .paging span, .actions a").addClass("btn");
	});
</script>