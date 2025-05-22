<?php

session_start();
require_once __DIR__ . '/includes/auth.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Error | Parseh Business Plan</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <?php include 'includes/sidebar.php'; ?>
    </div>

    <div class="main-content">
      <div class="content-frame error-box">
        <h1>خطا در سیستم</h1>
        <p>متأسفانه مشکلی در اجرای درخواست شما به‌وجود آمده است.</p>
        <p>لطفاً مجدداً تلاش کنید یا با مدیر سیستم تماس بگیرید.</p>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2019–2025 Parseh Advanced Solutions Co. All rights reserved.</p>
  </footer>
</body>
</html>
