<?php
session_start();
// 接收并处理参数
$productid = intval($_GET['productid']);
$username = $_SESSION['username'];

// 删除数据表
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $pdo->query("set names utf8");
    $sql = "delete from shop_cart where productid=? and username=?";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute(array($productid,$username));
    $rows = $stmt->rowCount();
  } catch (PDOException $e) {
    echo $e->getMessage();
  }


// 返回处理结果
if ($rows) {
  # code...
  $response = array(
    'errno' =>0,
    'errmsg' => 'success',
    'data' => true,

  );
}else {
  $response = array(
    'errno' =>-1,
    'errmsg' => 'fail',
    'data' => falsr,

  );
}
  echo json_encode($response);
?>
