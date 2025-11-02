<?php
session_start();

// Proteksi: hanya admin yang boleh akses
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: admin_login.php");
    exit;
}

// Ambil nama admin
$admin_name = $_SESSION['user_name'] ?? 'Admin';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f5f5f5; }
        .navbar { background: #c62828; color: white; padding: 15px 20px; }
        .container { padding: 20px; }
        h1 { margin-top: 0; }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>🛡️ Dashboard Admin</h2>
    </div>
    <div class="container">
        <h1>Halo, <?= htmlspecialchars($admin_name) ?>!</h1>
        <p>Selamat datang di dashboard admin. Ini halaman uji coba.</p>
        <p><a href="admin_logout.php" style="color: #c62828;">Logout</a></p>
    </div>
</body>
</html>