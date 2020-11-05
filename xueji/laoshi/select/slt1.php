<?php 
$servername = "localhost";
$username = "laoshi";
$password = "laoshi";
$dbname = "myDB";
$cfg_db_language = 'utf8';
 
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接管理系统失败: " . $conn->connect_error);
} 
//echo "连接成功";

mysqli_query($conn,"set names ".$cfg_db_language);
$sql = "SELECT * FROM grades ORDER BY schoolnumber";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    
    echo "<table border='2' cellspacing='0'>
		<tr>
		<th>学号</th>
		<th>姓名</th>
		<th>线性代数</th>
		<th>大学物理</th>
    <th>离散数学</th>
    <th>C语言</th>
    <th>JAVA</th>
    <th>大学体育</th>
    <th>微积分</th>
		</tr>";

	while($row = mysqli_fetch_assoc($result))
  	{
  		echo "<tr>";
  		echo "<td>" . $row['schoolnumber'] . "</td>";
  		echo "<td>" . $row['name'] . "</td>";
  		echo "<td>" . $row['线性代数'] . "</td>";
  		echo "<td>" . $row['大学物理'] . "</td>";
      echo "<td>" . $row['离散数学'] . "</td>";
      echo "<td>" . $row['C语言'] . "</td>";
      echo "<td>" . $row['JAVA'] . "</td>";
      echo "<td>" . $row['大学体育'] . "</td>";
      echo "<td>" . $row['微积分'] . "</td>";
  		echo "</tr>";
 	 }
	echo "</table>";
} 

else {
    header("location:../../erro/erro1.html");
}
echo "</br>";
mysqli_close($conn);

?>