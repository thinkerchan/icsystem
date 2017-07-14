<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <title>邀请码系统</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><a href="login.php"><img src="img/logo.png" alt="logo" /></a></div>
  <div class="box">
    <div id="title">邀请码校验</div>
    <div id="content">
      <form action="result.php" method="post">
        <div>
          <input type="text" id="jihuo" name="jihuo" placeholder="请输入邀请码" onKeyUp="value=value.replace(/[\W]/g,'')" required/>
          <input type="submit" class="btn btn-info" value="校 验" onClick="CheckForm(this.form)"/>
        </div>
      </form>
    </div>
    <span class="copyright">技术支持 @广州友源互联网信息科技有限公司</span>
  </div>
  <script type="text/javascript">
    function CheckForm(frm){
      var name=frm.jihuo;
      if(name.value==""){
        name.setCustomValidity("请填写邀请码！");
      }else{
        name.setCustomValidity("");
      }
    }
  </script>
</body>
</html>