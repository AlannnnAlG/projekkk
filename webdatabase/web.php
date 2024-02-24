<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <a href="login.php"><button type="submit">Login</button></a>
            </div>
            <div class="input-group">
            <label>Register jika belum punya akun </label>
            </div>
            
            <br>
                 <a href="regis.php"><tombol type="submit">Register</tombol></a>
            
        </form>
    </div>
</body>
</html>
