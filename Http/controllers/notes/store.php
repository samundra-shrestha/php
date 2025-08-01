<?php

use Core\Database;
use Core\Validator;
use Core\App;



$db = App::resolve(Database::class);



$errors = [];


if (!Validator::string($_POST['title'], 1, 150)) {
    $errors['title'] = 'A Title of no more than 150 characters is required ';
}


if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}


if (!empty($errors)) {
    return  view('notes/create.view.php', [
        'heading' => 'Create A Note',
        'errors' => $errors
    ]);
}
$db->query('INSERT INTO notes(title, body, user_id) VALUES( :title, :body, :user_id)', [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'user_id' => $_SESSION['user']['id']
]);

// $_POST['title'] = '';
// $_POST['body'] =  '';
header('location: /notes');
die();
