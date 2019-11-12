<?php
$email = $_POST['email'];
$password = $_POST['password'];

if ($_POST['email']) {
    $users = [
        [
            "name" => "Jon Snow",
            "email" => "jon@email.com",
            "password" => "159753",
        ],
        [
            "name" => "Daenerys Targaryen",
            "email" => "daenerys@email.com",
            "password" => "147852",
        ],
    ];

    foreach ($users as $user) {
        $validEmail = $email === $user['email'];
        $validPass = $password === $user['password'];


        if ($validEmail && $validPass) {
            $_SESSION['errors'] = null;
            $_SESSION['user'] = $user['name'];
            $exp = time() + 60;
            setcookie('user', $user['name'], $ex);

            header('Location: /app/view/home.php');
        }
  
    }

    if(!$_SESSION['user'])
    {
        $_SESSION['errors'] = ["Usuário/Senha inválido!"];
    }
}