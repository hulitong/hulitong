<?php
namespace app\hulitong\validate;
use think\Validate;

class User extends Validate
{
	protected $rule = [
		'username' => 'require|length:4,22|alphaNum|unique:root',
		'nicename' => 'require|length:6,32|chsDash',
		'password' => 'require|length:6,220|alphaNum',
		// 'repassword' => 'require|length:6,220|alphaNum|confirm:password',
		'repassword' => 'require|length:6,220|alphaNum',
		'tel' => 'require|length:11|number',
		'sex' => 'require',
		'email' => 'require|email',
		'note_mark' => 'require',
	];

	protected $message = [
		'username.require' => '账号不能为空',
		'username.length' => '账号名称长度为4-22个字符',
		'username.alphaNum' => '账号名称由数字、字母组成',
		'username.unique' => '账号已存在，请重新设置',
		'password.require' => '密码不能为空',
		'password.length' => '密码名称长度为4-220个字符',
		'password.alphaNum' => '密码名称由数字、字母组成',
		'repassword.require' => '确认密码不能为空',
		'repassword.length' => '确认密码名称长度为4-220个字符',
		'repassword.alphaNum' => '确认密码名称由数字、字母组成',
		// 'repassword.confirm' => '确认密码与密码不一致，请重新设置',
		'nicename.require' => '昵称不能为空',
		'nicename.length' => '昵称名称长度为6-32个字符',
		'nicename.chsDash' => '账号名称由汉字、数字、字母、下划线组成',
		'tel.require' => '手机号码不能为空',
		'tel.length' => '手机号码长度为11个字符',
		'tel.number' => '手机号码为数字型',
		'sex.require' => '性别不能为空',
		'email.require' => '邮箱不能为空',
		'email.email' => '邮箱格式错误',
		'note_mark.require' => '备注不能为空',
	];

	protected $scene = [
		'add' =>  ['username','nicename','tel','sex','email','note_mark'],
	];
}
