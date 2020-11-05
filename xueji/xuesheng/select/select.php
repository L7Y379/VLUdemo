<?php 
$servername = "localhost";
$username = "xuesheng";
$password = "xuesheng";
$dbname = "myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接管理系统失败: " . $conn->connect_error);
} 
//echo "连接成功";

if ($_POST['schoolnumber']==""){
  $schoolnumber='%';
}
else{
  $schoolnumber=@$_POST[schoolnumber];
}
if ($_POST['name']==""){
  $name='%';
}
else{
  $name=@$_POST[name];
}
if ($_POST['schoolstatus']==""){
  $schoolstatus='%';
}
else{
  $schoolstatus=@$_POST[schoolstatus];
}
if ($_POST['email']==""){
  $email='%';
}
else{
  $email=@$_POST[email];
}


$sql = "SELECT * FROM MyGuests where schoolnumber like '$schoolnumber'and name like '$name'and schoolstatus like '$schoolstatus'and email like '$email'";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    
	echo "查询结果如下表：";
    echo "<table border='2' cellspacing='0'>
		<tr>
		<th>学号</th>
		<th>姓名</th>
		<th>就读类别</th>
		<th>电子邮件</th>
		</tr>";

	while($row = mysqli_fetch_assoc($result))
  	{
  		echo "<tr>";
  		echo "<td>" . $row['schoolnumber'] . "</td>";
  		echo "<td>" . $row['name'] . "</td>";
  		echo "<td>" . $row['schoolstatus'] . "</td>";
  		echo "<td>" . $row['email'] . "</td>";
  		echo "</tr>";
 	 }
	echo "</table>";
} 
else {
    header("location:../../erro/erro1.html");
}


 
mysqli_close($conn);
?>