<?php 
$servername = "localhost";
$username = "root";
$password = "LUOYUE.0322";
$dbname = "myDB";
$cfg_db_language = 'utf8';

$schoolnumber = @$_POST["schoolnumber"];
$name = @$_POST["name"];
$message = @$_POST["message"];
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("连接管理系统失败: ");
} 
//echo "连接成功";
//设置编码
mysqli_query($conn,"set names ".$cfg_db_language);

$sql = "INSERT INTO messageboard (schoolnumber, name, Message)
VALUES ('$_POST[schoolnumber]', '$_POST[name]', '$_POST[message]')";
 
if ($conn->query($sql) === TRUE) {
    echo "留言添加成功";
} else {
    header("location:../../erro/erro6.html");
}

mysqli_close($conn);
?>