<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/userDAO.php");

    $message = new Message($BASE_URL);
    $userDAO = new UserDAO($conn, $BASE_URL);

    //Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    // Verificação do tipo do formulário
    if ($type === "register") {

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        if ($name && $lastname && $email && $password) {
            if ($password === $confirmpassword) {

                if ($userDAO->findByEmail($email) === false) {

                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);
                
                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $token;

                    $auth = true;

                    $userDAO->create($user, $auth);
                    
                } else {

                $message->setMessage("Usuário já cadastrado, tente outro email.", "error", "back");

                }

            } else {

                $message->setMessage("As senhas não são iguais.", "error", "back");

            }
        } else {
            $message->setMessage("Por favor, preencha todos os campos.", "error", "back");
        }

    } else if($type === "login") {

    }