<?php
session_start();//session has started 
if(session_destroy()) // Destroying All Sessions
{
	header("Location: watWk9.php"); // Redirecting To Home Page
}
?>