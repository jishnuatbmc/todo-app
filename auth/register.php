<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register TODO</title>
</head>

<body>
    <div class="container" style="display: flex; margin:auto;justify-content:center;flex-direction:column;">
        <form action="register/handle-register.php" class="register-form" method="post" style="display: flex;margin:auto;flex-direction:column;">
            <h2>Register</h2>
            <input style="margin-top:1em;" type="text" name="email" placeholder="Email">
            <input style="margin-top:1em;" type="password" name="password" placeholder="Password">
            <input style="margin-top:1em;" type="password" name="confirm_password" placeholder="Confirm Password">
            <button style="margin-top: 2em;">Register</button>
            <a style="margin-top:1em;" href="login.php">Login ?</a>
        </form>

    </div>
</body>

</html>