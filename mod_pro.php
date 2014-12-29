<?php
session_start();
//include("log_in.php");

  $mail=$_SESSION['mail']; 
  $user_name=$_POST["user_name"];
  $pwd=$_POST["pwd"];
  $pwd2=$_POST["pwd2"];
  $user_bday=$_POST["user_bday"];

echo $user_name;

if($mail!=null && $pwd!=null && $pwd2!=null && $pwd==$pwd2){
  /*$mail=$_SESSION['mail']; 
  $user_name=$_POST["user_name"];
  $pwd=$_POST["pwd"];
  $pwd2=$_POST["pwd2"];
  $user_bday=$_POST["user_bday"];
  $user_pic=$_FILES["user_pic"];*/

  @$link=mysqli_connect('localhost','root','','pholic');

  if (@!mysqli_select_db($link,'pholic'))
  die("<p>無法開啟資料庫</br>");

  mysqli_query($link,'SET CHARACTER SET big5');
  mysqli_query($link,"SET collation_connection='big5_chinese_ci");
 
  $sql_update="UPDATE user SET pwd= '$pwd' , user_name= '$user_name', user_bday= '$user_bday' WHERE user.mail='$mail'";
    if($result=mysqli_query($link, $sql_update)){
      	$file_name = explode("@",$user_mail) ;
		$name = $file_name[0].".jpg";
		
		
    }      
  }else{
    echo "<h4>修改失敗</h4>";
  }

if($_FILES["file"]["name"]!= null){
  $tmp_name = $_FILES["file"]["name"];
  $file_tag = explode(".",$tmp_name) ;

  if($file_tag[1]=='JPG' || $file_tag[1]=='png' || $file_tag[1]=='gif' || $file_tag[1]=='jpg' || $file_tag[1]=='GIF' || $file_tag[1]=='PNG'){
  	//echo $_FILES['file']['tmp_name'];
  	//$user_mail = $_GET[''];
  	//$class_no = $_GET['class'];
  	$user_mail = $mail;
  	//@$link=mysqli_connect('localhost','root','','pholic');
  
  	//if (@!mysqli_select_db($link,'pholic'))
  //	die("<p>無法開啟資料庫</br>");
  
  //	mysqli_query($link,'SET CHARACTER SET big5');
  //	mysqli_query($link,"SET collation_connection='big5_chinese_ci");
  
  //	$sql="SELECT count(*) FROM post Where mail='".$user_mail."'";	
  
  	//if($result=mysqli_query($link,$sql)){  
  	//	while($row=mysqli_fetch_assoc($result)){
  		//	$num = $row['count(*)']+1;
  			$file_name = explode("@",$user_mail) ;
  			$name = $file_name[0].".".$file_tag[1];
  //		}
  	//}else{
  	//	$num = 1;
  	//	$file_name = explode("@",$user_mail) ;
  	//	$name = $file_name[0].'_'.$num.'.'.$file_tag[1];
  //	}
  	copy($_FILES['file']['tmp_name'], "img/".$name);
    header("Location: /pholic/profile.php"); 
  }else{
  	echo "檔案格式錯誤!請重新選擇";
   header("refresh: 3 ;Location: /pholic/changing.php");
    
  }
}else{
  header("Location: /pholic/profile.php");
  //header('location:' . $_SERVER['HTTP_REFERER']);  
}



 $sql="SELECT * FROM user Where mail='".$user_mail."'";	
	if($result=mysqli_query($link,$sql)){  
		while($row=mysqli_fetch_assoc($result)){
		if($row['user_pic']==$name){
			
		}else{
			@$sql3 = "UPDATE user SET user_pic= '$name' WHERE user.mail='$mail'";
			mysqli_query($link,$sql3);	
		}
		}
	}





?>
