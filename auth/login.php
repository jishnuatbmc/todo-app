<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login TODO</title>
</head>

<body>
    <div class="container" style="display: flex; margin:auto;justify-content:center;flex-direction:column;">
        <form action="login/handle-login.php" method="POST" class="login-form" style="display: flex;margin:auto;flex-direction:column;">
            <h2>Login</h2>
            <input style="margin-top:1em;" type="text" name="email" placeholder="Email" />
            <input style="margin-top:1em;" type="password" name="password" placeholder="Password" />
            <button style="margin-top: 2em;">Login</button>
            <a style="margin-top:1em;" href="register.php">Register ?</a>
        </form>
    </div>
</body>

</html>