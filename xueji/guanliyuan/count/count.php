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


if ($_POST['schoolnumber1']==""){
  $schoolnumber1='%';
}
else{
  $schoolnumber1=@$_POST[schoolnumber1];
}
if ($_POST['schoolnumber2']==""){
  $schoolnumber2='%';
}
else{
  $schoolnumber2=@$_POST[schoolnumber2];
}

$sql="SELECT COUNT(*) AS count FROM MyGuests WHERE schoolnumber>='$schoolnumber1' and schoolnumber<='$schoolnumber2'"; 
$result=mysqli_fetch_array(mysqli_query($conn,$sql)); 
$count=$result['count']; 

$sql="SELECT COUNT(*) AS count FROM MyGuests WHERE schoolnumber>='$schoolnumber1' and schoolnumber<='$schoolnumber2' and schoolstatus='Undergraduate'"; 
$result1=mysqli_fetch_array(mysqli_query($conn,$sql)); 
$count1=$result1['count']; 
$count2=$count-$count1;

echo "总体学生中学号在"."<br>";
echo $schoolnumber1."~".$schoolnumber2."<br>";
echo "范围内的人数总共有".$count."人"."<br>"."<br>";

echo "其中本科生有".$count1."人"."<br>";
echo "研究生有".$count2."人";

 
mysqli_close($conn);
?>