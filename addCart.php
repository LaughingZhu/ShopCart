<?php 
	//加入购物车
	$productid = intval($_POST['productid']);
	$num = intval($_POST['num']);
	session_start();
	$username =$_SESSION['username'];
	try {
      		$pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      			$pdo -> query("set names utf8");
      			$sql = "select price from product where productid=?";
      			$stmt = $pdo->prepare($sql);
      			$stmt ->execute(array($productid));
      			$data =$stmt->fetch(PDO::FETCH_ASSOC);
      			$price=$data['price'];
      			$time = date('y-m-d h:i:s',time()); 

      			$sql="select * from shop_cart where productid=? and username=?";      			
            $stmt = $pdo->prepare($sql);
      			$stmt->execute(array($productid,$username));
      			$data =$stmt->fetch(PDO::FETCH_ASSOC);
      			if ($data) {
      				$sql="update shop_cart set num=num+? where username=? and productid=?";
      				$params =array($num,$username,$productid);
      			} else {
      				$sql = "insert into shop_cart(username,productid,price,num,datatime) values(?,?,?,?,?)";
      				$params=array($username,$productid,$price,$num,$time);
      			}


      			
      			$stmt =$pdo->prepare($sql);
        		$stmt ->execute($params);
        		$rows = $stmt->rowCount();

      			      			
    		} catch (PDOException $e) {
      			echo $e->getMessage();
    		}   

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