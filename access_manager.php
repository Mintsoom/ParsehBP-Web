<?php
session_start();
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/functions/check_access.php';

// فقط مدیر (خود شما) اجازه دسترسی دارد
if ($_SESSION['username'] !== 'admin') {
    header('Location: unauthorized.php');
    exit;
}

$users = json_decode(file_get_contents(__DIR__ . '/data/users.json'), true);
$access = json_decode(file_get_contents(__DIR__ . '/data/access.json'), true);

$phases = ['phase1', 'phase2', 'phase3', 'phase4'];
$pages = ['intro', 'services', 'hrlog', 'sales', 'fin', 'canvas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Access Manager | Parseh Business Plan</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <?php include 'includes/sidebar.php'; ?>
    </div>

    <div class="main-content">
      <div class="content-frame">
        <h1>مدیریت دسترسی کاربران</h1>
        <form action="manage_access.php" method="POST">
          <table>
            <thead>
              <tr>
                <th>نام کاربری</th>
                <?php foreach ($phases as $phase): ?>
                  <?php foreach ($pages as $page): ?>
                    <th><?= $phase ?>/<?= $page ?></th>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= htmlspecialchars($user['username']) ?></td>
                  <?php foreach ($phases as $phase): ?>
                    <?php foreach ($pages as $page): 
                      $key = $phase . '/' . $page;
                      $checked = in_array($key, $access[$user['username']] ?? []) ? 'checked' : '';
                    ?>
                      <td><input type="checkbox" name="access[<?= $user['username'] ?>][]" value="<?= $key ?>" <?= $checked ?>></td>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <button type="submit" class="btn">ذخیره تغییرات</button>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2019–2025 Parseh Advanced Solutions Co. All rights reserved.</p>
  </footer>
</body>
</html>
