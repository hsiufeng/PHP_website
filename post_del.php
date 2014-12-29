<?php

$post_no = $_GET['post_no'];

@$link=mysqli_connect('localhost','root','','pholic');
if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");

$sql="DELETE FROM eyes WHERE post_no='$post_no'";
mysqli_query($link,$sql);

$sql2="DELETE FROM reply WHERE post_no='$post_no'";
mysqli_query($link,$sql2);

$sql3="DELETE FROM post WHERE post_no='$post_no'";
mysqli_query($link,$sql3);

header("refresh: 0.1 ; url = main_manage.php ");
?>