<?php
 //up anh tu trinh duyet len
    echo "Upload image in PHP";


     // check xem nut submit co duoc bam khong
    //  if(isset($_POST['submit'])) {  
    //     $file_name = $_FILES['upload']['name'];
    //     if(!empty($file_name)) {
    //         print_r($_FILES);
    //     } else {
    //         // khong co file
    //         $message = '<p style="color:red;">
    //             No file selected, please try again</p>';
    //     }
    // }




   // check xem nut submit co duoc bam khong
    if(isset($_POST['submit'])) {
        $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];        
        $file_name = $_FILES['upload']['name'];
        if(!empty($file_name)) {
            //print_r($_FILES);
            $file_size = $_FILES['upload']['size'];
            // chua noi dung cua file
            $file_tmp_name = $_FILES['upload']['tmp_name'];  

            // time la no tinh tu ngay 1 thang 1 nam 1970 den bay gio
            // khi upload file anh len ta se copy anh do va doi ten cho no di
            // de dam bao khi ma gui len cung mot ten no khong bi trung nhau
            $generated_file_name = time().'-'.$file_name;
            //ten file de chua cai dodel upload len          
            $destination_path = "uploads/${generated_file_name}";

            // file_extension la lay duoi file
            $file_extension = explode('.', $file_name);
            // chuyen het chu thuong
            $file_extension = strtolower(end($file_extension));
            //echo "$file_name, $file_size, $file_extension, $destination_path";            
            //validate file extension permitted 
            if(in_array($file_extension, $permitted_extensions)) {
                if($file_size <= 1000000) {
                    //ok, move from temp folder to /uploads
                    //original file name and uploaded file name 
                    //must be DIFFERENT !, why ?
                    move_uploaded_file($file_tmp_name, $destination_path);
                    $message = '<p style="color:green;">
                        File is uploaded</p>'; 
                } else {
                    $message = '<p style="color:red;">
                        File is too big</p>';                    
                }
            } else {
                $message = '<p style="color:red;">
                        Invalid file type</p>';
            }
        } else {
            // khong co file
            $message = '<p style="color:red;">
                No file selected, please try again</p>';
        }
    }


?>

<!-- enctype="multipart/form-data" dung de no se chia nho file ra roi upload len -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
        method="post"
        enctype="multipart/form-data"
        >
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>

    <!-- hien thong bao message o tren ra -->
    <?php echo $message ?? '' ?>
</body>
</html>