<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM notes ')-> findAll();

// dd($notes);

// $heading = "My Notes";
// require '../views/notes/index.view.php';
view('notes/index.view.php', [
    'heading' => "My Notes",
    'notes' => $notes
]);