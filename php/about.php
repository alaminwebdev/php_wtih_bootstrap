<?php $heading = 'About'; ?>

<?php
    // echo '<pre>';
    // var_dump($_SERVER);
    // echo '</pre>';
    //echo $_SERVER["REQUEST_URI"];


    $books = [
        [
            'name' => 'The India Story',
            'author' => 'Bimal Jalal',
            'year'=> 2022
        ],
        [
            'name' => 'A Place Called Home',
            'author' => 'Preeti Shenoy',
            'year'=> 2022
        ],
        [
            'name' => 'Pride, Prejudice and Punditry',
            'author' => 'Shashi Tharoor',
            'year'=> 2022
        ],
        [
            'name' => '1971: Charge of the Gorkhas and other stories',
            'author' => 'Rachna Bisht Rawat',
            'year'=> 2021
        ],
        [
            'name' => 'The Commonwealth of Cricket',
            'author' => 'Ramachandra Guha',
            'year'=> 2021
        ],
        [
            'name' => 'Karmayoddha Granth',
            'author' => 'Amit Shah',
            'year'=> 2020
        ]
        ,
        [
            'name' => 'Relentless',
            'author' => 'Yashwant Sinha',
            'year'=> 2020
        ],
        [
            'name' => 'A Child of Destiny',
            'author' => 'K. Ramakrishna Rao',
            'year'=> 2020
        ]
    ];

    function filterByYear($books , $year){
        $bookYear =[];
        foreach($books as $book){
            if($book['year'] === $year){
                $bookYear[] = $book;
            }
        }
        return $bookYear;
    }

?>
<?php require 'views/about.view.php' ?>
