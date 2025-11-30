<?php
// signup.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - QuickPOS</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f8f9fa; }
        .signup-container { max-width: 400px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 0.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; margin-bottom: 1.5rem; color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; font-weight: 500; }
        input { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.375rem; font-size: 1rem; }
        input:focus { outline: 2px solid #007bff; border-color: #007bff; }
        .btn { background: #007bff; color: white; padding: 0.75rem; border: none; border-radius: 0.375rem; font-size: 1rem; cursor: pointer; width: 100%; }
        .btn:hover { background: #0056b3; }
        .back-link { text-align: center; margin-top: 1rem; }
        .back-link a { color: #007bff; text-decoration: none; }
    </style>
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