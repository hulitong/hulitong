<?php
namespace app\common\model;

use  think\Model;
use think\model\concern\SoftDelete;


Class Root extends Model{

	use SoftDelete;
	
	/*
	 *添加管理员
	 */
	public function add($data)
	{
		$validate = new \app\hulitong\validate\Root();
		if (!$validate->scene('add')->check($data)) {
			return $validate->getError();
		}

		$result = $this->allowField(true)->save($data);
		
		if ($result) {
			return 1;
		}else{
			return '添加管理员失败';
		}
	}


	/**
	 * 登录验证
	 */
	
	public function login($data)
	{
		$validate = new \app\hulitong\validate\Root();
		if (!$validate->scene('login')->check($data)) {
			return $validate->getError();
		}
		$result = $this->where($data)->find();
		if ($result) {

			if ($result['status' != 1]) {
				return '此账户被禁用了';
			}
			
			$sessionData = [
				'id' => $result['id'],
				'nicename' => $result['nicename'],
				'is_super' => $result['is_super'],
			];

			session('admin',$sessionData);
			return 1;
		}else{
			return '登录失败(账号或者密码错误！)';
		}
	}
}
