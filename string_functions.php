<?php
  //echo "String functions in PHP";

  $full_name = 'Vo Tan Khue';

  //do dai cua xau ki tu
  //echo "length: " . strlen($full_name);

  // dao nguoc xau ki tu - xem xau co doi xung hay khong
  //reverse a string 
  //echo strrev($full_name);

  // chuyen thanh ki tu thuong va hoa
  //conert to lowercase
  //echo strtolower($full_name);
  //echo strtoupper($full_name);

  //tim va thanh the  //find and replaced
  //echo str_replace(' ', '-', $full_name);

  if(str_starts_with(strtolower($full_name), 'nguyen')) {
      echo "His name starts with nguyen<br>";
  }
  if(str_ends_with(strtolower($full_name), 'hoang')) {
      echo "His name ends with hoang <br>";
  }

  // tu bien dich ra the html 
  echo "<h1>html string</h1>";    

  // nhung co mot so truong hop ta khong muon no bien dich ra
  //how to ignore the html string ?
  // viet gi hien nay
  echo htmlspecialchars("<h1>html string</h1>");
  //echo "<script>alert('This is javascript code')</script>";
  //echo htmlspecialchars("<script>alert('This is javascript code')</script>");
  
  // lay du lieu tren form ve
  //htmlspecialchars used to get data in form
  printf('<br>%s likes %s', 'Hoang', 'Mercedes G63');
  printf('pi = %f', 3.14);
?>