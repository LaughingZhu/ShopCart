<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./lib/bootstrap.min.css" charset="utf-8">
  <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome.css">

  <title>我的购物车</title>
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
    form {
      width:980px;
      position: relative;
      margin: auto;
      
    }
    #tou {
      margin-top: 20px;
    }
    #tou li {
        position: relative;
        float: left;
        left: 570px;
        margin-right: 87px;
    }
    #tou .shop {
      position: absolute;
      left: 80px;
    }
    .address {
      position: absolute;
      top:0px; 
      left: 20px;
    }
    .content {
      position: relative;
      margin:10px 10px;
      height: 160px;
      border:1px solid #bbb;
      margin-top:60px;
      padding:  20px;
    }
    .content li {
      position: relative;
      float: left;
      position:relative;
      left:530px;
      top: 40px;
      margin-right: 75px;
    }
    #picture {
      position: absolute;
      left: 30px;

    }
    #title {
      position: absolute;
      width: 160px;
      top: 50px;
      left: 180px;
    }
    #title:hover {
      color: #ff6600;
      text-decoration: underline;
    }
    #caozuo span{
        line-height: 30px;
    }
    #bottom li {
      position: relative;
      float: left;
      margin-right: 40px;
      left: 120px;
      top: -40px;
    }
  </style>
</head>
<body>
<script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>
  <?php 
      $username = $_SESSION['username'];
      $dizhi_1 = $_GET['dizhi_1'];
      $dizhi_2 = $_GET['dizhi_2'];
      $color = $_GET['color'];

      try {       //代码正确运行
      $pdo = new PDO("mysql:host=localhost;dbname=shop","root","xiaochen",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      $pdo -> query("set names utf8");
      
      $time = date('y-m-d h:i:s',time()); 
      //3.完成购物车数据的添加操作(判断当前购物车当中是否已经加入该商品)
      $sql = "select p.productid,p.cover,p.title,p.price,p.address,c.num from product p right join shop_cart c on p.productid=c.productid where c.username =?";
      $stmt = $pdo->prepare($sql);
      $stmt -> execute(array($username));
      $data = $stmt ->fetchAll(PDO::FETCH_ASSOC);
 //购物遍历查询
    } catch (PDOException $e) {   //代码出现错误
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
   
    <form action="">
      <span style="margin-left:40px;font-size:20px;font-weight:bold;color:#f40;">全部商品</span>
      <ul id="tou">
        
        <span class="shop">商品信息</span>
        <li>单价</li><li>数量</li><li>金额</li><li>操作</li>
        
      </ul>
     <script type="text/javascript">

 
      function change_Num(productid,num) {
      //ajax
        var url ="changeNum.php";
        var data={"productid":productid, "num":num};
        
        var success = function (response) {
          if (response.errno==0) {
              var price =($("#product-"+productid).val())*($("#p-"+productid).html());
              $("#total-"+productid).html(price);
          }
        }

        $.post(url,data,success,"json");
      }


     function delPro(productid) {
       //通过ajax将商品的id传递给php脚本进行数据表的删除
       var url ="deleteProduct.php";
       var data = {"productid":productid};
       var success = function(response) {
         if (response.errno == 0) {
           $("#ul-"+productid).remove();//移除被选元素
         }

       }
       $.get(url,data,success,"json");
     }

     function clearCart() {
       var url= "clear.php";
       var success = function(response) {
         if (response.errno == 0) {
           $(".products").remove();
         }
       }
       $.get(url,success,"json");
     }

   </script>
       <?php           $total=0;
          foreach($data as $product):     //foreach 后面是冒号不是分号
        ?>
      <ul  class="content"  id="ul-<?php echo $product['productid']; ?>">
        <span class="address" style="color:#000;font-weight:700;">店铺： <?php echo $product['address']; ?> </span>

        <span id="picture"><img src="<?php echo $product['cover']; ?>" style="width:130px;height:130px;" alt=""></span>
        <a href="" id="title"><?php echo $product['title']; ?></a>
        <li ></li>
        
        <li class='fa fa-jpy' aria-hidden='true' style="color:#f40;" ><span id="p-<?php echo $product['productid']; ?>"><?php echo $product['price']; ?></span></li>
        <li><input  style="width:40px;text-align:center;" type="text" name="num" value="<?php echo $product['num']; ?>" onblur="change_Num(<?php echo $product['productid']; ?>,this.value)" id="product-<?php echo $product['productid']?>"></li>
        <li class='fa fa-jpy' aria-hidden='true' style="color:#f40;" ><span id="total-<?php echo $product['productid']; ?>"><?php echo $product['num']*$product['price']; ?></span></li>
        <li style="width:60px;" id="caozuo"><span>移出收藏夹</span><a href="javascript:delPro(<?php echo $product['productid']; ?>)" >删除</a></li>
      </ul>

    <?php 
    $total+=$product['price']*$product['num'];
      endforeach;
    ?>
    
       
      <p style="width:100%;height:50px;background-color:#e5e5e5;position:relative;margin-top:60px;">
        <button type="button" style=" width:80px;left:0px;position:relative;height:60%;background-color:#b0b0b0;color:#fff;font-size:14px;top:10px;" onclick="clearCart()">清空购物车
         </button>
         <button type="button" style=" width:120px;float:right;position:relative;height:100%;background-color:#b0b0b0;color:#fff;font-size:20px;">结算
         </button>
          <span style="position:relative;width:100px;left:650px;top:15px; "> 合计：
            <span id="" class='fa fa-jpy' aria-hidden='true' style="color:#a10;font-size:18px;"> <?php echo $total; ?>
            </span>
          </span>
         <ul id="bottom" style="position:absolute; width:500px;">
          <li><input type="checkbox" >全选</li>
          <li>删除</li>
          <li>移出收藏夹</li>
          <li>分享</li>
        </ul>
      </p>
    </form>
        
       
</body>
</html>
       