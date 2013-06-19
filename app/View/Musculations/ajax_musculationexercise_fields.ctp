<legend>Exercício #<?php echo $i + 1; ?></legend>
<?php echo $this->Form->input('MusculationExercise.' . $i . '.exercise', array('label' => 'Exercício') ); ?>
<?php echo $this->Form->input('MusculationExercise.' . $i . '.reg', array('label' => 'Reg.') ); ?>
<?php echo $this->Form->input('MusculationExercise.' . $i . '.set_rep', array('label' => 'Set./Rep.') ); ?>
<?php echo $this->Form->input('MusculationExercise.' . $i . '.fase_1', array('label' => 'Fase 1') ); ?>
<?php echo $this->Form->input('MusculationExercise.' . $i . '.fase_2', array('label' => 'Fase 2') ); ?>