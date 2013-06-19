<legend>Fase #<?php echo $i + 1; ?></legend>
<?php echo $this->Form->input('AerobicStep.' . $i . '.step', array('value' => $i + 1, 'type' => 'hidden') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.ergometro', array('label' => 'Ergômetro') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.tipo_de_exercicio', array('label' => 'Tipo de Exercício') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.tipo_de_programa', array('label' => 'Tipo de Programa') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_total', array('label' => 'Tempo Total') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.numero_de_sets', array('label' => 'Número de Sets') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.distancia_para_sets', array('label' => 'Distância para Sets') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_para_sets', array('label' => 'Tempo para Sets') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.velocidade_sets', array('label' => 'Velocidade dos Sets') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.tempo_de_recuperacao', array('label' => 'Tempo de Recuperação') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.velocidade_de_recuperacao', array('label' => 'Velocidade de Recuperação') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.inclinacao', array('label' => 'Inclinação') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.resistencia', array('label' => 'Resistência') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.nivel', array('label' => 'Nível') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.distancia_total', array('label' => 'Distância Total') ); ?>
<?php echo $this->Form->input('AerobicStep.' . $i . '.gasto_calorico', array('label' => 'Gasto Calórico') ); ?>