<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="" method="POST">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required/>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
