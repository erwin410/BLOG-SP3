<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../styling/login.css">
</head>
<body>
    <div class="content">
        <div class="text">Login Form</div>
        <form action="../backend/authenticate.php" method="post">
            <div class="field">
                <span class="fas fa-user"></span>
                <input type="text" name="username" id="username"required>
                <label>Username</label>
            </div>

            <div class="field">
                <span class="fas fa-lock"></span>
                <input type="password" name="password" id="password"required>
                <label>Password</label>
            </div>
            <button name="submit">Sign in</button>
        </form>
    </div>
</body>
</html>