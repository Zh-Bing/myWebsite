<meta charset="UTF-8">
<base href="<?php echo site_url();?>">
<link rel="stylesheet" href="css/1.css">
<script src="js/jquery.min.js"></script>

<div id="d1">
<form action="user/do_reg" method="post">
	用户名:<input type="text" name="username" id="u1"><br />
	密&nbsp;码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="注册">
	<input type="reset" name="rst" value="重置">
</form>
</div>

<script>
	$(function(){
		//$("#u1").val('admin');
		$("#u1").on("blur",function(){
			$.post('user/check','username='+this.value,function(data){
				if(data=='error'){
					$("#u1").after("<span id='s2'>用户名已存在</span>");
				}else{
					$('#s2').remove();
				}
			},'text');
		})
	});
</script>