<?php
  // doc mot file text roi hien thi no ra
  // ghi du lieu vao mot file text
    //duong dan chi tiet den voi file text
    $file_path = './fruits.txt';
    // kiem tra duong dan co ton tai hay khong
    if(file_exists($file_path)) {
        // echo readfile($file_path);
        // option r la chi mo de doc
        $file_handle = fopen($file_path, 'r');   
        $file_content = fread($file_handle, 
                            filesize($file_path));
        fclose($file_handle);
        echo $file_content;
        //co dong 10 thi phai co dong 13 
    }  else {
        //not exist
        // truong hop neu khong co file do thif
        // no cung se tao ra mot file nhung chi de ghi cai file do
        $file_handle = fopen($file_path, 'w');//open for write
        $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape';
        fwrite($file_handle, $file_content);
        fclose($file_handle);
    }
?>