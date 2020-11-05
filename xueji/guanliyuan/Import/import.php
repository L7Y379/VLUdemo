<?php 
$servername = "localhost";
$username = "root";
$password = "LUOYUE.0322";
$dbname = "myDB";
$filename = @$_POST['filename'];

    function insert($file,$database,$name,$root,$pwd)//
    {
        //将表导入数据库
        header("Content-type: text/html; charset=utf-8");
        $_sql = file_get_contents($file);//写自己的.sql文件
        $_arr = explode(';', $_sql);
        $_mysqli = new mysqli($name,$root,$pwd,$database);
        
        if (mysqli_connect_errno()) 
        {
            exit('连接管理系统失败');
        }
        else{
            //执行sql语句
            $_mysqli->query('set names utf8;'); //设置编码方式
            foreach ($_arr as $_value) {
                $_mysqli->query($_value.';');
            }
            echo "导入信息库成功!";
        }
        $_mysqli->close();
        $_mysqli = null;
    }


    insert("$filename","myDB","localhost","$username","$password");
    //文件名，数据库名字,域名，用户名，密码
?>