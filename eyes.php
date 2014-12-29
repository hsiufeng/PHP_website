
<?php
session_start();
//include("log_in.php");
$user_mail = $_SESSION['mail'];
$post_no = $_GET['post_no'];


@$link=mysqli_connect('localhost','root','','pholic');

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");

$sql ="INSERT INTO eyes (post_no, mail)  VALUES('$post_no', '$user_mail')"; 

mysqli_query($link,$sql);

//mysql_close($link); 

//header("location:main.php");
header('location:' . $_SERVER['HTTP_REFERER']);  

?>