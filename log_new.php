<?php
  header("Content-type:text/html; charset=utf-8");
  //session_start();

@$newmail=$_POST["newmail"];
@$newpwd=$_POST["newpwd"];
@$newpwd2=$_POST["newpwd2"];
@$newusername=$_POST["newusername"];  

  
if(!empty($_POST["newmail"]) && !empty($_POST["newusername"]) && !empty($_POST["newpwd2"]) && !empty($_POST["newpwd"])){


 $link=mysqli_connect('localhost','root','','pholic');
 
 
mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");
  
 @$sql="SELECT mail FROM user;";
 if($result=mysqli_query($link,$sql)){    
    $row=mysqli_fetch_assoc($result);
    if($row["mail"]==@$newmail){
     echo $newmail."<font color=red size=15pt>這個帳號已有人使用!</font></br>";
     header("Refresh: 3; url=login.php"); 
	 }     
	 
    else{
	if($newpwd != $newpwd2){
	 echo "<font color=red size=15pt>密碼認證錯誤!!!</font>";
     header("Refresh: 2; url=login.php");}
	else{
	if(!preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/', $newmail)){
     echo "<font color=red size=15pt>這個帳號不是電子信箱!(三秒後回前頁)</font></br>"; 
	 header("Refresh: 3; url=login.php");}
	 
	 else{	
    @$sql2="INSERT INTO user(user_name, mail, pwd, user_pic, rights)
          VALUES ('$newusername','$newmail','$newpwd','00.jpg', '0')";
          
    if($result2=mysqli_query($link,$sql2)){
          @$row2=mysqli_fetch_row($result2);
		  echo "<font color=red size=15pt>恭喜你註冊成功!!!(請重新登入)</font>";
          header("Refresh: 3; url=login.php");
      		  
    }else{
          echo "<font color=red size=15pt>註冊失敗，重新輸入(三秒後回前頁)</font>";
          header("Refresh: 3; url=login.php");
      }
     }
	}
   }
  }
}     
else{
echo "<font color=red size=15pt>框格內不可以空白，請重新輸入(等待3秒回前頁)</font></br>";
header("Refresh: 3; url=login.php");
}   
?>