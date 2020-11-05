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


$sql = "INSERT INTO MyGuests (schoolnumber, name, schoolstatus,email)
VALUES ('$_POST[schoolnumber]', '$_POST[name]', '$_POST[schoolstatus]','$_POST[email]')";
 
if ($conn->query($sql) === TRUE) {
    echo "学生信息添加成功";
} else {
    header("location:../../erro/erro2.html");
}
 
$conn->close();

?>