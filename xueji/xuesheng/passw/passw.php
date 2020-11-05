<?php 
$servername = "localhost";
$username = "xuesheng";
$password = "xuesheng";
$dbname = "myDB";

$oldpassword  = @$_POST["oldpassword"];
$newpassword1 = @$_POST["newpassword1"];
$newpassword2 = @$_POST["newpassword2"];

// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
$pwd1=@$_COOKIE["pwd1"];

// 检测连接
if ($pwd1!=$oldpassword) {	
  ?>
<script type="text/javascript">  
    window.location.href="passw.html";
    alert("旧密码错误!");
</script>


<?php
}
if ($newpassword1 != $newpassword2) { 
  ?>
<script type="text/javascript"> 
    window.location.href="passw.html";
    alert("两次新密码输入不相同!");
</script> 

<?php
} 
if ($pwd1==$oldpassword && $newpassword1 == $newpassword2){
	$conn = mysqli_connect($servername, "root", "LUOYUE.0322",$dbname);
	mysqli_query($conn,"UPDATE user SET password='$newpassword1' WHERE username='$username'")or die ( header("location:../../erro/erro5.html")  );
	echo "密码修改成功!";
	setcookie("pwd1", "$newpassword1", time()+3600, "/");
	$pwd1=@$_COOKIE["pwd1"];
}
 
mysqli_close($conn);
?>