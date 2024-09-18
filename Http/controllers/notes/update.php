<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 6;

// find the corresponding note
$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


// authorize that the current user can edit the note
authorize($note['user_id'] === $currentUserId);


// validate the form 
$errors = [];


if (!Validator::string($_POST['title'], 1, 150)) {
    $errors['title'] = 'A Title of no more than 150 characters is required ';
}

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1000 characters is required';
}




// if no validation errors, update the record in the database table


if (count($errors)) {
    return  view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note'=> $note
    ]);
}
$db->query('UPDATE notes set title = :title, body= :body where id =:id' , [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'body' => $_POST['body'],
]);

// $_POST['title'] = '';
// $_POST['body'] =  '';
header('location: /notes');
die();



