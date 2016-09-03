<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Media Query Demo</title>
	<!--
    第一种方式：外联CSS文件
    -->
	<link type="text/css" rel="stylesheet" href="SupportedFiles/Link.css" media="only screen and (max-width:480px)"/>
    <!--
    第二种方式：内建style
    -->
    <style>
	@media screen and (min-width:480px){
		body{
			background:#00F;
		}
	}
	</style>

    
</head>

<body>
</body>
</html>