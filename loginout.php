<?php 
require_once ("conn.php");
session_destroy();
echo '<!doctype html>
<head>
<meta charset="utf-8" />
<title>注销成功！</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">温馨提示<span id="close"><a href="###" onclick="windowclose()">X</a></span></div> 
  <div id="content">
<p>注销成功！可以<a href="admin.php">重新登录</a>！</p>  
</div>
<span class="copyright">CopyRight 2012-2013 <a href="http://www.yuxiaoxi.com">@麦田一根葱</a></span>
</div>
<script type="text/javascript">
function windowclose() {
    var browserName = navigator.appName;
    if (browserName=="Netscape") {
        window.open("", "_self", "");
        window.close();
    }
    else {
        if (browserName == "Microsoft Internet Explorer"){
            window.opener = "whocares";
            window.opener = null;
            window.open("", "_self");
            window.close();
        }
    }
}
</script>
</body>
</html>'; 
?>