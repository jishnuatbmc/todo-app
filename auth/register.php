<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register TODO</title>
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register/handle-register.php" class="register-form" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confirm_password" placeholder="Confirm Password">
            <button>Register</button>
        </form>

    </div>
</body>

</html>