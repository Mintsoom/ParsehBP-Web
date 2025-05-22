<?php

	session_start();
	require_once "config.php";
	require_once "includes/auth.php";

// بررسی اگر کاربر قبلاً وارد سیستم شده باشد
	if (isset($_SESSION['username'])) {
	    header("Location: home.php");
	    exit;
	}

	$errorMessage = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $username = $_POST['username'];
	    $password = $_POST['password'];

    // اعتبارسنجی اطلاعات وارد شده
	    if (empty($username) || empty($password)) {
	        $errorMessage = "لطفاً نام کاربری و رمز عبور را وارد کنید.";
	    } else {
    // بررسی اعتبارنام کاربری و رمز عبور
	        $sql = "SELECT * FROM users WHERE username = ?";
	        $stmt = $conn->prepare($sql);
	        $stmt->bind_param("s", $username);
	        $stmt->execute();
	        $result = $stmt->get_result();

	        if ($result->num_rows > 0) {
	            $user = $result->fetch_assoc();
       			if (password_verify($password, $user['password'])) {
   		             $_SESSION['username'] = $username;
        		     header("Location: home.php");
        		     exit;
       			} else {
                		$errorMessage = "نام کاربری یا رمز عبور اشتباه است.";
            		}
        	} else {
        	    $errorMessage = "نام کاربری یا رمز عبور اشتباه است.";
        	}
    	   }
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title>Login</title>
	    <link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>

		<div class="login-container">
			<h2>Login to Your Account</h2>

			<?php if (!empty($errorMessage)): ?>
        		<div class="error-message">
        			<?php echo $errorMessage; ?>
        		</div>
    			<?php endif; ?>

			<form action="login.php" method="POST">
				<div class="form-group">
        				<label for="username">نام کاربری</label>
        				<input type="text" id="username" name="username" required>
        			</div>

        			<div class="form-group">
					<label for="password">رمز عبور</label>
        				<input type="password" id="password" name="password" required>
        			</div>
        
				<button type="submit">ورود</button>
			</form>
		</div>

	</body>
</html>





<?php
session_start();

if (isset($_SESSION['username'])) {
  header("Location: home.php");
  exit();
}

$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>ورود به حساب کاربری</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #0d6efd;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border: 1px solid #ced4da;
      border-radius: 8px;
      font-size: 1rem;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #0d6efd;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-container input[type="submit"]:hover {
      background-color: #0b5ed7;
    }

    .error-message {
      color: #dc3545;
      margin-bottom: 15px;
      text-align: center;
    }

    @media (max-width: 480px) {
      .login-container {
        margin: 40px 20px;
        padding: 20px;
      }

      .login-container h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>ورود به حساب کاربری</h2>
    
    <?php if (!empty($error)): ?>
      <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    
    <form action="includes/auth.php" method="POST">
      <input type="text" name="username" placeholder="نام کاربری" required>
      <input type="password" name="password" placeholder="رمز عبور" required>
      <input type="submit" value="ورود">
    </form>
  </div>
</body>
</html>
