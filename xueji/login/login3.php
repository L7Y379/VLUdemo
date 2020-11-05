<?php
$servername = "localhost";
$username = @$_POST[username];
$password = @$_POST[password];
$dbname = "myDB";
setcookie("username3", "$_POST[username]", time()+3600, "/");
setcookie("password3", "$_POST[password]", time()+3600, "/");

// 创建连接
$conn = mysqli_connect($servername, "xuesheng", "xuesheng",$dbname);

//查看user表是否有匹配用户
$sql = "SELECT * FROM user where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
//如果有匹配用户
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	if($row['jurisdiction'] == 3){
		setcookie("pwd3", "$row[password]", time()+3600, "/");
		header("location:../main/xuejiguanli3.html");
	}
	else if($row['jurisdiction']==1){
?>

<script type="text/javascript">  
    window.location.href="../login/login1.html";
    alert("该账户为学生账户!请选择学生身份后登录!");
</script>

<?php
	}  
	else if($row['jurisdiction']==2){
?>

<script type="text/javascript">  
    window.location.href="../login/login2.html";
    alert("该账户为教师账户!请选择教师身份后登录!");
</script>

<?php	
	}                


}
//如果没有匹配用户
else{header("location:../erro/erro.html");} 


?>