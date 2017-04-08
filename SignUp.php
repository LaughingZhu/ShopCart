<?php
session_start();
  //注册信息处理
  $username = $_POST['username'];
  $password = $_POST['password2'];
  $timezone="Asia/Shanghai";
  date_default_timezone_set($timezone);

  // 注册信息判断

  try {
    $pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    if (!$pdo) {
      # code...
      echo "亲服务器正在忙碌，请稍后再试！";
    }
  
    $pdo -> query("set names utf8");
    //检测用户名是否已经存在
    $check_query = "select userid from user where username =?";
    $stmt =$pdo->prepare($check_query);
    $stmt->execute(array($username));
    $result=$stmt->rowCount();
    if($result) {
      echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
      exit;
    } else {
      $password = MD5($password);
      $time = date('y-m-d h:i:s',time()); //北京时间;
      $sql = "insert into user(username, password,time) values('$username','$password','$time')";
      $sql = $pdo->query($sql);

      $sql1 ="insert into shop_cart(username,datatime) values('$username','$time')";
      $sql1 = $pdo->query($sql1);
      $rows1 =$sql1->rowCount();
      $rows= $sql->rowCount();
      if ($rows&&$rows1) {
        # code...
        $response = array(
          'errno' => 1,
          'errmsg' => 'success',
          'data' => true,
        );
        exit('用户注册成功！点击此处 <a href="login.html">登录</a>');
      } else {
        $response = array(
          'errno' => -1,
          'errmsg' => 'fail',
          'data' => false,
        );
        echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
      }
    }
  } catch (PDOException $e) {
    echo $e ->getMessage();
  }


 ?>
