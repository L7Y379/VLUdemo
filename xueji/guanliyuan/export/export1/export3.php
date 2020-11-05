<?php

$filename = @$_POST['filename'];
$cfg_db_language = 'utf8';
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=".$filename);
$con = mysqli_connect("localhost", "root", "LUOYUE.0322", "myDB");
if (mysqli_connect_errno($con))  
{  
    echo "连接 MySQL 失败: " . mysqli_connect_error();  
}  

mysqli_query($con,"set names ".$cfg_db_language);

$sql="SELECT * FROM grades ORDER BY schoolnumber"; 
$result=mysqli_query($con,$sql); 

// 获取数据 
$info=mysqli_fetch_all($result,MYSQLI_ASSOC);


echo '<table> <tr style="border:black 1px solid">
                            <th>学号</th>
                            <th>姓名</th>
                            <th>线性代数</th>
                            <th>大学物理</th>
                            <th>离散数学</th>
                            <th>C语言</th>
                            <th>JAVA</th>
                            <th>大学体育</th>
                            <th>微积分</th>
                        </tr>';
foreach($info as $val){
    echo '<tr style="border:black 1px solid">';
    echo '<td style="vnd.ms-excel.numberformat:@">'.$val["schoolnumber"].'</td><td>'.$val["name"].'</td><td>'.$val['线性代数'].'</td><td>'.$val['大学物理'].'</td><td>'.$val['离散数学'].'</td><td>'.$val['C语言'].'</td><td>'.$val['JAVA'].'</td><td>'.$val["大学体育"].'</td><td>'.$val["微积分"].'</td>';
    echo '</tr>';
}
echo "</table>";


?>