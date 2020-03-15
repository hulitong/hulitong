<?php
namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

Class Role extends Model{

	use SoftDelete;
	protected $deleteTime = 'delete_time';
	
	/*
	 *添加管理员
	 */
	public function add($data)
	{
		
		$validate = new \app\hulitong\validate\Role();

		if (!$validate->scene('add')->check($data)) {
			return $validate->getError();
		}

		$result = $this->allowField(true)->save($data);

		if ($result) {
			return 1;
		}else{
			return '添加失败';
		}
	}


	/**
	 * 更新角色
	 */
	
	public function adminRoleUpdate($data)
	{
		$validate = new \app\hulitong\validate\Role();
		if (!$validate->scene('add')->check($data)) {
			return $validate->getError();
		}

		// $res = $this->save($data);
		$datainfo = $this->find($data['id']);
		$datainfo->role_name = $data['role_name'];
		$datainfo->note_mark = $data['note_mark'];
		$res = $datainfo->save();
		if ($res) {
			return 1;
		}else{
			return '更新角色失败';
		}
	}

}
