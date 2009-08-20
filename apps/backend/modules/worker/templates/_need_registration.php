<?php
	require "yes_no_logic.php";
	render_yes_no_radios('worker[need_registration]', $worker->getNeedRegistration());
?>