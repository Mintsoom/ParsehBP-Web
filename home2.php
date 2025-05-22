<?php
	require_once "includes/auth.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Home | Parseh Business Plan</title>
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body>
		<div class="content-container">
			<div class="content-box">
				<h1>Welcome to Parseh Advanced Solutions</h1>
				<p>This website presents our structured business plan in four development phases.</p>
				<p>Each phase provides detailed insights into services, sales, human resources, financials, and strategic planning.</p>
				<p>We invite you to explore the content, evaluate the opportunity, and consider joining us on this exciting journey toward innovation and growth.</p>
			</div>
		</div>
	</body>
</html>





<?php
session_start();
require_once __DIR__ . '/includes/auth.php';
requireLogin(); // بررسی لاگین بودن کاربر
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Home | Parseh Business Plan</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <?php include 'includes/sidebar.php'; ?>
    </div>
    <div class="main-content">
      <div class="content-frame">
        <h1>Welcome to Parseh Business Plan Portal</h1>
        <p>This platform has been designed to present the comprehensive business plan of Parseh Advanced Solutions Co. in four distinct phases.</p>
        <p>You can navigate through each phase and explore the relevant financial charts, service strategies, HR logs, and other critical insights.</p>
        <p>Please use the sidebar to access each section. If you are not authorized to view a specific page, you will receive a message in Persian indicating access restriction.</p>

        <div class="highlights">
          <h2>Highlights</h2>
          <ul>
            <li>4 project phases: from concept to execution</li>
            <li>Dedicated investor-focused design</li>
            <li>Secure access per user authorization</li>
            <li>Responsive and modern interface</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2019–2025 Parseh Advanced Solutions Co. All rights reserved.</p>
  </footer>
</body>
</html>
