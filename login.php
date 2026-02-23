<?php
session_start();
if (isset($_POST['password'])) {
    // Remplace 'admin123' par le mot de passe de ton choix
    if ($_POST['password'] === 'admin123') {
        $_SESSION['admin_loge'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $erreur = "Mot de passe incorrect !";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion Admin</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #2c3e50; color: white; }
        .login-box { background: #34495e; padding: 30px; border-radius: 8px; text-align: center; }
        input { padding: 10px; margin: 10px; border-radius: 4px; border: none; }
        button { padding: 10px 20px; background: #e74c3c; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Accès Admin 🔒</h2>
        <form method="POST">
            <input type="password" name="password" placeholder="Mot de passe" required><br>
            <button type="submit">Entrer</button>
        </form>
        <?php if(isset($erreur)) echo "<p style='color:#ff7675'>$erreur</p>"; ?>
    </div>
</body>
</html>