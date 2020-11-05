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


$sql = "SELECT * FROM MyGuests ORDER BY schoolnumber";
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