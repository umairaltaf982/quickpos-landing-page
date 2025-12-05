<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign up for QuickPOS - The modern point of sale system for your business.">
    <link rel="icon" type="image/png" href="QUIC-7-logo.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up - QuickPOS</title>
</head>
<body>
    <div class="signup-container">
        <a href="index.php" class="signup-logo">
            <img src="QUIC-7-logo.png" alt="QuickPOS" style="height:48px;">
        </a>
        <h1>Sign Up for QuickPOS</h1>
        <form method="POST" action="process-signup.php">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="john@example.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a strong password" required>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <div class="back-link">
            <a href="index.php">&larr; Back to Home</a>
        </div>
    </div>
</body>
</html>