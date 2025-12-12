
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f3f3f3; }
        .box {
            width: 300px; margin: 100px auto; padding: 20px;
            background: white; border-radius: 10px; text-align: center;
        }
        input { width: 90%; margin: 10px 0; padding: 10px; }
        button { padding: 10px 20px; width: 100%; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Login</h2>

        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Login</button>
        </form>

        <p>Don’t have an account? <a href="register.html">Register</a></p>
    </div>
</body>
</html>