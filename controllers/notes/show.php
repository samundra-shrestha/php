<?php
$config = require '../config.php';
$db = new Database($config['database']);

$heading = "Note";

$currentUserId = 7;
$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();



authorize($note['user_id'] === $currentUserId);



require view('notes/show.view.php');
