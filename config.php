<?php
	$host = 'localhost';
	$dbname = 'parsehs1_business_plan';
	$username = 'parsehs1';
	$password = '0spfr0utinG';

	try {
		$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("Database connection failed: " . $e->getMessage());
	}
?>
