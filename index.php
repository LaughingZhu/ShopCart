
<?php 

  session_start();

 ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>乐猪商城</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome.css">
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
  </head>
  <style type="text/css">
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
    .container{
      width: 100%;
      margin: auto;
      padding: 0px;
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
    
    /*#top .search {
      position: absolute;
      top: 80px;
      left: 120px;
      width: 600px;
      height: 35px;
      font-size: 14px;
      color: #000;
    }*/
    #top form .choose {
      position: absolute;
      top: 80px;
      left: 40px;
      width: 50px;
      height: 35px;
      font-size: 14px;
    }
    #nav_top {
      top:10px;
      z-index: 9;
      position: relative;
    }
    .nav_menu {
      position: relative;
      width: 100%;
      height: 40px;
      padding-top: 10px;

      background:#DD2727;
    }
    #nav_top ul li {
      width: 100px;
      height: 40px;
      left: 280px;
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
    /*图片轮播*/
      #lunbo {
        width: 100%;
        margin: 0 auto;
        position: relative;
      }
        #lunbo .example2{}
        #lunbo .example2 ol{position:absolute;width: 180px;height: 20px;top:410px;left:650px; }
        #lunbo .example2 ol li{float:left;width: 15px;height: 15px;margin: 10px;background: #fff; border-radius: 10px;}
        #lunbo .example2 ol li.seleted{background: #1AA4CA;}
        #lunbo .luara-left{position:relative;padding:0;overflow: hidden;}
        #lunbo .luara-left ul{position: relative;margin: 0;}
        #lunbo .luara-left ul li{float: left;padding: inherit;margin: inherit;list-style: none;}
        #lunbo .luara-left ul li img{width: 100%;}
    /*内容部分*/
      /*#content {
        width: 100%;
        margin: auto;
        position: relative;
      }*/
      #content ul {
        width: 1300px;
        position: relative;
        left :20px;
      }
      #content ul li {
        position: relative;
        float: left;
        margin-left: 10px;
      }
      #content ul li img {
        width: 250px;
      }
      #content .img_mid {
        position: relative;
        margin: auto;
        width: 600px;
        margin: 20px 0px;
      }
    .text {
      position: relative;
      text-align: center;
      width: 180px;
      height: 40px;
      top: 50px;
      padding-top: 10px;
      background-color: #C60A0A;
      left: 70px;
      z-index: 10;
      font-size: 16px;
      color: #fff;
      font-weight: bold;
    }
    .text span {
      position: absolute;
      left: 40px;
      top: 12px;
    }
    .text_bottom ul {
      position: absolute;
      z-index: 99;
      top:90px;
      left: 55px;
      width: 180px;
    }
    .text_bottom ul li {
      width: 180px;
      position: relative;
      left: 15px;
      font-size: 14px;
      line-height: 31px;
      z-index: 100;

      background-color: #eee;
    }
    .text_bottom ul li a {
	     display: block;
	       font-size: 14px;
	        font-weight: bold;
        }
    .text_bottom ul li a span {
      width: 20px;
      position: relative;
      left: 5px;
      text-align: center;
      margin-right: 5px;
    }
    .text_bottom ul li a:hover {
      text-decoration: none;
      background-color: #fff;
      color: #000;
       }
    .text_bottom ul li ul {
	     display: none;
     }
    .text_bottom ul li:hover ul {
	     top: 0px;
	      left: 180px;
	       display: block;
	        position: absolute;
	         z-index: 120;
           width: 600px;
           height: 400px;
           background-color: #fff;

         }
    .text_bottom ul li:hover ul li {
	     height: 27px;
       width: 90px;
       margin-bottom: 40px;
       background-color: #fff;
     }
    .text_bottom ul li:hover ul li span {
       font-size: 12px;
       font-weight: bolder;
       letter-spacing: 1px;
     }
    .text_bottom ul li:hover ul li ul li a {
	     background: #fff;
	      width: 60px;
	       height: 27px;
         left: 0px;
         top: 3px;
	        line-height: 27px;
	         color: #000;
	          overflow: hidden;
	           font-size: 12px;
	            font-weight: bold;
	             display: block;
	              filter: alpha(opacity=70);
	               opacity: 0.7; /*设置透明度，w3c标准透明度就是opacity,filter只有IE才能用,其他浏览器都支持opacity*/
	                -moz-opacity: 0.7;	/*提供给mozilla firefox的css属性,用来控制透明度*/
	                 -khtml-opacity: 0.7;	/*-khtml-opacity: 0.5; 这个为了支持一些老版本的Safari浏览器*/
      }
      .text_bottom ul li:hover ul li a:hover {
	        background: #A3CBE8;
	        color: #0D4D94;
        }
    .text_bottom ul li:hover ul li ul li  {
      position: relative;
      float: left;
      height: 20px;
      left: -15px;
      margin-bottom:0px;
      margin: 3px;
      width: 50px;
      margin-right:15px;
    }
    .img-responsive {
      display: inline-block;
      height: auto;
      max-width: 100%;
    }
    .container{
      clear: both;
  }
  .nav{
    position: relative;
    margin: 0px 140px auto;
  }


  </style>
  <body>
    <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <!--Luara js文件-->
    <script src="js/jquery.luara.0.0.1.min.js"></script>
    <div class="container">

     <!--  <div id="top">
           
            <ul>
              <li><a href="#">商城首页</a></li>
              

              
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

        
        
        
            <form id="tijiao1" action="search_result.php" method="get">
              <select class="choose" name="">
                <option value="宝贝" selected="selected">宝贝</option>
                <option value="店铺">店铺</option>
              </select>
              <input type="text" name="search2" value="" class="search" id="search2">
              <button type="sublimt" class="btn btn-primary" style="position:absolute; top:80px;left:730px;" >搜索</button>
            </form>

      </div> -->

      <nav  class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#"><h3 style="position: relative;width:100px; left :0px; top:-30px;"><img src="./images/logo.gif" alt="" width="95" height="42"></h3></a>
   </div>
   <div>
      <ul class="nav navbar-nav navbar-right">
         
        <form class="navbar-form navbar-left" role="search" action="search_result.php" method="get">
         <div class="form-group">
            <input type="text" class="search form-control" placeholder="请输入商品关键字" name="search2" value="" id="search2">
         </div>
         <button type="submit" class="btn btn-default">搜索</button>
      </form>
      <li><a href="#">商城首页</a></li>
          <?php 
          if ($_SESSION['username']!=null) {  
          echo "<li><a href='shopCart.php'>我的购物车 </a></li>";
          echo "<li><a href=''> <img src='./images/shangjia.png' width='16' height='16'> </a></li>  ";
          echo "<li><a href=''>".$_SESSION['username']."</a></li>";
          echo "<li><a href='login.php?action=logout'>注销</a></li>";
          
        }
          else {

            echo "<li><a href='login.html'>登录 </a></li>";
            echo "<li><a href='SignUp.html'>注册</a></li>";

        }
         ?>
      </ul>

   </div>
   
