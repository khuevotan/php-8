<?php
    // echo "We talk about Iterations (Loop)";
    // echo "<br>";
    // for($i = 0; $i<10 ; $i++){
    //     // echo $i == 0 ? "$i" : ": $i";
    //     // echo "i = $i<br>";
    // }

    // $i = 0;
    // while($i < 20){
    //     echo "i = $i<br>";
    //     $i = $i + 1;
    // }

    // $i = 21;
    // do {
    //     echo "i = $i<br>";
    //     $i = $i + 1;
    // }while ($i < 30);

    //for each - dung de duyet mot danh sach cac doi tuong
    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
    // for ($i = 0; $i < count($fruits); $i++){
    //     echo $fruits[$i];
    // }

    // foreach($fruits as $fruit) {
    //     echo "$fruit<br>";
    // }

    // foreach($fruits as $index => $fruit) {
    //     echo "$index - $fruit<br>";
    // }

    $person = [
        'full_name' => 'Nguyen Duc Hoang',
        'email' => 'sunlight4d@gmail.com',
        'age' => 43
    ];
    foreach($person as $key => $value) {
        echo "$key : $value <br>";
    }
?>