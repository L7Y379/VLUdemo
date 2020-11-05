<?php
$servername = "localhost";
$username = @$_POST[username];
$password = @$_POST[password];
$dbname = "myDB";
setcookie("username2", "$_POST[username]", time()+3600, "/");
setcookie("password2", "$_POST[password]", time()+3600, "/");

// 创建连接
$conn = mysqli_connect($servername, "xuesheng", "xuesheng",$dbname);

//查看user表是否有匹配用户
$sql = "SELECT * FROM user where username='$username' and password='$password'";
$result = mysqli_query($conn, $sql);
//如果有匹配用户
if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	if($row['jurisdiction'] == 2){
		setcookie("pwd2", "$row[password]", time()+3600, "/");
		header("location:../main/xuejiguanli2.html");
	}
	else if($row['jurisdiction']==1){
?>

<script type="text/javascript">  
    window.location.href="../login/login1.html";
    alert("该账户为学生账户!请选择学生身份后登录!");
</script>

<?php
	}  
	else if($row['jurisdiction']==3){
?>

<script type="text/javascript">  
    window.location.href="../login/login3.html";
    alert("该账户为管理员账户!请选择管理员身份后登录!");
</script>

<?php	
	}                


}
//如果没有匹配用户
else{header("location:../erro/erro.html");} 


?>