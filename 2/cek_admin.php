<?php 
if(!isset($_SESSION['email']))
{
	die("Anda belum login");
}

if($_SESSION['level'] !="Admin")
{
	die("Anda bukan pentadbir");
}
?>