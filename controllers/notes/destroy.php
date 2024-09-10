<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 6;


$note = $db->query('SELECT * FROM notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

$db->query('DELETE from notes where id =:id', [
    'id' => $_POST['id']
]);
header('location: /notes');
exit();
