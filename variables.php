<?php 
    echo "we talk about variables".'<br>';
    $name = 'hoang';
    echo $name;
    $age = 18;
    echo $age;
    $has_mercedes = false;
    //bien false thi se khong hien ra man hinh
    $has_mercedes = true;
    // true thi no se hien ra so 1
    echo $has_mercedes;

    var_dump($has_mercedes);
    $product_price = 22.45;
    echo "<br>";
    var_dump($product_price);
    echo "<br>";

    // noi hai xau ki tu lai voi nhau
    // string concatenation
    //cach 1
    // echo $name. 'is '.$age. 'years old'."<br>";

    // //cach 2
    // echo "$name is $age years old";

    // //cach 3
    // echo "${name} is ${age} years old";


    // bieu thu - expression
    // echo 5 + 5;
    // echo "<br>";
    // echo '1' + '2';

    // $sum = '2' + '3';
    // var_dump($sum);

    echo 5 * 3;
    echo "<br>";
    echo 10 / 2;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";

    // hang - constants
    define('SERVER_NAME', 'localhost');
    define('DATABASE_NAME', 'test_db');

    echo "server: ".SERVER_NAME.', db: '.DATABASE_NAME;
    echo "<br>";
    echo SERVER_NAME, DATABASE_NAME;
?>