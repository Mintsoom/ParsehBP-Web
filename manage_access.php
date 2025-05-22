<?php
session_start();
require_once __DIR__ . '/includes/auth.php';

if ($_SESSION['username'] !== 'admin') {
    header('Location: unauthorized.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['access'])) {
    $accessData = $_POST['access'];

    // ساختار نهایی که در فایل json ذخیره می‌شود
    $finalAccess = [];

    foreach ($accessData as $username => $pages) {
        $finalAccess[$username] = array_values(array_unique($pages)); // حذف مقادیر تکراری
    }

    file_put_contents(__DIR__ . '/data/access.json', json_encode($finalAccess, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    header('Location: access_manager.php?updated=1');
    exit;
} else {
    header('Location: access_manager.php?error=1');
    exit;
}
