<?php 
	 function is_username($username)
	{
		$parttern = "[A-Za-z0-9]{6,32}";
		if (preg_match($parttern, $username)) 
			return true;
	}
	 function is_password($password)
	{
		$parttern = "[A_Z]{1}{6,31}";
		if (!preg_match($parttern, $password)) {
			return true;
		}
	}
	 function set_value($label_field)
	{
		global $$label_field;
		if (isset($$label_field))
			echo $$label_field;
	}
	function form_error($label_field)
	{
		global $error;
		if (isset($error[$label_field])) {
			echo "<p class='text-danger'>{$error[$label_field]} </p>";
		} 
	}
 ?>