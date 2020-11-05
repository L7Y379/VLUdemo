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


mysqli_query($conn,"UPDATE MyGuests SET name='$_POST[name]'WHERE schoolnumber='$_POST[schoolnumber]'");
mysqli_query($conn,"UPDATE MyGuests SET schoolstatus='$_POST[schoolstatus]'WHERE schoolnumber='$_POST[schoolnumber]'");
mysqli_query($conn,"UPDATE MyGuests SET email='$_POST[email]'WHERE schoolnumber='$_POST[schoolnumber]'");

/*
if(mysqli_affected_rows($conn)==-1){
	header("location:../../erro/erro4.1.html");
}
else if(mysqli_affected_rows($conn)==0){
	header("location:../../erro/erro4.html");
}
else if(mysqli_affected_rows($conn)==1){
	echo"修改学籍信息成功！";
}
*/
	echo "修改学籍信息成功!";



mysqli_close($conn);

?>