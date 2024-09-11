<?php
use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$currentUserId = 6;


$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();



authorize($note['user_id'] === $currentUserId);

 view('notes/edit.view.php',[
    'heading'=> 'Edit a Note',
    'errors' => [],
    'note' => $note
 ]);


