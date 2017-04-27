<?php 

	session_start();

	require 'Controllers/DB.php';

	$db = new DB();
	$lol = $db->logDB('localhost', 'reddingue', 'root', 'root');