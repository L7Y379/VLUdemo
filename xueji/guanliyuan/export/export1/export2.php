<?php

$filename = @$_POST['filename'];
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=".$filename);
$con = mysqli_connect("localhost", "root", "LUOYUE.0322", "myDB");
if (mysqli_connect_errno($con))  
{  
    echo "连接 MySQL 失败: " . mysqli_connect_error();  
}  

$sql="SELECT * FROM myguests ORDER BY schoolnumber"; 
$result=mysqli_query($con,$sql); 

// 获取数据 
$info=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo '<table> <tr style="border:black 1px solid">
                            <th>学号</th>
                            <th>姓名</th>
                            <th>学生身份</th>
                            <th>邮箱</th>
                        </tr>';
foreach($info as $val){
    echo '<tr style="border:black 1px solid">';
    echo '<td style="vnd.ms-excel.numberformat:@">'.$val["schoolnumber"].'</td><td>'.$val["name"].'</td><td>'.$val["schoolstatus"].'</td><td>'.$val["email"].'</td>';
    echo '</tr>';
}
echo "</table>";


?>