<?php
require_once ("conn.php");
if(isset($_SESSION['username']))
{
  echo '<!doctype html>
  <head>
    <meta charset="utf-8" />
    <title>你已登录, 正在跳转...</title>
  </head>
  <body>
    <script type="text/javascript">
      window.location.href = "admin.php";
    </script>
  </body>
  </html>';
  exit();
}
?>
<!doctype html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>邀请码系统</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/unicorn.login.css" />
  <link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div id="logo"><img src="img/logo.png" alt="邀请码系统" /></div>
  <div id="adminloginbox">
    <form id="login" name="login" method="post" action="">
      <?php
      if($_POST["submit"])
      {
        $admin=$_POST["username"];
        $pwd=md5(sha1($_POST["password"]));
        $dlm= $_POST["dengluma"];
        $sql="select * from admin where username='$admin' and password='$pwd' and dengluma='$dlm'";
        $rs=mysql_query($sql);
        if(mysql_num_rows($rs)==1){
         $_SESSION['username']=$admin;
         echo'<meta http-equiv="Refresh" content="2; url=admin.php" />
         <style>.control-group,.form-actions{display:none !important;}#adminloginbox{height:60px !important;} .tip{padding-bottom:20px;}</style>
         <p class="tip">登录成功，欢迎回来！ 2s 后自动跳转..<br/>
         <a href="admin.php">或点击马上跳转</a>！</p>';
       }else{
         echo'<p class="shake">用户名或密码或登录码输入错误</p>';
       }
     }else{
       echo'<p>请登录</p>';
     }
     ?>
     <div class="control-group">
       <div class="controls">
        <div class="input-prepend"> <span class="add-on"><i class="icon-user"></i></span>
         <input type="text" name="username" placeholder="帐号" maxlength="30" required/>
       </div>
     </div>
   </div>
   <div class="control-group">
     <div class="controls">
      <div class="input-prepend"> <span class="add-on"><i class="icon-lock"></i></span>
       <input type="password" name="password" maxlength="30" placeholder="密码" required/>
     </div>
   </div>
 </div>
 <div class="control-group">
   <div class="controls">
    <div class="input-prepend"> <span class="add-on"><i class="icon-ok"></i></span>
     <input type="text" name="dengluma" maxlength="30" placeholder="登录码" required/>
   </div>
 </div>
</div>
<div class="form-actions"> <span class="pull-left"></span> <span class="pull-right">
 <input type="submit" class="btn btn-inverse" name="submit" value="登录"/>
</span> </div>
</form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/unicorn.login.js"></script>
</body>
</html>