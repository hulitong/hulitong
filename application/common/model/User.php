<?php
namespace app\common\model;

use think\Model;

/**
 * 对user表的操作
 */
class User extends Model
{
    /**
     * 添加用户
     */
    public function add($data)
    {
        $validate = new \app\hulitong\validate\User();
        if (!$validate->scene('add')->check($data)) {
        	return $validate->getError();
        }
        $result = $this->allowField(true)->save($data);
        // halt($result);
        if ($result) {
        	return 1;
        }else{
        	return '添加用户失败';
        }
    }
}
