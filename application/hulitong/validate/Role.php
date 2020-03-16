<?php
namespace app\hulitong\validate;
use think\Validate;

/**
 * summary
 */
class Role extends Validate
{
    protected $rule = [
		'role_name' => 'require|length:2,22|chs|unique:role',
		'note_mark' => 'require',
	];

	protected $message = [
		'role_name.require' => '角色名称不能为空',
		'role_name.length' => '角色名称长度为6-22个字符',
		'role_name.chs' => '角色名称由汉字线组成',
		'role_name.unique' => '角色已存在，请重新起名',
		'note_mark.require' => '备注不能为空'
	];

	protected $scene = [
		'add' =>  ['role_name','note_mark']
	];
}
