<div class="users form">
	<?php echo $this->Form->create('User'); ?>

	<fieldset>
		<legend>
			<?php echo __('Por favor, insira seu e-mail e senha.'); ?>
		</legend>

		<?php
			echo $this->Form->input('username', array('label' => 'E-mail') );
			echo $this->Form->input('password', array('label' => 'Senha') );
			echo $this->Form->submit('<i class="icon-ok"></i> Entrar', array('class' => 'btn btn-success') );
		?>
	</fieldset>

	<?php echo $this->Form->end(); ?>
</div>