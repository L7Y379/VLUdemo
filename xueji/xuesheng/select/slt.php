<?php 
$servername = "localhost";
$username = "xuesheng";
$password = "xuesheng";
$dbname = "myDB";
$cfg_db_language = 'utf8';
 
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

mysqli_query($conn,"set names ".$cfg_db_language);
$sql = "SELECT * FROM grades where schoolnumber= '$schoolnumber' and name= '$name'";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    ?>
    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>学生成绩查询</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">


        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </head>
    <body>

        <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>电子科技大学学生学科成绩</strong></h1>
                            <div class="description">
                              <p>
                                成绩信息如下
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                             <p style="text-align: center;">
                             <?php    
                             echo "姓名：".$name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."学号：".$schoolnumber;
                             ?>
                             </p>
                            </div>
                            </div>
                            <div class="form-bottom">
                            <div class="description">

    <?php

    
    echo "<table border='2' cellspacing='0'>
    <tr>
    <th>课程名</th>
    <th>课程类别</th>
    <th>课程代码</th>
    <th>课程学分</th>
    <th>课程成绩</th>
    <th>学年学期</th>
    </tr>";

  while($row = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      echo "<td>" . "线性代数" . "</td>";
      echo "<td>" . "学科通识课程" . "</td>";
      echo "<td>" . "D1100540" . "</td>";
      echo "<td>" . "4" . "</td>";
      echo "<td>" . $row['线性代数'] . "</td>";
      echo "<td>" . "2016-2017" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "大学物理" . "</td>";
      echo "<td>" . "学科通识课程" . "</td>";
      echo "<td>" . "D1101452" . "</td>";
      echo "<td>" . "4" . "</td>";
      echo "<td>" . $row['大学物理'] . "</td>";
      echo "<td>" . "2016-2017" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "离散数学" . "</td>";
      echo "<td>" . "学科基础课程" . "</td>";
      echo "<td>" . "D1107456" . "</td>";
      echo "<td>" . "3" . "</td>";
      echo "<td>" . $row['离散数学'] . "</td>";
      echo "<td>" . "2017-2018" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "C语言" . "</td>";
      echo "<td>" . "学科基础课程" . "</td>";
      echo "<td>" . "D1104862" . "</td>";
      echo "<td>" . "3" . "</td>";
      echo "<td>" . $row['C语言'] . "</td>";
      echo "<td>" . "2017-2018" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "JAVA" . "</td>";
      echo "<td>" . "学科基础课程" . "</td>";
      echo "<td>" . "D1105639" . "</td>";
      echo "<td>" . "3" . "</td>";
      echo "<td>" . $row['JAVA'] . "</td>";
      echo "<td>" . "2017-2018" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "大学体育" . "</td>";
      echo "<td>" . "体育" . "</td>";
      echo "<td>" . "D1107846" . "</td>";
      echo "<td>" . "1" . "</td>";
      echo "<td>" . $row['大学体育'] . "</td>";
      echo "<td>" . "2017-2018" . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>" . "微积分" . "</td>";
      echo "<td>" . "学科基础课程" . "</td>";
      echo "<td>" . "h1104444" . "</td>";
      echo "<td>" . "5" . "</td>";
      echo "<td>" . $row['微积分'] . "</td>";
      echo "<td>" . "2017-2018" . "</td>";
      echo "</tr>";
   }
  echo "</table>";
} 
else {
    header("location:../../erro/erro1.html");
}
?>

                          </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<?php

echo "</br>";
mysqli_close($conn);

?>