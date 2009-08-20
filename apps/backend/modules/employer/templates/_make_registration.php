<?php
	require "yes_no_logic.php";
	render_yes_no_radios('employer[make_registration]', $employer->getMakeRegistration());
?>