<?php 
    echo "We talk about conditional in PHP <br>";
    // $age = 15;
    // if($age >= 18) {
    //     echo "Ban lon hon 18 tuoi";
    // } else {
    //     echo "Ban nho hon";
    // }

    // $date_time = date("F");
    // $date_time = date("F j");
    // echo $date_time;

    // $hours = date("H");
    // echo $hours;
    // if ($hours < 12) {
    //     echo "Good morning";
    // } else if($hours >= 12 && $hours <= 17) {
    //     echo "Good afternoon";
    // } else {
    //     echo "Good evening";
    // }
    
    $comments = [
        'Good' , 'I like it', 'How are you ?'
    ];
    
    /*
    if(empty($comments)) {
        echo "No comments";
    }

    if(!empty($comments)) {
        echo "There are some comments";
    } else {
        echo "No comments";
    }
    */

    // echo !empty($comments) ? "There are some comments":
    //                         'No comments';

    // $first_comment = !empty($comments)
    //                 ? $comments[0] : 'No comments';
    // echo $first_comment;


    // toan tu ?? se lay gia tri mat dinh khi no la null
    // $first_comment = $comments[0] ?? 'Khue khong co';
    // echo $first_comment;
    
    $favorite_color = 'blue';
    switch($favorite_color) {
        case 'red':
            echo 'You choose RED';
            break;
        case 'green':
            echo 'You choose GREEN';
            break;
        case 'blue':
             echo 'You choose BLUE';
            break;
        default:
             echo 'Not RED, GREEN, BLUE';
    }
?>