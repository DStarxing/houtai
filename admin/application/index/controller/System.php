<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\SystemModel;
class System extends Controller {

	public function index (){
		$data = SystemModel::all();
		$webData = array();
		foreach ($data as $key => $value) {
			$webData[$value['key']] = $value['value'];
		}
		return $this->fetch('system-base',['data'=>$webData]);
	}

	public function newsView(){
		return $this->fetch('article-list');
	}

	public function previewNews(){
		return $this->fetch('article-edit');
	}

	public function previewBank(){
		return $this->fetch('bank-list');
	}
	/*修改银行卡信息*/
	public function bankEdit(){
		return $this->fetch('bank-edit');
	}

	/*游戏列表*/
	public function gameList(){
		return $this->fetch('game-list');
	}


	public function updateData(){
		$data = request()->param();
		$webArr = array();
		if($data['webName'] == ''){
			return 'error';
		}
		$num = 1;
		$num1 = 0;
		foreach ($data as $key => $value) {
			$webArr[$num1]['id']=$num;
			$webArr[$num1]['key']=$key;
			$webArr[$num1]['value']=$value;
			$num++;$num1++;
		}
		$S = new SystemModel();
		$msg = $S->saveAll($webArr);
		if($msg){
			return 'yes';
		}else{
			return 'err';
		}
	}

	



}


?>