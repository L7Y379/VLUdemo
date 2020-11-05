<?php 
$servername = "localhost";
$username = "root";
$password = "LUOYUE.0322";
$dbname = "myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接管理系统失败: " . $conn->connect_error);
}   
//echo "连接成功";


mysqli_query($conn,"DELETE FROM MyGuests WHERE schoolnumber='$_POST[schoolnumber]'and name='$_POST[name]'and schoolstatus='$_POST[schoolstatus]'and email='$_POST[email]'");
/*
if(mysqli_affected_rows($conn)==-1){     //根据结果集中影响的行数来判断是否删除成功（-1无权限）
	header("location:../../erro/erro3.1.html");
}
else if(mysqli_affected_rows($conn)==0){
	header("location:../../erro/erro3.html");
}
else if(mysqli_affected_rows($conn)==1){
	echo "删除信息成功";
}
*/
if(mysqli_affected_rows($conn)==1){
	echo "删除信息成功";
}
else if(mysqli_affected_rows($conn)==0){
	header("location:../../erro/erro3.html");
}

mysqli_close($conn);

?>