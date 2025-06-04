<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login Admin</h1>
    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['admin'] = $username;
            header("Location: index.php");
        } else {
            echo "<p class='error'>Username atau password salah!</p>";
        }
    }
    ?>
</body>
</html>
