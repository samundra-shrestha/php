<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];



// Validate the form inputs

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}
if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}


// Login the user if the credentials match


$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email,
    // 'password' => password_hash($password, PASSWORD_BCRYPT)
])->find();

if ($user) {
    if(password_verify($password, $user['password'])){
        login([
            'email'=>$email
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

