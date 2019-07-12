<?php
include "conDB.php";

$user = $_POST['user'];
$pass = $_POST['pass'];
$sex = $_POST['sex'];
$age = $_POST['aeg'];
$fav_a = $_POST['fav_a'];
$fav_b = $_POST['fav_b'];


//echo $user;
$fav=$fav_a . "," . $fav_b;

$strSQL = "INSERT INTO tb_member VALUES('$user','$pass','$sex','$fav','$age')";
mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>
<a href="../add_member.html">BACK</a>