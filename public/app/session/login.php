<?php
session_start();
require_once('backend.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app/css/style.css">
    <title>Login</title>
</head>

<body>
    <main class="container">
        <div class="wrapper">
        <form action="#" method="post">
            <h3>Log-in</h3>
            <div>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password">
            </div>
            <button>Enter</button>
        </form>
        <div class="error">
                <?php if ($_SESSION['errors']): ?>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <p><?= $error ?></p>
                    <?php endforeach?>
                <?php endif ?>
        </div>
        </div>
    </main>
</body>

</html>