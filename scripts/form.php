<?php 
include ('connected.php');
mysqli_query($link,"SET NAMES utf8");

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$name = htmlspecialchars($name);
$name = stripslashes($name);
$name = trim($name);

$email = htmlspecialchars($email);
$email = stripslashes($email);
$email = trim($email);

$number = htmlspecialchars($number);
$number = stripslashes($number);
$number = trim($number);

$result  = mysqli_query ($link,"INSERT INTO data ( name, email, number) VALUES('$name', '$email', '$number');");

if ($result) {
    echo ("Данные успешно сохранены!");
}
else {
    exit ("Произошла ошибка, пожалуйста повторите попытку.");
} 

?>