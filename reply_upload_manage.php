<?php
session_start();
//include("log_in.php");
$test=null;
if($_FILES["file"]["name"]!= null){
	$user_mail = $_SESSION['mail'];
	$tmp_name = $_FILES['file']['name'];
	$file_tag = explode(".",$tmp_name) ;


	if($file_tag[1]=='jpg' || $file_tag[1]=='png' || $file_tag[1]=='JPG' || $file_tag[1]=='PNG' || $file_tag[1]=='jpeg' || $file_tag[1]=='JPEG' || $file_tag[1]=='gif' || $file_tag[1]=='GIF'){
	
		@$link=mysqli_connect('localhost','root','','pholic');
	
		if (@!mysqli_select_db($link,'pholic'))
		die("<p>無法開啟資料庫</br>");

		mysqli_query($link,'SET CHARACTER SET big5');
		mysqli_query($link,"SET collation_connection='big5_chinese_ci");
	
		$sql="SELECT count(*) FROM reply Where mail='".$user_mail."'";
		if($result=mysqli_query($link,$sql)){  
			while($row=mysqli_fetch_assoc($result)){
				$num = $row['count(*)']+1;
				$file_name = explode("@",$user_mail) ;
				$name = $file_name[0].'_reply_'.$num.'.'.$file_tag[1];
			}
		}
		copy($_FILES['file']['tmp_name'], "img/".$name); 
		$test=true;
		header("refresh: 0.1 ; url = /pholic/main_manage.php ");
	}else{
		echo "檔案格式錯誤!請重新選擇";
		header("refresh: 1 ; url = /pholic/main_manage.php ");
	}
}else{
	echo "您尚未選擇檔案!";
	header("refresh: 1 ; url = /pholic/main_manage.php ");
}
?>
<?php
if($test= true) {
	$post_no = $_POST["post_no"];
	//echo $post_no;
	@$link=mysqli_connect('localhost','root','','pholic');

	if (@!mysqli_select_db($link,'pholic'))
	die("<p>無法開啟資料庫</br>");

	mysqli_query($link,'SET CHARACTER SET big5');
	mysqli_query($link,"SET collation_connection='big5_chinese_ci");

	//$sql2="SELECT count(*) FROM reply ";
	//if($result2=mysqli_query($link,$sql2)){  
	//	while($row2=mysqli_fetch_assoc($result2)){
	//		$count = $row2['count(*)']+1;
	//	}
	//}else{
	//	$count = 1;
	//}
	@$sql3 = "INSERT INTO reply (reply_no, post_no, mail, reply_pic)  
		VALUES('', '$post_no', '$user_mail', '$name')";
	mysqli_query($link,$sql3);
	
	//header('location:' . $_SERVER['HTTP_REFERER']);
	//header("refresh: 0.1 ; url = /pholic/main_manage.php ");
}
?>