</nav>
  
      <div class="text_bottom">
        <ul>
      <li><a href="#"><span class="fa fa-female" aria-hidden="true"></span>女装 /内衣</a>
        <ul class="">
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
              <span>当季流行></span>
          </li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>精选上装></span></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>浪漫裙装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>女士下装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>特色女装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>文胸塑身></li>
        </ul>
      </li>
      <li><a  href="#"><span class="fa fa-male" aria-hidden="true"></span> 男装 /运动户外</a>
        <ul class="">
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
              <span>当季流行></span>
          </li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>精选上装></span></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>浪漫裙装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>女士下装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>特色女装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>文胸塑身></li>
        </ul>
      </li>
      <li><a  href="#"><span class="fa fa-shopping-bag" aria-hidden="true"></span> 女鞋 /男鞋 /箱包</a>
        <ul class="">
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
              <span>当季流行></span>
          </li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>精选上装></span></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>浪漫裙装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>女士下装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>特色女装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>文胸塑身></li>
        </ul>
      </li>
      <li><a  href="#"><span class="fa fa-diamond" aria-hidden="true"></span> 腕表 /珠宝饰品 /眼镜</a>
        <ul class="">
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
              <span>当季流行></span>
          </li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>精选上装></span></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>浪漫裙装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>女士下装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>特色女装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>文胸塑身></li>
        </ul>
      </li>
      <li><a  href="#"><span class="fa fa-desktop" aria-hidden="true"></span>手机 /数码 /电脑办公</a>
        <ul class="">
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
              <span>当季流行></span>
          </li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>精选上装></span></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>浪漫裙装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>女士下装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>特色女装></li>
           <li>
             <ul class="text_right" style="width:485px; height:55px;border-bottom: 1px dashed #eee;  position:absolute; left:100px; ">
                <li><a href="#">新风尚女装</a></li>
                 <li><a href="#">女士新品</a></li>
                 <li><a href="#">同款睡衣</a></li>
                 <li><a href="#">内衣商场</a></li>
                 <li><a href="#">夏季新品</a></li>
                 <li><a href="#">同款内衣</a></li>
                 <li><a href="#">女装商场</a></li>
                 <li><a href="#">时尚套装</a></li>
                 <li><a href="#">短袖T恤</a></li>
              </ul>
             <span>文胸塑身></li>
        </ul>
      </li>
    </ul>

      </div>

      <div class="text">
        商品分类
        <span  class="fa fa-list" aria-hidden="true"></span>

      </div>

      <div id="nav_top">
        <ul class="nav_menu">
          <li><a href="#">乐猪超市</a></li>
          <li><a href="#">乐猪国际</a></li>
          <li><a href="#">乐猪会员</a></li>
          <li><a href="#">品牌街</a></li>
          <li><a href="#">电器城</a></li>
          <li><a href="#">乐鲜生</a></li>
          <li><a href="#">医药馆</a></li>
          <li><a href="#">营业厅</a></li>
          <li><a href="#">魅力值</a></li>
          <li><a href="#">乐猪旅行</a></li>
        </ul>
      </div>
      
      <div id="lunbo">

          <div class="example2">
            <ul>
              <li><a href="#"><img class="img-responsive" src="images/000006.jpg" alt="1"/></a></li>
              <li><a href="#"><img class="img-responsive" src="images/000007.jpg" alt="2"/></a></li>
              <li><a href="#"><img class="img-responsive" src="images/000008.jpg" alt="3"/></a></li>
              <li><a href="#"><img class="img-responsive" src="images/000009.jpg" alt="4"/></a></li>
            </ul>
            <ol>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ol>
          </div>
          <!--Luara图片切换骨架end-->
          <script>

          $(function(){
          <!--调用Luara示例-->
            $(".example2").luara({width:"1349",height:"",interval:3000,selected:"seleted",deriction:"left"});

          });
          </script>


      </div>
      <div id="content">
        <div id="img_mid">
          <center><img src="./images/000010.png" alt="" class="img_mid"/></center>
        </div>

          <ul>
            <li><a href="#"><img src="./images/000001.jpg" alt="" /></a></li>
            <li><a href="#"><img src="./images/000002.jpg" alt="" /></a></li>
            <li><a href="#"><img src="./images/000003.jpg" alt="" /></a></li>
            <li><a href="#"><img src="./images/000004.jpg" alt="" /></a></li>
            <li><a href="#"><img src="./images/000005.jpg" alt="" /></a></li>
          </ul>
      </div>
   </div>
      <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </body>
</html>
