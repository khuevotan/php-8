<?php
    echo "Xin chao";

    // de luu dc cookies thi ta can co 3 tham so - key, value, time
    // 24 la 24h * 3600s;
    
    //save data to cookie
    setcookie('name', 'Hoang', time() + 24*3600);
    //after 1 day, cookie will be expired 
    //1 month = 24*3600*30
    //check the existing cookie
    // de lay ra thi ta kiem tra xem co gi tri cookies name khong?
    if(isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }
    
    //cach xoa cookie
    setcookie('name', '', time() - 24*3600); //unset cookie

?>