<?php 
$servername = "localhost";
$username = "laoshi";
$password = "laoshi";
$dbname = "myDB";
$cfg_db_language = 'utf8';

// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("连接管理系统失败: ");
} 
//echo "连接成功";
//设置编码
mysqli_query($conn,"set names ".$cfg_db_language);

$sql = "SELECT * FROM messageboard ORDER BY id";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    
	echo "查询结果如下表：";
    echo "<table border='2' cellspacing='0'>
		<tr>
		<th>学号</th>
		<th>姓名</th>
		<th>留言内容</th>
		</tr>";

	while($row = mysqli_fetch_assoc($result))
  	{
  		echo "<tr>";
  		echo "<td>" . $row['schoolnumber'] . "</td>";
  		echo "<td>" . $row['name'] . "</td>";
  		echo "<td>" . $row['Message'] . "</td>";
  		echo "</tr>";
 	 }
	echo "</table>";
} 
else {
    header("location:../../erro/erro6.html");
}

mysqli_close($conn);
?>