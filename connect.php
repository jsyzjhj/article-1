<?php 
//MySQL连接初始化程序

header('Content-type:text/html;charset=utf-8');
//引入config.php中定义的数据
require_once('config.php');

//连库,选库,设定字符集
if($con=mysqli_connect(HOST,USERNAME,PASSWORD)){
	echo "连接成功";
}else{
	echo "连接失败";
}
mysqli_select_db($con,"study");
mysqli_query($con,"set names utf8");

?>