<?php 
    // echo "we talk about arrays<br>";
    // $some_numers = [1,3,4,6];
    // $fruits = ['pineapple', 'melon', 'apple'];

    // var_dump($some_numers);
    // echo "<br>";
    // var_dump($fruits);
    // echo "<br>";
    // // print_r($fruits);
    // echo "<br>";

    // $animals = array('cat', 'dog', 'bird');
    // echo $animals[2];


    //associative array - doi tuong
    //2 truong key - value
    $colors = [
        3 => 'red',
        5 => 'green',
        7 => 'blue'
    ];
    // echo $colors[7];

    //key as a string
    $hex_colors = [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',
    ];
    // echo $hex_colors['red'];

    $person = [
        'full_name' => 'Vo Tan Khue',
        'age' => 43,
        'email' => 'khuevotan@gmail.com'
    ];

    // print_r($person);
    // echo $person['email'];

    $person = [
        [
            'full_name' => 'Vo Tan Khue',
            'age' => 21,
            'email' => 'khuevotan@gmail.com'
        ],
        [
            'full_name' => 'Tran Van Khanh',
            'age' => 33,
            'email' => 'khotan@gmail.com'
        ],
        [
            'full_name' => 'Nguyen Anh Phi',
            'age' => 44,
            'email' => 'khuevn@gmail.com'
        ],
        [
            'full_name' => 'Nguyen Anh Tuan',
            'age' => 12,
            'email' => 'khn@gmail.com'
        ]
    ];

    // print_r($person);
    // echo $person[1]['full_name'];

    // chuyen du lieu nay sang dang JSON
    var_dump(json_encode($person));
    //mang du lieu nay di noi chuyen voi ngon ngu khac
?>
