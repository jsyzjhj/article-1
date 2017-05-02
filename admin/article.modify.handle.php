 <?php 
//文章修改处理程序
 	//数据库的配置及初始化
	require_once('../connect.php');
	//将表单里面的信息获取过来,通过隐藏域传递过来的id,通过表单传递过来的文章,作者等
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dateline=time();
	$updatesql="update article set title='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id=$id";

//echo $updatesql;
	
	if(mysqli_query($con,$updatesql)){
		echo "<script>alert('修改文章成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('修改文章失败');window.location.href='article.manage.php';</script>";
	}
	
  ?>
  