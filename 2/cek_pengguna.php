<?php 
if(!isset($_SESSION['email']))
{
	die("Anda belum login");
}

if($_SESSION['level'] !="Pengguna")
{
	die("Anda bukan pengguna sistem ini");
}
?>