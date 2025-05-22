<?php

	session_start();
	$loggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	    <meta charset="UTF-8">
	    <title>Parseh Business Plan</title>
	    <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
	    <div class="container">
	        <nav class="sidebar">
        	    <h2>Navigation</h2>
        	    <ul>
        	        <li><a href="home.php" target="contentFrame">Home</a></li>
        	        <li>Phase 1
        	            <ul>
        	                <li><a href="phase1/intro.php" target="contentFrame">Intro</a></li>
        	                <li><a href="phase1/services.php" target="contentFrame">Services</a></li>
        	                <li><a href="phase1/hrlog.php" target="contentFrame">HR Log</a></li>
        	                <li><a href="phase1/sales.php" target="contentFrame">Sales</a></li>
        	                <li><a href="phase1/fin.php" target="contentFrame">Financial</a></li>
        	                <li><a href="phase1/canvas.php" target="contentFrame">Canvas</a></li>
        	            </ul>
        	        </li>
        	        <li>Phase 2
        	            <ul>
        	                <li><a href="phase2/intro.php" target="contentFrame">Intro</a></li>
        	                <li><a href="phase2/services.php" target="contentFrame">Services</a></li>
        	                <li><a href="phase2/hrlog.php" target="contentFrame">HR Log</a></li>
        	                <li><a href="phase2/sales.php" target="contentFrame">Sales</a></li>
        	                <li><a href="phase2/fin.php" target="contentFrame">Financial</a></li>
        	                <li><a href="phase2/canvas.php" target="contentFrame">Canvas</a></li>
        	            </ul>
        	        </li>
        	        <li>Phase 3
        	            <ul>
        	                <li><a href="phase3/intro.php" target="contentFrame">Intro</a></li>
        	                <li><a href="phase3/services.php" target="contentFrame">Services</a></li>
        	                <li><a href="phase3/hrlog.php" target="contentFrame">HR Log</a></li>
        	                <li><a href="phase3/sales.php" target="contentFrame">Sales</a></li>
        	                <li><a href="phase3/fin.php" target="contentFrame">Financial</a></li>
        	                <li><a href="phase3/canvas.php" target="contentFrame">Canvas</a></li>
               		    </ul>
            	    	</li>
         	       <li>Phase 4
         	           <ul>
         	               <li><a href="phase4/intro.php" target="contentFrame">Intro</a></li>
         	               <li><a href="phase4/services.php" target="contentFrame">Services</a></li>
         	               <li><a href="phase4/hrlog.php" target="contentFrame">HR Log</a></li>
              	 	       <li><a href="phase4/sales.php" target="contentFrame">Sales</a></li>
                	       <li><a href="phase4/fin.php" target="contentFrame">Financial</a></li>
                	       <li><a href="phase4/canvas.php" target="contentFrame">Canvas</a></li>
           	         </ul>
      		      </li>
 
	       	     <?php if (!$loggedIn): ?>
              	     <li><a href="login.php">Login</a></li>
            	     <?php else: ?>
                     <li><a href="logout.php">Logout</a></li>
           	     <?php endif; ?>
           	 </ul>
      	  </nav>

        <main class="content">
            <iframe name="contentFrame" src="home.php" frameborder="0"></iframe>
        </main>
    </div>

    <footer>
        Parseh Advanced Solutions Co. &copy; 2019–2025
    </footer>
</body>
</html>
