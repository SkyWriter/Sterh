<?php
	if (!function_exists('render_yes_no_radios')) {
		function render_yes_no_radios($field, $value)
		{
			$yes_no_values = array (
				0 => 'нет',
				1 => 'да'
			);		
			
			$underscoped_field = str_replace(']', '', (str_replace('[', '_', $field)));
			foreach ($yes_no_values as $k => $v) {
				echo radiobutton_tag($field, $k, $value == $k);
				if ($k > 0)
					echo label_for($underscoped_field."_".$k, $v);
				else 
					echo label_for($underscoped_field, $v);
				echo '<br />';
			}
		}
	}
?>