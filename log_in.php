<?php
session_start();
$_SESSION['mail']=$_POST['mail'];

$dbname="pholic";
$link=mysqli_connect('localhost','root','','pholic');

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci'");

if (isset($_POST['mail']) && isset($_POST['pwd'])) {
	
  //global $mail;
  $mail=$_POST["mail"];
  $pwd=$_POST["pwd"];
  $sqlmail="SELECT mail FROM user WHERE mail ='$mail'";       
  $resultmail=mysqli_query($link,$sqlmail);                    
  $rowsmail=mysqli_num_rows($resultmail);        
  if($rowsmail==0){                             
    echo "沒有這個帳號".mysqli_error($link);           
    header("refresh: 2 ; url = login.php");                            
  } 
  else{
    $sqlpwd = "SELECT pwd FROM user WHERE mail ='$mail' ";         
    $resultpwd = mysqli_query($link,$sqlpwd); 	
    $rowspwd=mysqli_fetch_assoc($resultpwd);                           
      if($rowspwd['pwd']!=$pwd){                                                              
        echo "密碼輸入錯誤";
        header("refresh: 2 ; url = login.php ");
      }
      else{
       //$_SESSION["name"]="yes";                                     
       // $_SESSION["mail"]=$mail;
	   
		$sqlrights="SELECT rights FROM user WHERE mail ='$mail' ;";
		if($resultrights=mysqli_query($link,$sqlrights)){  
			while($row=mysqli_fetch_assoc($resultrights)){
				if($row['rights']=='1'){
					echo "已登入，等待網頁自動轉入管理畫面";
					header("refresh: 2 ; url = main_manage.php ");
				}else{
					echo "已登入，等待網頁自動轉入畫面";
					header("refresh: 2 ; url = main.php ");
				} 
			}
		}	        
      }
  }

//mysqli_close($link);
}




?>