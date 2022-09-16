<?php 
    // echo "We talk about super_globals";
    // print_r($_SERVER);

    //Gui tham so tu trinh duyet len server
    // print_r($_GET);
    // print_r($_POST);

    // echo $_GET['name'];
    // echo $_GET['age'];
    // http://localhost:3000/superglobals.php?name=Khue$age=12

    // kiem tra xem co thuoc tinh name hay khong?
    // if(isset($_GET['name'])) {
    //     echo $_GET['name'];
    // }
    // if(isset($_GET['age'])) {
    //     echo $_GET['age'];
    // } 

    //cach 2
    //coalescing tuc la 2 dau ??
    // $name = $_GET['name'] ?? '';
    // $age = $_GET['age'] ?? '';  
    // echo $name;
    // echo $age;

    // $name = $_GET['name'] ?? '';
    // $age = $_GET['age'] ?? '';  
    // echo $name;
    // echo $age;

    // $email = $_POST['email'] ?? '';
    // $password = $_POST['password'] ?? '';
    // echo $email;
    // echo $password;

    //<script>alert('This is javascript code');</script>
   // htmlspecialchars se bien no thanh string

   //https://www.php.net/manual/en/filter.filters.sanitize.php
    $email = filter_var($_POST['email'], 
    FILTER_SANITIZE_SPECIAL_CHARS); 
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>"
        method="GET"
    >

    <div>
        <label for="name">Your name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form> -->

<form 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
        method="POST"
        >
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>



</body>
</html>