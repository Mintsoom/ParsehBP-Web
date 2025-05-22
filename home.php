<?php

	session_start();
	require_once "config.php";
	require_once "includes/auth.php";
	require_once "functions/check_access.php";

// اگر کاربر لاگین نکرده باشد، به صفحه login هدایت شود
	if (!isset($_SESSION['username'])) {
	    header("Location: login.php");
	    exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title>Business Plan Portal</title>
	    <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>

	<div class="container">

	    <!-- Sidebar -->
	    <div class="sidebar">
	        <h2>Project Menu</h2>
	        <ul>
	            <li><a href="home.php" target="contentFrame">Home</a></li>
	            <li><a href="phases/phase1/intro.php" target="contentFrame">Phase 1</a>
	                <ul>
        	            <li><a href="phases/phase1/intro.php" target="contentFrame">Intro</a></li>
  	                  <li><a href="phases/phase1/services.php" target="contentFrame">Services</a></li>
  	                  <li><a href="phases/phase1/hrlog.php" target="contentFrame">HR & Logistics</a></li>
  	                  <li><a href="phases/phase1/sales.php" target="contentFrame">Sales</a></li>
  	                  <li><a href="phases/phase1/fin.php" target="contentFrame">Finance</a></li>
  	                  <li><a href="phases/phase1/canvas.php" target="contentFrame">Canvas</a></li>
  	              </ul>
  	          </li>
  	          <li><a href="phases/phase2/intro.php" target="contentFrame">Phase 2</a>
  	              <ul>
  	                  <li><a href="phases/phase2/intro.php" target="contentFrame">Intro</a></li>
  	                  <li><a href="phases/phase2/services.php" target="contentFrame">Services</a></li>
  	                  <li><a href="phases/phase2/hrlog.php" target="contentFrame">HR & Logistics</a></li>
  	                  <li><a href="phases/phase2/sales.php" target="contentFrame">Sales</a></li>
  	                  <li><a href="phases/phase2/fin.php" target="contentFrame">Finance</a></li>
  	                  <li><a href="phases/phase2/canvas.php" target="contentFrame">Canvas</a></li>
  	              </ul>
  	          </li>
  	          <li><a href="phases/phase3/intro.php" target="contentFrame">Phase 3</a>
  	              <ul>
  	                  <li><a href="phases/phase3/intro.php" target="contentFrame">Intro</a></li>
  	                  <li><a href="phases/phase3/services.php" target="contentFrame">Services</a></li>
  	                  <li><a href="phases/phase3/hrlog.php" target="contentFrame">HR & Logistics</a></li>
  	                  <li><a href="phases/phase3/sales.php" target="contentFrame">Sales</a></li>
  	                  <li><a href="phases/phase3/fin.php" target="contentFrame">Finance</a></li>
  	                  <li><a href="phases/phase3/canvas.php" target="contentFrame">Canvas</a></li>
  	              </ul>
  	          </li>
  	          <li><a href="phases/phase4/intro.php" target="contentFrame">Phase 4</a>
  	              <ul>
  	                  <li><a href="phases/phase4/intro.php" target="contentFrame">Intro</a></li>
  	                  <li><a href="phases/phase4/services.php" target="contentFrame">Services</a></li>
  	                  <li><a href="phases/phase4/hrlog.php" target="contentFrame">HR & Logistics</a></li>
  	                  <li><a href="phases/phase4/sales.php" target="contentFrame">Sales</a></li>
  	                  <li><a href="phases/phase4/fin.php" target="contentFrame">Finance</a></li>
	                    <li><a href="phases/phase4/canvas.php" target="contentFrame">Canvas</a></li>
	                </ul>
	            </li>
	            <li><a href="logout.php">Logout</a></li>
	        </ul>
	    </div>
	
    <!-- Main Content -->

	    <div class="content">
	        <iframe name="contentFrame" src="welcome.php" frameborder="0"></iframe>

	        <footer>
	            Parseh Advanced Solutions Co. &copy; 2019–2025
	        </footer>
	    </div>

	</div>

</body>
</html>
