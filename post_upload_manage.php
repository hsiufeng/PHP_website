<?php
session_start();
//include("log_in.php");
$test=null;
if($_FILES["file"]["name"]!= null){
$test=null;
$user_mail = $_SESSION['mail'];
$tmp_name = $_FILES['file']['name'];
$file_tag = explode(".",$tmp_name) ;

if($file_tag[1]=='jpg' || $file_tag[1]=='png' || $file_tag[1]=='JPG' || $file_tag[1]=='PNG' || $file_tag[1]=='jpeg' || $file_tag[1]=='JPEG' || $file_tag[1]=='gif' || $file_tag[1]=='GIF'){
	
	@$link=mysqli_connect('localhost','root','','pholic');

	if (@!mysqli_select_db($link,'pholic'))
	die("<p>�L�k�}�Ҹ�Ʈw</br>");

	mysqli_query($link,'SET CHARACTER SET big5');
	mysqli_query($link,"SET collation_connection='big5_chinese_ci");

	$sql="SELECT count(*) FROM post Where mail='".$user_mail."'";	
	if($result=mysqli_query($link,$sql)){  
		while($row=mysqli_fetch_assoc($result)){
		$num = $row['count(*)']+1;
		$file_name = explode("@",$user_mail) ;
		$name = $file_name[0].'_'.$num.'.'.$file_tag[1];
		}
	}else{
		$num = 1;
		$file_name = explode("@",$user_mail) ;
		$name = $file_name[0].'_'.$num.'.'.$file_tag[1];
		echo $name;
	}
	copy($_FILES['file']['tmp_name'], "img/".$name); 
	header("refresh: 0.1 ; url = /pholic/main_manage.php ");
	$test=true;
}else{
	echo "�ɮ׮榡���~!�Э��s���";
	header("refresh: 1 ; url = /pholic/main_manage.php ");
}
}else{
	echo "�z�|������ɮ�!";
	header("refresh: 1 ; url = /pholic/main_manage.php ");
}
?>
<?php
if($test==true){
	$class_no = $_POST['class'];
	date_default_timezone_set('Asia/Taipei');
	$today = getdate(time());
	$post_time = $today['year'].'-'.$today['mon'].'-'.$today['mday'].' '.$today['hours'].':'.$today['minutes'].':'.$today['seconds'];

	if (@!mysqli_select_db($link,'pholic'))
	die("<p>�L�k�}�Ҹ�Ʈw</br>");

	mysqli_query($link,'SET CHARACTER SET big5');
	mysqli_query($link,"SET collation_connection='big5_chinese_ci");

	//$sql2="SELECT count(*) FROM post";
	//if($result=mysqli_query($link,$sql2)){  
	//	while($row=mysqli_fetch_assoc($result)){
	//		$count = $row['count(*)']+1;
	//	}
	//}
	@$sql3 = "INSERT INTO post (post_no, mail, post_time, class_no, post_pic)  
		VALUES('', '$user_mail', '$post_time', '$class_no', '$name')";
	mysqli_query($link,$sql3);
}

?>
