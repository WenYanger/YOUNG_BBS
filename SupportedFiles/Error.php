<?php
require_once('./Common.php');
class ErrorLog extends Common{
	public function index() {
		$this->check();
		$errorLog = isset($_POST['error_log']) ? $_POST['error_log'] : '';
		if($errorLog){
			return Response::show(401,'日志为空');
		}
		
		$sql = "insert into error_log(
								'app_id',
								'did',
								'version_id',
								'version_mini',
								'error_log',
								'create_time')
							  values(
							  	".$this->params['app_id'].",
								'".$this->params['did']."',
								".$this->params['version_id'].",
								".$this->params['version_mini'].",
								'".$errorLog."',
								".time()."
								)";
		echo $sql;
	}
}
$error = new ErrorLog();
$error->index();
?>