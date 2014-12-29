<?php

$mail_del = $_POST['mail_del'];
//echo $mail_del;
@$link=mysqli_connect('localhost','root','','pholic');
if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");


$sql="DELETE FROM eyes WHERE mail='$mail_del'";
mysqli_query($link,$sql);

$sql2="DELETE FROM reply WHERE mail='$mail_del'";
mysqli_query($link,$sql2);

$SQL_post="SELECT post_no FROM post WHERE mail=\"".$mail_del."\"";
if($result=mysqli_query($link,$SQL_post)){ 
  while($row=mysqli_fetch_assoc($result)){
    
    $post_del=$row['post_no'];
    
    $del_sql="DELETE FROM eyes WHERE post_no='$post_del'";
    mysqli_query($link,$del_sql);

    $del_sql2="DELETE FROM reply WHERE post_no='$post_del'";
    mysqli_query($link,$del_sql2);

    $del_sql3="DELETE FROM post WHERE post_no='$post_del'";
    mysqli_query($link,$del_sql3);
  }    
}


$sql3="DELETE FROM user WHERE mail='$mail_del'";
mysqli_query($link,$sql3);

header("refresh: 0.1 ; url = manage.php ");

?>