<?php

$config = require '../config.php';
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes ')-> findAll();

// dd($notes);

$heading = "My Notes";
// require '../views/notes/index.view.php';
require view('/notes/index.view.php');