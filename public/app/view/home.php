<?php
session_start();
if(!$_SESSION['user'])
{
    header('Location: app/session/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> <?= $_SESSION['user'] ?>, You're connected!</h1>

    <a href="app/session/logout.php">Log out</a>
</body>
</html>