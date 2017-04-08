<?php
session_start();
$host="localhost";
$db_user="root";
$db_pass="xiaochen";
$db_name="shop";
$timezone="Asia/Shanghai";

header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间

$page = intval($_POST['pageNum']);
$search = $_POST['search'];

 $db=new mysqli('localhost','root','xiaochen','shop');
		 $db->query("SET NAMES 'utf8'");
		if (mysqli_connect_errno()) {                  //检查PHP是否连接上MYSQL
			# code...
			echo "Error:Could not connect to database.Please try again later.";
			exit;
		}


		mysqli_select_db($db,"shop");
		//字符转换，读库
$sql = "select productid from product where title like '%$search%'";
$result = $db->query($sql);
$total = mysqli_num_rows($result);//总记录数

$pageSize = 4; //每页显示数
$totalPage = ceil($total/$pageSize); //总页数

$startPage = $page*$pageSize;
$arr['total'] = $total;
$arr['pageSize'] = $pageSize;
$arr['totalPage'] = $totalPage;
$query = mysqli_query($db,"select productid,cover,price,address,title from product where title like '%$search%' order by productid asc limit $startPage,$pageSize");
while($row=mysqli_fetch_array($query)){
	 $arr['list'][] = array(
	 	'productid' => $row['productid'],
		'cover' => $row['cover'],
		'price' => $row['price'],
		'address' => $row['address'],
		'title' => $row['title'],
	 );
}
//print_r($arr);
echo json_encode($arr);
?>
