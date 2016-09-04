<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>主页</title>
<!--响应式布局-->
<!--桌面级CSS-->
<link type="text/css" rel="stylesheet" href="CSS/main_desktop.css" media="only screen and (min-width:480px)"/>
<script type="text/javascript" src="JS/PerfectMove.js"></script>
<script>
window.onload = function(){
	var c = document.getElementsByClassName('ContentLeft')[0];
	c.onmouseover = function(){
		startMove(this,{'left':0});
	}
	c.onmouseout = function(){
		startMove(this,{'left':-250});
	}
}

</script>
</head>

<body>
<div class="Whole">
  <div class="Banner"> </div>
  <div class="Content">
    <div class="ContentLeft">
      <div class="ContentLeft_userDiv">
        <div id="ContentLeft_userPicture"> 
        	<img src="image/user_defaultImage.jpg">
        </div>
        <div id="ContentLeft_userInfo">
        	<p>User</p>
        </div>
      </div>
      <div class="ContentLeft_functionSelectDiv">
        <ul>
          <li><a href="http://www.baidu.com">我的发帖</a></li>
          <li><a href="http://www.baidu.com">消息</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>
</html>