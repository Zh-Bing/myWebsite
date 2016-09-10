<meta charset="UTF-8">
<base href="<?php echo site_url();?>">

<form action="user/do_login" method="post">
	用户名:<input type="text" name="username" id="u1"><br />
	密&nbsp;码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
	<input type="reset" name="rst" value="重置">
</form>