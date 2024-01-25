<?php
    

$posts = [

    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Luca Formica',
            'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Luca Formica',
            'text' => 'Magni hic ad quia aspernatur veniam ipsa porro corrupti'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Luca Formica',
            'text' => 'provident reiciendis magnam blanditiis unde quaerat'
        ]
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Luca Formica',
            'text' => 'consequatur perspiciatis obcaecati,'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Luca Formica',
            'text' => 'Deus vult, amen.'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Luca Formica',
            'text' => 'asperiores nemo non iste.'
        ]
    ],
];


foreach ($posts as $key => $date) {
    echo $key. "<br><br>";
    foreach ($date as $post){
        foreach ($post as $text){
            echo $text. "<br><br>";
        }
    }
}
?>