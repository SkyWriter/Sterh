<?php
	$gender_value = $worker->getGender();
	foreach (WorkerPeer::getGenderChoices() as $k => $v) {
		echo radiobutton_tag('worker[gender]', $k, $gender_value == $k);
		if ($k > 0)
			echo label_for('worker_gender_'.$k, $v);
		else
			echo label_for('worker_gender', $v);
		echo '<br />';
	}
?>