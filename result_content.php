<!DOCTYPE html>
<html lang="en">
<head>
	<?php session_start(); ?>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./lib/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome.css">
	<title>商品详情</title>
  
	<style>
		* {
        margin: 0px;
        padding: 0px;
    }
    li {
      list-style: none;
    }
    body {
      font: 12px Helvetica,Arial,sans-serif;
    }
    a:hover {
      text-decoration: underline;
    }
    a {
      text-decoration: none;
      color: #000;
    }
    img {
      border: none;
      border:1px solid none;
      font: 12px Helvetica,Arial,sans-serif;
    }
    /*初始化结束*/
    #top {
      width:880px;
      position: relative;
      height: 110px;
      margin: auto;

    }
    #top ul {
      position: absolute;
      width: 380px;
      height: 50px;
      left: 550px;
      top: 10px;
      font-size: 14px;
    }
    #top ul li {
      position: relative;
      float: left;
      margin-left: 20px;
    }
    #top .search {
      position: absolute;
      top: 80px;
      left: 120px;
      width: 600px;
      height: 35px;
      font-size: 14px;
      color: #000;
    }
    #top form .choose {
      position: absolute;
      top: 80px;
      left: 40px;
      width: 50px;
      height: 35px;
      font-size: 14px;
    }
    .nav {
      position: relative;
      width: 100%;
      height: 40px;
      background:#DD2727;
    }
    #nav_top ul li {
      width: 100px;
      height: 40px;
      left: 250px;
      position: relative;
      float: left;
      font-weight: bold;
      font-size: 16px;
      top: 1px;
    }
    #nav_top ul li a {
        color: #fff;
    }
    #nav_top ul li a:hover {
      border-radius: 10px;
    }
    

	 div,ul,li{padding:0; margin:0;}
	 li{list-style-type:none;}
	 img{vertical-align:top;border:0;}

	/* box */
	 .box{width:310px;position: relative;margin-left:90px;top: 18px;}
	 .tb-pic a{display:table-cell;text-align:center;vertical-align:middle;}
	 .tb-pic a img{vertical-align:middle;}
	 .tb-pic a{*display:block;*font-family:Arial;*line-height:1;}
	 .tb-thumb{margin:10px 0 0;overflow:hidden;}
	 .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;}
	 .tb-s310, .tb-s310 a{height:310px;width:350px;}
	 .tb-s310, .tb-s310 img{max-height:310px;max-width:310px;}
	 .tb-s310 a{*font-size:271px;}
	 .tb-s40 a{*font-size:35px;}
	 .tb-s40, .tb-s40 a{height:40px;width:40px;}
	 .tb-s40, .tb-s40 img {height:33px;width:40px;}
	 .tb-booth{border:1px solid #CDCDCD;position:relative;z-index:1;}
	 .tb-booth img {width: 306px;height: 306px;}
	 .tb-thumb .tb-selected{background:none repeat scroll 0 0 #C30008;height:40px;padding:2px;}
	 .tb-thumb .tb-selected div{background-color:#FFFFFF;border:medium none;}
	 .tb-thumb li div{border:1px solid #CDCDCD;}
	 div.zoomDiv{z-index:999;position:absolute;top:0px;left:0px;width:200px;height:200px;background:#ffffff;border:1px solid #CCCCCC;display:none;text-align:center;overflow:hidden;}
	 div.zoomMask{position:absolute;background:url("images/mask.png") repeat scroll 0 0 transparent;cursor:move;z-index:1;}
	 form {position:absolute;top:180px;left: 530px;width: 602px;height: 350px;}
	 #addCart {position: absolute;top: 290px;left: 200px;}
	 form ul li {line-height: 25px;margin-bottom: 10px;}
   #title {font: 12px/1.5 tahoma,arial,"\5b8b\4f53";font-weight: 700;position: relative;margin-top: 10px;}
   #title span {font-size: 16px;}
   #zhiliang {color:#a10;font-weight: 700;}
   #price {position: relative;padding-top:30px;color:#a10;font-weight:800;width: 600px;height: 70px;background: url(./images/juan.png);}
   #price .fa {font-size: 26px;font-weight: 700;position: relative;left: -120px;}
   #price .tongyong {position: relative;top: -38px;left: 90px;color: #404040;}
   #price .price {position: relative;left: -120px;}
   form span {margin: 10px 10px;}
   .color input {
    margin-left: 10px;
   }
   #addCart {background-color: #ffeded;color: red;border: 1px solid red;font-weight: bold;}
	</style>
</head>
<body>
	<script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagezoom.min.js"></script>

	<script type="text/javascript">

  window.onload=function()
  {
		$(document).ready(function(){

			$(".jqzoom").imagezoom();
	
			$("#thumblist li a").click(function(){
				$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
				$(".jqzoom").attr('src',$(this).find("img").attr("mid"));
				$(".jqzoom").attr('rel',$(this).find("img").attr("big"));
			});

		});
}
    function s() {  
          
         alert("请登陆后再进行此操作");
         window.location.href="login.html";
     
    }
    function add_Cart(productid) {
      //ajax

      var url ="addCart.php";
      var data={"productid":productid,"num":parseInt($("#number").val())};
      var success = function (response) {

        if (response.errno == 0) {
          alert("加入购物车成功");
        } else {
          alert("加入购物车失败");
        }

      }
      $.post(url,data,success,"json");
    }

  


	</script>
	<?php 
		
		$username = $_SESSION['username'];
		$productid = intval($_GET['id']);
		
		try {
      		$pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      			$pdo -> query("set names utf8");
      			$sql = "select * from product where productid=?";
      			$stmt = $pdo->prepare($sql);
      			$stmt ->execute(array($productid));
      			$data =$stmt->fetch(PDO::FETCH_ASSOC);

      			      			
    		} catch (PDOException $e) {
      			echo $e->getMessage();
    		}   

	?>

	 <div id="top">
          <h3 style="position: absolute;width:100px; left :-90px; top:5px;"><img src="./images/logo.gif" alt="" width="95" height="42"></h3>
          <ul>
            <li><a href="index.php">商城首页</a></li>
          
            <?php 
          if ($_SESSION['username']!=null) {  
          echo "<li><a href='shopCart.php'>我的购物车 </a></li>";
          echo "<li><a href=''> <img src='./images/shangjia.png' width='16' height='16'> </a></li>  ";
          echo '<li>'.$_SESSION['username'].'</li>';
          echo "<li><a href='login.php?action=logout'>注销</a></li>";
          
        }
          else {

            echo "<li><a href='login.html'>登录 </a></li>";
            echo "<li><a href='SignUp.html'>注册</a></li>";

        }
         ?>
          </ul>
  </div>
    <hr>
  <div class="box">

		<div class="tb-booth tb-pic tb-s310">
			<a href="<?php echo $data['cover_small']; ?>"><img src="<?php echo $data['cover']; ?>" alt="宝贝" rel="<?php echo $data['cover_mid']; ?>" class="jqzoom" /></a>
		</div>

		<ul class="tb-thumb" id="thumblist">
			<li class="tb-selected"><div class="tb-pic tb-s40"><a href="#"><img src="<?php echo $data['cover_small']; ?>" mid="<?php echo $data['cover']; ?>" big="<?php echo $data['cover_mid']; ?>"></a></div></li>
			<li><div class="tb-pic tb-s40"><a href="#"><img src="images/000011.jpg" mid="images/02_mid.jpg" big="images/02.jpg"></a></div></li>
			<li><div class="tb-pic tb-s40"><a href="#"><img src="images/03_small.jpg" mid="images/03_mid.jpg" big="images/03.jpg"></a></div></li>
			<li><div class="tb-pic tb-s40"><a href="#"><img src="images/04_small.jpg" mid="images/04_mid.jpg" big="images/04.jpg"></a></div></li>
			<li><div class="tb-pic tb-s40"><a href="#"><img src="images/05_small.jpg" mid="images/05_mid.jpg" big="images/05.jpg"></a></div></li>
		</ul>	
	</div>

    <form  method="get" action="shopCart.php?id">
    	<ul id="<?php echo $data['productid']; ?>">
        <li style="display:none;"><input type="text" name="productid" value="<?php echo $data['productid'] ?>"></li>
        <li style="display:none;"><input type="text" name="price" value="<?php echo $data['price'] ?>"></li>
        <li style="display:none;"><input type="text" name="address" value="<?php echo $data['address'] ?>"></li>
    		<li id="title"><span><?php echo $data['title']; ?></span></li>
    		<li id="zhiliang"><span>30天质量问题包退换</span></li>
    		<li id="price"><span class="tongyong">全乐猪实物商品通用 </span><span class="price" style="position:relative;padding-bottom:10px;">价格</span><span class="fa fa-jpy" aria-hidden="true"> <?php echo $data['price']; ?></span></li>
        <li style="border-bottom:1px solid #eee;"><span>运费</span>
          <span>天津至</span>
          <select id="Select1" name="dizhi_1">
                   <option value="0">北京</option>
                   <option value="1">广州</option>
                   <option value="2">上海</option>
                   <option value="3">成都</option>
                   <option value="4">长沙</option>
          </select>
          <span>区</span>
          <select id="Select1" name="dizhi_2">
                   <option value="0">和平区</option>
                   <option value="1">西青区</option>
                   <option value="2">红桥区</option>
                   <option value="3">滨海新区</option>
                   <option value="4">河北区</option>
          </select>
        </li>
    		<li class="color"><span>颜色选择</span><input type="radio" name="color" checked="checked" value="black">黑色 <input type="radio" name="color" value="gold">玫瑰金<input type="radio" name="color" value="yin">星空银</li>
    		<li id="num" style="border-bottom:1px solid #eee;"><span>数量</span><input id="number" type="text" name="num" value="1" style="width:40px;height:20px;text-align:center;"></li>
    		<li></li>
    	</ul>
     	<span id="userid" style="display:none;"><?php echo $_SESSION['username']; ?></span>

    	<a id="addCart"  <?php 
        if($_SESSION['username']) {
          echo "type='submit'";
        } else {
          echo "type='button'";
          echo "onclick='s()'";
        }
       ?> class="btn btn-primary" type="button" href="javascript:add_Cart(<?php echo $data['productid'];?>)">添加至购物车</a>
    </form>
    
    
</body>
</html>