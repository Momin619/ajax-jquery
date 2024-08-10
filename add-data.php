<?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$conn = mysqli_connect('localhost','root','','instagram') or die();
$r= "INSERT INTO users (name,email,age) VALUES ('{$name}','{$email}','{$age}' )  ";
$result = mysqli_query($conn,$r);

if($result){
    echo 1;
    echo($name);
}else{
    echo 0;
}

?>