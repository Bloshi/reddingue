<?php 

	session_start();

	require 'Class/DB.php';

	$db = new DB();
	$lol = $db->logDB('localhost', 'reddingue', 'root', 'root');