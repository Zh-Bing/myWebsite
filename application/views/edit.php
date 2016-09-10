<meta charset="UTF-8">
<base href="<?php echo site_url();?>">


<form action="blog/do_edit" method="post">
	<input type="hidden" name="hid" value=<?php echo $blog->blogid?>>
	标题:<input type="text" name="title" value=<?php echo $blog->title?>><br />
	内容:<textarea rows="10" cols="30" name="con"><?php echo $blog->content?></textarea><br />
	<input type="submit" name="sub" value="发表">
</form>