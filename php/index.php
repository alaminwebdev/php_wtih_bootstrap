<?php

$heading = 'Home';

// This function will be used for view different Server information
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    //echo "<h3>$value</h3>";
    //return $_SERVER[$value];
    die();
};
//dd($_SERVER);

$books = [
    [
        'name' => 'The India Story',
        'author' => 'Bimal Jalal',
        'year' => 2022
    ],
    [
        'name' => 'A Place Called Home',
        'author' => 'Preeti Shenoy',
        'year' => 2022
    ],
    [
        'name' => 'Pride, Prejudice and Punditry',
        'author' => 'Shashi Tharoor',
        'year' => 2022
    ],
    [
        'name' => '1971: Charge of the Gorkhas and other stories',
        'author' => 'Rachna Bisht Rawat',
        'year' => 2021
    ],
    [
        'name' => 'The Commonwealth of Cricket',
        'author' => 'Ramachandra Guha',
        'year' => 2021
    ],
    [
        'name' => 'Karmayoddha Granth',
        'author' => 'Amit Shah',
        'year' => 2020
    ],
    [
        'name' => 'Relentless',
        'author' => 'Yashwant Sinha',
        'year' => 2020
    ],
    [
        'name' => 'A Child of Destiny',
        'author' => 'K. Ramakrishna Rao',
        'year' => 2020
    ]
];

// foreach($books as $book){
//     foreach($book as $key=>$value){
//         echo $key.':' . $value . '<br>';
//     }
// }


?>

<?php require 'views/index.view.php'; ?>

