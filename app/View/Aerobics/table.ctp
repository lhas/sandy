<div class="row">
	<div class="span12">
		<table class="table table-bordered">
			<tr>
				<td>
					Nome: <?php echo $serie['User']['UserMeta']['16']['value']; ?>
				</td>
				<td>
					Início: <?php echo $serie['Aerobic']['inicio']; ?>
					<?php echo $this->Html->link('<i class="icon-chevron-sign-left"></i> Voltar', array('controller' => 'users', 'action' => 'dashboard'), array('class' => 'btn pull-right', 'escape' => false) ); ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Aquecimento: <?php echo $serie['Aerobic']['aquecimento']; ?>
				</td>
				<td>
					FCmax: <?php echo $serie['Aerobic']['fcmax']; ?>
				</td>
				<td>
					PSE: <?php echo $serie['Aerobic']['pse']; ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Objetivos: <?php echo $serie['Aerobic']['objetivo']; ?>
				</td>
			</tr>
		</table>
		<table class="table table-bordered">
			<tr>
				<td>
					Observações: <?php echo $serie['Aerobic']['observacoes']; ?>
				</td>
			</tr>
		</table>
		<?php
			$total_fases = count($serie['AerobicStep']);
		?>
		<table class="table table-bordered">
			<tr>
				<td>
					Semana
				</td>
				<td>
					Fase 1
				</td>
				<td>
					Fase 2
				</td>
				<td>
					Fase 3
				</td>
				<td>
					Fase 4
				</td>
			</tr>
			<tr>
				<td>
					Ergômetro
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['ergometro']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['ergometro']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['ergometro']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['ergometro']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Tipo de Exerc.
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['tipo_de_exercicio']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['tipo_de_exercicio']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['tipo_de_exercicio']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['tipo_de_exercicio']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Tipo de Prog.
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['tipo_de_programa']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['tipo_de_programa']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['tipo_de_programa']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['tipo_de_programa']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Tempo Total
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['tempo_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['tempo_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['tempo_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['tempo_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Nº de Sets
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['numero_de_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['numero_de_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['numero_de_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['numero_de_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Distância p/ Sets
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['distancia_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['distancia_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['distancia_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['distancia_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Tempo p/ Sets
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['tempo_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['tempo_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['tempo_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['tempo_para_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Vel. Sets
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['velocidade_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['velocidade_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['velocidade_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['velocidade_sets']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Tempo de Rec.
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['tempo_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['tempo_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['tempo_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['tempo_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Vel. Rec.
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['velocidade_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['velocidade_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['velocidade_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['velocidade_de_recuperacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Inclinação
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['inclinacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['inclinacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['inclinacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['inclinacao']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Resistência
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['resistencia']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['resistencia']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['resistencia']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['resistencia']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Nível
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['nivel']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['nivel']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['nivel']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['nivel']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Dist. Total
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['distancia_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['distancia_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['distancia_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['distancia_total']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
			<tr>
				<td>
					Gasto Calórico
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 1) : ?>
							<?php echo $value['gasto_calorico']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 2) : ?>
							<?php echo $value['gasto_calorico']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 3) : ?>
							<?php echo $value['gasto_calorico']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
				<td>
					<?php foreach($serie['AerobicStep'] as $value) : ?>
						<?php if($value['step'] == 4) : ?>
							<?php echo $value['gasto_calorico']; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</td>
			</tr>
		</table>
	</div>
</div>