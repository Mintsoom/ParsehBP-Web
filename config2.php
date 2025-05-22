<?php
// شروع جلسه
	session_start();

// تنظیم ناحیه زمانی پیش‌فرض
	date_default_timezone_set("Asia/Tehran");

// اطلاعات اتصال به پایگاه داده
	define("DB_HOST", "localhost");
	define("DB_NAME", "parsehs1_business_plan");
	define("DB_USER", "parsehs1");
	define("DB_PASS", "0spfr0utinG");

// اتصال به پایگاه داده با PDO
	try {
		$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("خطا در اتصال به پایگاه داده: " . $e->getMessage());
	}
