<?php session_start(); ?>
<html>
  <head>
    <script>

    </script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./lib/bootstrap.min.css" charset="utf-8">
    <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome.css">
    <title>商品列表</title>
    <style media="screen">
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
      height: 130px;
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
    #content {
      position: relative;
      width: 85%;
      margin: auto;
      border: 1px solid #eee;
    }
    #content .top {
      position: absolute;
      left: 20px;
      top: 20px;
      font-weight: bolder;
    }
  #content #list{
		width:100%;
		height:360px;
		margin:50px auto 2px auto;
		position:relative;
	}
	#content #list ul li {
		width:226px;
		height:370px;
    left: 45px;
		margin-left: 30px;
    position: relative;
    float: left;
		border:1px solid #eee;
	}
  #content #list ul li:hover {
    border: 4px solid #bc0000;
  }
  #content #list ul li img {
    width:210px;
    height: 210px;
  }
  #content #list ul li .fa {
    font-weight: bolder;
    color: #C00;
    font-size: 20px;
    position: relative;
    top: 20px;
    left: 10px;
  }
  #content #list ul li .title {
    color:#000;
    font-family: \5FAE\8F6F\96C5\9ED1;
    line-height: 14px;
    font-size: 12px;
    position: absolute;
    top: 260px;
    left: 0px;
  }
  #content #list ul li .title:hover {
    color: #C60;
  }
  #content #list ul li .address {
    color:#999;
    line-height: 20px;
    font-size: normal;
    position: absolute;
    top: 295px;
    left: 0px;
  }
  #content #list ul li .address:hover {
    color: #C10001 !important;
  }
  #content #list ul li hr {
    position: relative;
    top: 75px;
  }
  #content #list ul li .month_total {
    position: relative;
    width: 95px;
    height: 42px;
    top: 55px;
    padding-top: 13px;
    font-weight: bold;
    border-right: 1px solid #eee;
  }
  #content #list ul li .month_total .num {
    color: #a10;
    position: relative;
    left: 25px;
  }
  #content #list ul li .pingjia {
    position: relative;
    width: 80px;
    height: 42px;
    top: 3px;
    left: 100px;
    padding-top: 13px;
    font-weight: bold;
    border-right: 1px solid #eee;
  }
  #content #list ul li .pingjia .num {
    color: #a10;
    position: relative;
    left: 15px;
  }
  #content #list ul li .name {
    position: relative;
    width: 16px;
    height: 16px;
    top: -37px;
    left: 195px;
  }
  #content #list ul li .name:hover {
    width: 20px;
    height: 20px;
  }
	#content #pagecount{
		width:500px;
		margin:10px auto 2px auto;
		padding-bottom:20px;
		text-align:center
	 }
	#content #pagecount span{
		margin:4px;
		font-size:14px;
		position: relative;
		top:20px;
	}
	#content #list ul li#loading{
		width:120px;
		height:32px;
		line-height:32px;
		border:1px solid #d3d3d3;
		position:absolute;
		top:35%; left:42%;
		text-align:center;
		background:#f7f7f7 url(./images/loading.gif) no-repeat 8px 8px;
		-moz-box-shadow:1px 1px 2px rgba(0,0,0,.2);
		-webkit-box-shadow:1px 1px 2px rgba(0,0,0,.2);
		box-shadow:1px 1px 2px rgba(0,0,0,.2);
	}
    </style>
  </head>
  <body>
    
        <script type="text/javascript" src="lib/jquery-1.8.3.min.js"></script>
      <script type="text/javascript">
      //获取url路径？号后面的参数值。

      window.onload=function()
      {
      var search1=document.getElementById('search1');
      search1.value=window.location.href.substr(window.location.href.indexOf("=")+1);

      ocClick1();
//       function totest2(array1) 
// { 
// var parm1=document.getElementById("array1['productid']");  

// var myurl="result_content.php"+"?"+"parm1="+parm1; 
// window.location.assign(myurl); 
// } 
    }
      //上面的js是截取当前url等号后面的字符
    function ocClick1()
    {
      var curPage = 1; //当前页码
      var total,pageSize,totalPage;


    



//获取数据

  function getData(page){
	$.ajax({
		type: 'POST',
		url: 'pages.php',
		data: {'pageNum':page-1,'search':search1.value},
		dataType:'json',
		beforeSend:function(){
			$("#list ul").append("<li id='loading'>loading...</li>");  //在每个#list ul 后面添加append里面的内容
		},
		success:function(json){           //ajax success 只要请求就执行，请求失败也执行
			$("#list ul").empty();
			total = json.total; //总记录数
      pageSize = json.pageSize; //每页显示条数
      curPage = page; //当前页
      totalPage = json.totalPage; //总页数
      var li = "";
      var list = json.list;

      
    $.each(list,function(index,array){ //遍历json数据列
                li += "<li id='"+array['productid']+"'><span class='"+array['productid']+"'>"+"<img src='"+array['cover']+"'>"+"</span><span class='fa fa-jpy' aria-hidden='true'>"+array['price']+"</span><span class='title'>"+array['title']+"</span><span class='address'>"+array['address']+"</span><hr><p class='month_total'>月成交<span class='num'>x笔 </span></p><p class='pingjia'>评价<span class='num'>y万</span></p><span ><img class='name' src='./images/shangjia.png'></span></li>";
           
            });
            $("#list ul").append(li);
           var pic=document.getElementsByTagName('li');
           for(var i=0;i<pic.length;i++)
           {
            pic[i].onclick=function()
            {
               
                  window.location.href="result_content.php?id=" +this.id;
                  
            }
           }
  },
  complete:function(){ 	//生成分页条           ajax complete 是在ajax请求成功后才执行，失败不执行
    getPageBar();
  },
  error:function(){				//请求失败执行
    alert("数据加载失败");
  }
  });
  }


//获取分页条
function getPageBar(){
  //页码大于最大页数
  if(curPage>totalPage)
  curPage=totalPage;
  //页码小于1
  if(curPage<1)
  curPage=1;
  pageStr = "<span>共"+total+"条</span><span>"+curPage+"/"+totalPage+"</span>";

  //如果是第一页
  if(curPage==1){
    pageStr += "<span>首页</span><span>上一页</span>";
  }else{
    pageStr += "<span><a href='javascript:void(0)' rel='1'>首页</a></span><span><a href='javascript:void(0)' rel='"+(curPage-1)+"'>上一页</a></span>";
  }

  //如果是最后页
  if(curPage>=totalPage){
    pageStr += "<span>下一页</span><span>尾页</span>";
  }else{
    pageStr += "<span><a href='javascript:void(0)' rel='"+(parseInt(curPage)+1)+"'>下一页</a></span><span><a href='javascript:void(0)' rel='"+totalPage+"'>尾页</a></span>";
  }

  $("#pagecount").html(pageStr);
  }

  $(function(){
    getData(1);
    $("#pagecount span a").live('click',function(){
      var rel = $(this).attr("rel");			//返回attr rel的值，此处是页数
      if(rel){
        getData(rel);
      }
    });
  });
}

</script>

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
          <form id="tijiao">
            <select class="choose" name="">
              <option value="宝贝" selected="selected">宝贝</option>
              <option value="店铺">店铺</option>
            </select>
            <input type="text" id="search1" name="search"  class="search" value="" onkeydown="if(event.keyCode==13){document.getElementById('submit1').click();return false;}">
            <button type="button" id="submit1" class="btn btn-primary"  style="position:absolute; top:80px;left:730px;" onclick="ocClick1()" onKeyDown="ocClick1()">搜索</button>
          </form>

    </div>
    <hr>
    <div id="content">
      <span class="top">搜索结果：</span>
      <div id="header">
      </div>
      <div id="main">
   	    <div id="list">
    	     <ul></ul>
        </div>
   	    <div id="pagecount"></div>
      </div>
    </div>
  </body>
</html>
