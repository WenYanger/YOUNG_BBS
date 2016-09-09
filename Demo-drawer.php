<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style>
body {
	margin: 0;
	padding: 0;
}
.Content {
	left: 0;
	right: 0;
	top: 0px;
	height: 5000px;
	padding-bottom: 200px;
	zoom: 1;
	z-index: -1;
	background-color: rgba(0,153,204,1);
}
.FixedContent {
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	height: 400px;
	zoom: 1;
	z-index: 0;
	background-image: url(image/background.png);
}
.FloatContent {
	position: absolute;
	float: left;
	margin-top: 400px;
	height: 800px;
	left: 0;
	right: 0;
	background-color: rgba(51,255,102,1);
	z-index: 1;
}
</style>
</head>

<body>
<div class="Content">
  <div class="FloatContent"> </div>
  <div class="FixedContent"> </div>
</div>
</body>
</html>