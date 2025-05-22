<?php
	session_start();

// حذف تمام اطلاعات جلسه (جلسه را خاتمه می‌دهد)
	session_unset();
	session_destroy();

// هدایت به صفحه ورود
	header("Location: login.php");
	exit;
?>
