<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php  echo __('Edição do Usuário'); ?> <?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn', 'escape' => false) ); ?></legend>
	<?php
		echo $this->Form->input('id');

		# E-mail
		echo $this->Form->input('username', array('label' => 'E-mail', 'required' => false) );

		# Cargo
		echo $this->Form->input('cargo', array('label' => 'Cargo', 'options' => array('admin' => 'Administrador', 'aluno' => 'Aluno'), 'required' => false) );

		# Data de Nascimento
		echo $this->Form->hidden('UserMeta.0.id');
		echo $this->Form->hidden('UserMeta.0.label', array('value' => 'Data de Nascimento') );
		echo $this->Form->hidden('UserMeta.0.key', array('value' => 'data_de_nascimento') );
		echo $this->Form->input('UserMeta.0.value', array('label' => 'Data de Nascimento') );

		# Endereço
		echo $this->Form->hidden('UserMeta.1.id');
		echo $this->Form->hidden('UserMeta.1.label', array('value' => 'Endereço') );
		echo $this->Form->hidden('UserMeta.1.key', array('value' => 'endereco') );
		echo $this->Form->input('UserMeta.1.value', array('label' => 'Endereço') );

		# Telefone Celular
		echo $this->Form->hidden('UserMeta.2.id');
		echo $this->Form->hidden('UserMeta.2.label', array('value' => 'Telefone Celular') );
		echo $this->Form->hidden('UserMeta.2.key', array('value' => 'telefone_celular') );
		echo $this->Form->input('UserMeta.2.value', array('label' => 'Telefone Celular') );

		# Telefone Residencial
		echo $this->Form->hidden('UserMeta.3.id');
		echo $this->Form->hidden('UserMeta.3.label', array('value' => 'Telefone Residencial') );
		echo $this->Form->hidden('UserMeta.3.key', array('value' => 'telefone_residencial') );
		echo $this->Form->input('UserMeta.3.value', array('label' => 'Telefone Residencial') );

		# Fuma?
		echo $this->Form->hidden('UserMeta.4.id');
		echo $this->Form->hidden('UserMeta.4.label', array('value' => 'Fuma?') );
		echo $this->Form->hidden('UserMeta.4.key', array('value' => 'fuma') );
		echo $this->Form->input('UserMeta.4.value', array('label' => 'Fuma?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Bebe?
		echo $this->Form->hidden('UserMeta.5.id');
		echo $this->Form->hidden('UserMeta.5.label', array('value' => 'Bebe?') );
		echo $this->Form->hidden('UserMeta.5.key', array('value' => 'bebe') );
		echo $this->Form->input('UserMeta.5.value', array('label' => 'Bebe?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Hipertenso?
		echo $this->Form->hidden('UserMeta.6.id');
		echo $this->Form->hidden('UserMeta.6.label', array('value' => 'Hipertenso?') );
		echo $this->Form->hidden('UserMeta.6.key', array('value' => 'hipertenso') );
		echo $this->Form->input('UserMeta.6.value', array('label' => 'Hipertenso?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Diabetes?
		echo $this->Form->hidden('UserMeta.7.id');
		echo $this->Form->hidden('UserMeta.7.label', array('value' => 'Diabetes?') );
		echo $this->Form->hidden('UserMeta.7.key', array('value' => 'diabetes') );
		echo $this->Form->input('UserMeta.7.value', array('label' => 'Diabetes?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Hipercolesterolimia?
		echo $this->Form->hidden('UserMeta.8.id');
		echo $this->Form->hidden('UserMeta.8.label', array('value' => 'Hipercolesterolimia?') );
		echo $this->Form->hidden('UserMeta.8.key', array('value' => 'hipercolesterolimia') );
		echo $this->Form->input('UserMeta.8.value', array('label' => 'Hipercolesterolimia?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Stress Diário?
		echo $this->Form->hidden('UserMeta.9.id');
		echo $this->Form->hidden('UserMeta.9.label', array('value' => 'Stress Diário?') );
		echo $this->Form->hidden('UserMeta.9.key', array('value' => 'stress_diario') );
		echo $this->Form->input('UserMeta.9.value', array('label' => 'Stress Diário?', 'options' => array('baixo' => 'Baixo', 'medio' => 'Médio', 'alto' => 'Alto') ) );

		# Período do Dia de maior Stress?
		echo $this->Form->hidden('UserMeta.10.id');
		echo $this->Form->hidden('UserMeta.10.label', array('value' => 'Período do Dia de maior Stress?') );
		echo $this->Form->hidden('UserMeta.10.key', array('value' => 'periodo_do_dia_de_maior_stress') );
		echo $this->Form->input('UserMeta.10.value', array('label' => 'Período do Dia de maior Stress?', 'options' => array('manha' => 'Manha', 'tarde' => 'Tarde', 'noite' => 'Noite') ) );

		# Lesões, Fraturas e/ou dores musculares e articulares?
		echo $this->Form->hidden('UserMeta.11.id');
		echo $this->Form->hidden('UserMeta.11.label', array('value' => 'Lesões, Fraturas e/ou dores musculares e articulares?') );
		echo $this->Form->hidden('UserMeta.11.key', array('value' => 'lesoes_fraturas_ou_dores_musculares_e_articulares') );
		echo $this->Form->input('UserMeta.11.value', array('label' => 'Lesões, Fraturas e/ou dores musculares e articulares?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Local e tipo de fratura
		echo $this->Form->hidden('UserMeta.12.id');
		echo $this->Form->hidden('UserMeta.12.label', array('value' => 'Local e tipo de fratura') );
		echo $this->Form->hidden('UserMeta.12.key', array('value' => 'local_e_tipo_de_fratura') );
		echo $this->Form->input('UserMeta.12.value', array('label' => 'Local e tipo de fratura') );

		# Possui alguma limitação fisica e de mobilidade?
		echo $this->Form->hidden('UserMeta.13.id');
		echo $this->Form->hidden('UserMeta.13.label', array('value' => 'Possui alguma limitação fisica e de mobilidade?') );
		echo $this->Form->hidden('UserMeta.13.key', array('value' => 'possui_alguma_limitacao_fisica_e_de_mobilidade') );
		echo $this->Form->input('UserMeta.13.value', array('label' => 'Possui alguma limitação fisica e de mobilidade?', 'options' => array('nao' => 'Não', 'sim' => 'Sim') ) );

		# Quais limitações?
		echo $this->Form->hidden('UserMeta.14.id');
		echo $this->Form->hidden('UserMeta.14.label', array('value' => 'Quais limitações?') );
		echo $this->Form->hidden('UserMeta.14.key', array('value' => 'quais_limitacoes') );
		echo $this->Form->input('UserMeta.14.value', array('label' => 'Quais limitações?') );

		# Objetivos?
		echo $this->Form->hidden('UserMeta.15.id');
		echo $this->Form->hidden('UserMeta.15.label', array('value' => 'Objetivos') );
		echo $this->Form->hidden('UserMeta.15.key', array('value' => 'objetivos') );
		echo $this->Form->input('UserMeta.15.value', array('label' => 'Objetivos', 'type' => 'textarea') );

		# Enviar
		echo $this->Form->button('<i class="icon-ok"></i> Enviar', array('class' => 'btn btn-success', 'escape' => false) );
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>