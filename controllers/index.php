<?php


$books = [
    [
        'name' => 'PHP',
        'price' => 1000,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'Java',
        'price' => 1200,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'Python',
        'price' => 1500,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'JS',
        'price' => 1000,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'TS',
        'price' => 1000,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'HTML',
        'price' => 1000,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'CSS',
        'price' => 1000,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'SCSS',
        'price' => 1200,
        'url' => 'https://freetuts.net',
    ],
    [
        'name' => 'GSAP',
        'price' => 1500,
        'url' => 'https://freetuts.net',
    ],

];


function filter($data, $fn)
{
    $filteredData = [];
    foreach ($data as $item) {

        if ($fn($item)) {
            $filteredData[] = $item;
        }
    }

    return $filteredData;
}

$filteredBooks = array_filter($books, function ($item) {
    return $item['price'] == 1000;
});


// $heading = "Home";

view('index.view.php', [
    'heading' => 'Home',
    'filteredBooks' => $filteredBooks
] );