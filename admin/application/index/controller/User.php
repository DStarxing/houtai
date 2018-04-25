<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\UserModel;
class User extends Controller {
	
	//添加用户
	public function addUserView(){
		return $this->fetch('member-add');
	}


	// 显示用户银行卡信息
	public function showBank(){
		return $this->fetch('userBank');
	}

	// 提现请求列表
	public function requestCash(){
		return $this->fetch('');
	}
	// 显示充值请求
	public function requestRecharge(){
		return $this->fetch('');
	}

	//显示提现记录 
	public function cashList(){
		return $this->fetch('Cash-list');
	}
	// 显示投注列表
	public function showBet(){
		return $this->fetch('bet-list');
	}

	// 显示用户列表
	public function showUser(){
		return $this->fetch('User-list');
	}


	public function addUser(){

	}

	/*
	  批量删除用户 根据 余额 和 登录时间
	*/
	public function deleteUserAll(){
		$data = request()->post();
		$data = json_decode($data,1);
		$time = $data['time'] * 60 * 60 * 24;
		$time = time()-$time;
		$result = UserModel::where('coin','<',$data['coin'])->where('upTime','<',$time)->delete();
		if($result){
			return 'yes';
		}else{
			return 'no';
		}
	}


}
