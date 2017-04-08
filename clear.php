<?php
// 将该用户下的所有购物车数据删除
session_start();
$username = $_SESSION['username'];
try {
  $pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  $pdo ->query("set names utf8");
  $sql = "delete from shop_cart where username=?";
  $stmt = $pdo->prepare($sql);
  $stmt ->execute(array($username));
  $rows = $stmt ->rowCount();
} catch (PDOException $e) {
  echo $e->getMessage();
}
// 返回处理结果
if($rows) {
      $response = array(
      'errno' => 0,
      'errmsg' => 'success',
      'data' =>true,
      );
    } else {
      $response = array(
      'errno' => -1,
      'errmsg' => 'fail',
      'data' =>false,
    );
    }
    echo json_encode($response);


 ?>
