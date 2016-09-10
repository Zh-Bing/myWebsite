<meta charset="UTF-8">
<base href="<?php echo site_url();?>">

<?php
	if($this->session->id){
		echo $this->session->name."已登录";
		echo '<a href="user/unlogin?id=<?php echo $this->session->id;?>">注销</a>';
	}else{
		echo "<a href='user/login'>未登录</a>";
	}

?>

<a href="blog/add">添加文章</a>

<?php
	foreach($blog as $k=>$v){
		//var_dump($v);
		//die();
?>
<h2><a href="#">标题:<?php echo $v->title?></a> | <a href='blog/edit/<?php echo $v->blogid?>'>编辑</a> |<a href="blog/del?id=<?php echo $v->blogid?>">删除</a></h2>
<li><?php echo $v->time?></li>
<p><?php echo $v->content?></p>
<hr />
<?php
	}
?>
