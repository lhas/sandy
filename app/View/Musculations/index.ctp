<div class="musculations index">
	<legend><?php echo __('Séries de Musculação'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id', 'Usuário'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio', 'Data de Início da Série'); ?></th>
			<th><?php echo $this->Paginator->sort('created', 'Data de Inserção'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($musculations as $musculation): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($musculation['User']['UserMeta']['16']['value'], array('controller' => 'users', 'action' => 'view', $musculation['User']['id'])); ?>
		</td>
		<td><?php echo h($musculation['Musculation']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($musculation['Musculation']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $musculation['Musculation']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $musculation['Musculation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $musculation['Musculation']['id']), null, __('Você tem certeza disto? Esta ação é PERMANENTE!', $musculation['Musculation']['id'])); ?>
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