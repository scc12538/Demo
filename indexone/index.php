<?php
	$GetUsername = $_POST['user'];
	$Getpassword = $_POST['password'];
	$uesename = 'zhangsan';
	$password='123';
	
	if($GetUsername==$uesename&&$Getpassword==$password){
		echo '登录成功';
	}else{
		echo '登录失败1';
	}
?>