<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - QuickPOS</title>
    <link rel="stylesheet" href="/css/signup.css">
</head>
<body>
    <div class="signup-container">
        <h1>Sign Up for QuickPOS</h1>
        <form method="POST" action="process-signup.php">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <div class="back-link">
            <a href="/">&larr; Back to Home</a>
        </div>
    </div>
</body>
</html>