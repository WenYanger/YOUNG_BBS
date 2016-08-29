<?php
require_once('./Response.php');

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$pageSize = isset($_GET['pagesize']) ? $_GET['pagesize'] : 1;
if(!is_numeric($page) || !is_numeric($pageSize)){
	return Response::show(401,'数据不合法');
}
$offset = ($page-1) * $pageSize;
$sql = "select * from User where status = 1 order by orderby desc limit ".$offset.",".$pageSize;
?>