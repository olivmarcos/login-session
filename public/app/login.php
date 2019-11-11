<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($_POST['email']) {
    $users = [
        [
            "name" => "Narcos Oliveira",
            "email" => "marcos@email.com",
            "password" => "159753",
        ],
        [
            "name" => "Ana Carolina",
            "email" => "anacarolina@email.com",
            "password" => "147852",
        ],
    ];

    foreach ($users as $user) {
        $validEmail = $email === $user['email'];
        $validPass = $password === $user['password'];


        if ($validEmail && $validPass) {
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];
            header('Location: app/home.php');
        }
  
    }

    if(!$_SESSION['user'])
    {
        $_SESSION['errors'] = ["Usuário/Senha inválido!"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app/css/style.css">
    <title>Login</title>
</head>

<body>
    <main class="container">
        <form action="#" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <button>Enter</button>
        </form>
        <div class="error">
                <?php 
                if($_SESSION['errors'])
                {  
                    var_dump($_SESSION['errors']);
                }
                ?>
        </div>
    </main>
</body>

</html>