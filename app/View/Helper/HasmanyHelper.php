<?php

class HasmanyHelper extends AppHelper {

	public $helpers = array(
		'Form',
		'Html',
		'Js'
	);

	# Inicializa alguns campos necessários para o funcionamento do helper.
	public function init($id = 'Hasmany') {
		# Inicializa o campo de count
		echo $this->Form->input('i', array('label' => false, 'div' => false, 'name' => 'i', 'value' => '0', 'type' => 'hidden', 'id' => $id) );
		
		# Inicializa a <div> container
		echo '<div id="' . $id . 'Container"></div>';
	}

	public function add_button($id = 'Hasmany', $label = 'Hasmany', $url = array()) {
		# ID do botão a ser gerado
		$btn_id = $id . 'Button';

		# ID do container a ser usado
		$container_id = $id . 'Container';

		# Gera o botão de inserção
		echo $this->Html->link($label, 'javascript:;', array('class' => 'btn btn-primary', 'id' => $btn_id, 'escape' => false, 'style' => 'margin-top: 10px; margin-bottom: 10px;') );

		# Gera a URL a ser usada na requisição AJAX
		$url = $this->Html->url($url);

		$script = "<script type='text/javascript'>\n";
		$script .= "	$(document).ready(function() {\n";
		$script .= "		$('#$btn_id').on('click', function() {\n";
		$script .= "			$.ajax({type: 'POST', url: '$url', data: {'i': $('#$id').val()}, success: function(data) { var i_value = parseInt($('#$id').val()); $('#$id').val(i_value + 1); $('#$container_id').append(data); } });\n";
		$script .= "		});\n";
		$script .= "	});\n";
		$script .= "</script>";

		echo $script;

		// echo $this->
		// Js->
		// get('#' . $btn_id)->
		// event('click',
		// 	$this->Js->request(
		// 		array('action' => 'ajax_' . strtolower($id) . '_fields' ),
		// 		array('async' => true, 'update' => '', 'success' => $add_button_success_callback, 'data' => array('i' => '$(#$btn_id).val()') )
		// 	)
		// );
	}
}