<?php

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);

require BASE_PATH . 'functions.php';

require base_path('Database.php');
require base_path('Response.php');
require base_path('router.php');


// echo 'Hello, World!';






// $id = $_GET['id'];
// $query = "SELECT * FROM posts where id = :id";
// $posts = $db->query($query, [':id' => $id])->fetch();

// // dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
