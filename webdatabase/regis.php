<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">level</label>
                <input type="Level" id="Level" name="Level" required>
            </div>
            <button type="submit" name="Submit">Register</button>
            
            
            <?php
             
             include 'koneksi.php';

            if(isset($_POST['Submit'])){
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $password = $_POST["password"];
             $level = $_POST["Level"];



             $result = mysqli_query($mysqli, "INSERT INTO user (nama,email,password,level)
             VALUES('$nama','$email','$password','$level')");


         
       header("location:web.php");
}   
?>

</form>
    
</body>
</html>
