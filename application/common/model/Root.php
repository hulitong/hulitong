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
}
