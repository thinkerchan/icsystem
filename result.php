<?php
require_once ("conn.php");
$jihuo = htmlspecialchars($_POST['jihuo']);
$check_query = mysql_query("select id from yaoqingma where yaoqingma='$jihuo' and status='0' limit 1");
if(mysql_fetch_array($check_query))
{
$checksql="update yaoqingma set status='1' where yaoqingma='$jihuo'";
if(mysql_query($checksql))
{
$_SESSION['jihuo']=$jihuo;
header("Content-Type: text/html; charset=utf-8");
echo'<!doctype html>
<head>
<meta charset="utf-8" />
<title>校验成功</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">校验结果</div>
  <div id="content">
<p>校验成功! (此邀请码校验成功后作废) <a href="index.php">[返回]</a> </p>
</div>
<span class="copyright">技术支持 @广州友源互联网信息科技有限公司</span>
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
}else{
	echo"数据更新失败！";
	}
}
else{
  header("Content-Type: text/html; charset=utf-8");
  echo'<!doctype html>
<head>
<meta charset="utf-8" />
<title>校验失败</title>
<link rel="stylesheet" href="css/unicorn.login.css" />
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="一款邀请码系统" /></div>
<div class="box">
  <div id="title">错误信息</div>
  <div id="content">
<p>您的邀请码不正确或已被校验过！<a href="index.php">[重新输入请单击此处]</a></p>
</div>
<span class="copyright">技术支持 @广州友源互联网信息科技有限公司</span>
</div>
</body>
</html>';
 }
?>