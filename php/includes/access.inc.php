<?php
function isLogged(){
	if (isset($_SESSION['user']))
	{
		return true;
	}
	else
	{
		return FALSE;
	}
}

function getRole()
{
	return $_SESSION['user']['role'];
}
?>