<?php
    echo "This lesson is about function <br>";

    $y = 22;
    function sayHello($name){ //function with "arguments"
        global $y;
        echo "y = $y";
        $x = 123;
        echo "Hello $name";
    }

    // sayHello("Khue"); // call fuction with "parameters" 

    function sum($a, $b){
        return $a + $b;
    }
    // echo sum(1,2);

    function sum2($a = 2, $b = 4){
        //default arguments value
        return $a + $b;
    }
    // echo sum2();

    // tham chieu mot bien toi mot ham
    //assign a variable to a function
    $multiply = function ($a, $b) {
        return $a * $b;
    };
    // echo $multiply(3,4);

     //arrow function - ham mui ten
    $substract = fn($a, $b) => $a - $b;
    // echo $substract(6, 2);

     //some built-in function for array
     // mot so ham cho mang
     $names = ['john', 'anna', 'hoang', 'tony'];

    //tong so phan tu trong mang
    //  echo "number of items : ".count($names);


    //seach inside array
    // khong co ai ten elon trong danh sach ten nay
    //var_dump(in_array('hoang', $names));

    //insert an item - them phan tu vao danh sach (cuoi)
    array_push($names, 'elon', 'tom');
    // print_r($names);

    //insert to the beginning of the array - them vao dau
    array_unshift($names, 'satoshi');

    //remote the last item
    array_pop($names);

    //remove the first item
    array_shift($names);


    //how to remote an item - xoa bat ki
    unset($names[3]);
    // print_r($names);

    
    //chunk an array - bam mang ra lam nhieu khuc
    $chunked_array = array_chunk($names, 3);
    //print_r($chunked_array);


    // gom mang
    $array_one = [1, 3, 5];
    $array_two = [2, 4, 6];
    $merged_array = array_merge($array_one, $array_two);
    //print_r($merged_array);

    //spread operator - dau 3 cham, nhan ban merged_array thanh 
    //mot array khac o mot vung nho khac nhung gia tri van nhu cu
    $array_three = [...$merged_array];//clone an array
    $merged_array[0] = 111;
    //print_r($merged_array);
    //print_r($array_three);

    
    //merge and clone
    $array_four = [...$array_one, ...$array_two];
    //print_r($array_four);


    //combine two arrays 
    $a = ['name', 'email', 'age'];
    $b = ['Hoang', 'sunlight4d@gmail.com', 18];
    $c = array_combine($a, $b); // 2 mang phai bang nhau
    //print_r($c);
    //print_r(array_flip($c)); - dao nguoc key thanh value va nguoc lai
    //print_r(array_keys($c));
    //print_r(array_values($c));


    //tao mang tu mot dai nao do
    //array from a range
     $numbers = range(0, 10);
    //  print_r($numbers);

     //anh xa mot mang - kich co mang thi giong nhung gia tri thi khac
     //map an array to another array
     //with the same size, but other values
    //  $squared_numbers = array_map(fn($each_number) => 
    //      $each_number * $each_number
    //  , $numbers);
    //  print_r($squared_numbers);


     //lap gia tri- lay ra so le hoac so chan, hoac lay ten nhung nguoi ten oang
     //filter an array
     $filtered_numbers = array_filter($numbers, 
         fn($each_number) => $each_number % 2 == 0);
     print_r($filtered_numbers);
 
?>