<?php

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);

require BASE_PATH . 'Core/functions.php';


spl_autoload_register(function ($class) {
    // var_dump(base_path($class . '.php'));

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('Core/router.php');


// echo 'Hello, World!';






// $id = $_GET['id'];
// $query = "SELECT * FROM posts where id = :id";
// $posts = $db->query($query, [':id' => $id])->fetch();

// // dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
