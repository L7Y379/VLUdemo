<?php

$filename = @$_POST['filename'];
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=".$filename);
$con = mysqli_connect("localhost", "root", "LUOYUE.0322", "myDB");
if (mysqli_connect_errno($con))  
{  
    echo "连接 MySQL 失败: " . mysqli_connect_error();  
}  

$sql="SELECT * FROM user ORDER BY id"; 
$result=mysqli_query($con,$sql); 

// 获取数据 
$info=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo '<table> <tr style="border:black 1px solid">
                            <th>账户名</th>
                            <th>密码</th>
                            <th>权限</th>
                        </tr>';
foreach($info as $val){
    echo '<tr style="border:black 1px solid">';
    echo '<td>'.$val["username"].'</td><td style="vnd.ms-excel.numberformat:@">'.$val["password"].'</td><td>'.$val["jurisdiction"].'</td>';
    echo '</tr>';
}
echo "</table>";


?>