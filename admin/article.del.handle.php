 <?php 
//文章删除处理程序
require_once('../connect.php');

$id=$_GET['id'];//使用?id=4
$deletesql="delete from article where id=$id";
//$deletesql="delete from article where id=4";
//注意:单引号中的变量会当文本输出

//echo $deletesql;

if(mysqli_query($con,$deletesql)){
	echo "<script>alert('删除文章成功');window.location.href='#';</script>";
}else{
	echo "<script>alert('删除文章成功');window.location.href='#';</script>";
}
  ?>