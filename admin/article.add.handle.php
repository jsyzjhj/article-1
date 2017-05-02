<?php 
//文章添加处理程序
require_once('../connect.php');
//把传递过来的信息入库,在入库之前需要对所有信息进行校验
//window.location.href跳回文章发布页
if(!(isset($_POST['title'])&&(!empty('title')))){
	echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
}

//从表单里面获取值method="post"
$title=$_POST['title'];
$author=$_POST['author'];
$description=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$insertsql="insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";


//echo $insertsql;先执行打印这条语句调试,防止sql语句错误

if(mysqli_query($con,$insertsql)){
	echo "<script>alert('文章发布成功');window.location.href='article.add.php';</script>";
}else{
	echo "<script>alert('文章发布失败');window.location.href='article.add.php';</script>";
}

 ?>