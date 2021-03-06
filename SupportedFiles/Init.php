<?php
require_once('./Common.php');
class Init extends Common{
	public function index(){
		$this->check();
		//获取版本升级信息
		$versionUpgrade = $this->getVersionUpgrade($this->app['id']);
		if($versionUpgrade){
			if($versionUpgrade['type'] && $this->params['version_id']<$versionUpgrade['version_id']){
				$versionUpgrade['is_upload'] = $versionUpgrade['type'];
			}else{
				$versionUpgrade['is_upload'] = 0;
			}
			return Response::show(200,'版本信息获取成功');
		}else{
			return Response::show(400,'版本信息获取失败');
		}
	}
}
$init = new Init();
$init->index();
?>