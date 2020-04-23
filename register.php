<?php
    include("includes/classes/Account.php");
    $account = new Account();
    $account->register();

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Slopify!</title>
    </head>
    <body>
        <div id="inputContainer">
            <form action="register.php" id="loginForm" method="POST">
                <h2>Login to your account</h2>
                <p>
                    <label for="loginUsername">Username</label>
                    <input id=loginUsername" name="loginUsername" type="text" placeholder=" Username" required>
                </p>
                <p>
                    <label for="loginPassword">Password</label>
                    <input id=loginPassword" name="loginPassword" type="password" required>
                </p>
                <button type="submit" name="loginButton">Log in</button>
            </form>

            <form action="register.php" id="registerForm" method="POST">
                <h2>Create your free account</h2>
                <p>
                    <label for="username">Username</label>
                    <input id=username" name="username" type="text" placeholder="Username" required>
                </p>
                <p>
                    <label for="firstName">First Name</label>
                    <input id=firstName" name="firstName" type="text" placeholder="First Name" required>
                </p>
                <p>
                    <label for="lastName">Last Name</label>
                    <input id=lastName" name="lastName" type="text" placeholder="Last Name" required>
                </p>

                <p>
                    <label for="email">Email</label>
                    <input id=email" name="email" type="email" placeholder="exemple@gmail.com" required>
                </p>
                <p>
                    <label for="email2">Confirm Email</label>
                    <input id=email2" name="email2" type="email" placeholder="exemple@gmail.com" required>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input id=password" name="password" type="password" required>
                </p>
                <p>
                    <label for="password2">Confirm Password</label>
                    <input id=password2" name="password2" type="password" required>
                </p>
                <button type="submit" name="registerButton">Sign up</button>
            </form>
        </div>
    </body>
</html>