<?php
/**
*处理接口公共业务
*/
require_once('Response.php');
require_once('Db.php');
class Common{
	public $params;
	public $app;
	public function check(){
		$this->params['app_id'] = $appId = isset($_POST['app_id']) ? $_POST['app_id'] : '';
		$this->params['version_id'] = $version_id = isset($_POST['version_id']) ? $_POST['version_id'] : '';
		$this->params['version_mini'] = $version_mini = isset($_POST['version_mini']) ? $_POST['version_mini'] : '';
		$this->params['did'] = $did = isset($_POST['did']) ? $_POST['did'] : '';
		$this->params['encrypt_did'] = $encrypt_did = isset($_POST['encrypt_did']) ? $_POST['encrypt_did'] : '';
		
		if(!is_numeric($appId)){
			return Response::show(401,'参数不合法');
		}
		
		//判定App是否需要加密
		$this->app = $this->getApp($appId);
		if(!$this->app){
			return Response::show(402,'AppId 不存在');
		}
		if($this->app['is_encryption'] && $encrypt_did != md5($did.$this->app['key'])){
			return Response::show(403,'没有该权限');
		}
	}
	
	public function getApp($id){
		$sql = "select *
				from version_upgrade
				where app_id = ".$id."
				and status = 1
				limit 1";
		$connect = Db::getInstance()->connect();
		$result = mysql_query($sql, $connect);
		return mysql_fetch_assoc($result);
	}
	
	public function getVersionUpgrade($appId){
		
	}
}
?>