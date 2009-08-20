<?php
	$gender_value = $employer->getGender();
	foreach (EmployerPeer::getGenderChoices() as $k => $v) {
		echo radiobutton_tag('employer[gender]', $k, $gender_value == $k);
		if ($k > 0)
			echo label_for('employer_gender_'.$k, $v);
		else
			echo label_for('employer_gender', $v);
		echo '<br />';
	}
?>