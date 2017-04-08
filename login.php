<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="3;url=index.php"/>


  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
    <?php
    
//注销登录
if($_GET['action'] == "logout"){
   
    unset($_SESSION['username']);
     echo"<script>history.go(-1);</script>";  
    exit;
}
    $username = htmlspecialchars($_POST['username']);
    $password = MD5($_POST['password']);
    
      
     


    try {
      $pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        if (!$pdo) {
          # code...
          echo "亲服务器正在忙碌，请稍后再试！";
        }
      $pdo -> query("set names utf8");
      $sql = "select * from user where username=? and password=?";
      $stmt = $pdo->prepare($sql);
      $stmt ->execute(array($username,$password));
      $rows = $stmt->rowCount();
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

    // 4.返回结果
     if ($rows) {
       # code...
       $response = array(
         'errno' =>0,
         'errmsg' => 'success',
         'data' => true,
       );
        $_SESSION['username']=$username;
       echo $username,' 欢迎你！进入晓琛商城</a><br />';
       echo '系统将在3秒后自动跳转到商城首页,若未自动跳转,请点击<br />';
  
       echo '<a href="index.php">进入首页</a><br />';
     }else {
       $response = array(
         'errno' =>-1,
         'errmsg' => 'fail',
         'data' => false,
       );
       exit('登录失败！用户不存在.点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
     }

   ?>
</body>
</html>
