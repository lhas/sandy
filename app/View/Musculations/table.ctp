<div class="row">
	<div class="span12">
		<table class="table table-bordered">
			<tr>
				<td>
					Nome: <?php echo $serie['User']['UserMeta']['16']['value']; ?>
				</td>
				<td>
					Início: <?php echo $serie['Musculation']['inicio']; ?>
					<?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn pull-right', 'escape' => false) ); ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Objetivos: <?php echo $serie['Musculation']['objetivos']; ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Observações: <?php echo $serie['Musculation']['observacao']; ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Exercício
				</td>
				<td>
					Reg
				</td>
				<td>
					Set/Rep
				</td>
				<td>
					Fase 1
				</td>
				<td>Fase 2</td>
			</tr>
			<?php foreach($serie['MusculationExercise'] as $exercicio) : ?>
			<tr>
				<td>
					<?php echo $exercicio['exercise']; ?>
				</td>
				<td>
					<?php echo $exercicio['reg']; ?>
				</td>
				<td>
					<?php echo $exercicio['set_rep']; ?>
				</td>
				<td>
					<?php echo $exercicio['fase_1']; ?>
				</td>
				<td>
					<?php echo $exercicio['fase_2']; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>