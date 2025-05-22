<?php
require_once __DIR__ . '/includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Unauthorized Access</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .unauthorized-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
      padding: 20px;
    }

    .unauthorized-container h1 {
      font-size: 2rem;
      color: #dc3545;
    }

    .unauthorized-container p {
      font-size: 1.1rem;
      margin: 10px 0;
      color: #333;
    }

    .unauthorized-container a {
      margin-top: 20px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #0d6efd;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    .unauthorized-container a:hover {
      background-color: #0b5ed7;
    }

    @media (max-width: 768px) {
      .unauthorized-container h1 {
        font-size: 1.5rem;
      }

      .unauthorized-container p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="unauthorized-container">
    <h1>شما اجازه دسترسی به این صفحه را ندارید</h1>
    <p>لطفاً برای مشاهده محتوای این صفحه با حساب کاربری مجاز وارد شوید.</p>
    <a href="login.php">ورود به حساب کاربری</a>
  </div>
</body>
</html>
