<?php

use Core\App;
use Core\Database;

use Http\Forms\LoginForm;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];



// Validate the form inputs

$form = new LoginForm();

if (!$form->validate($email, $password)) {

    return view('session/create.view.php', [
        'errors' => $form->errors()
    ]);
}




// Login the user if the credentials match


$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
    // 'password' => password_hash($password, PASSWORD_BCRYPT)
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}



return view('session/create.view.php', [
    'errors' => [
        'password' => 'No matching account found for that email address and password'
    ]
]);

// we have a user, but we don't know if the password provided matches what we have in the database.
