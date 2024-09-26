<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$currentUserId = $_SESSION['user']['id'];
$notes = $db->query('SELECT * FROM notes where user_id = :id', [
    'id' => $currentUserId
])-> findAll();


// dd($notes);

// $heading = "My Notes";
// require '../views/notes/index.view.php';
view('notes/index.view.php', [
    'heading' => "My Notes",
    'notes' => $notes
]);