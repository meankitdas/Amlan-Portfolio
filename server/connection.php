<?php

$servername = "sql304.epizy.com";
$username = "epiz_29076746";
$password = "0hoVo5RY5X";
$database = "epiz_29076746_Table";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo("HEllO")
}

$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    require "_dbconn.php";

    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

    $email = str_replace("<", "&lt", $email);
        $email =str_replace(">", "&gt",$email);
        
        $name = str_replace("<", "&lt", $name);
        $name =str_replace(">", "&gt",$name);

        $message = str_replace("<", "&lt", $message);
        $message = str_replace(">", "&gt", $message);

        $sql = "INSERT INTO `Contact` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($conn, $sql);

        header("location: https://www.amlansouravdas.ml");
        exit();


}else{
    header("location: ../index.html");
    exit();
}

?>