<?php
namespace app\hulitong\controller;
use think\Controller;

/**
 * 用户（会员）控制器
 */
class User extends Controller
{
    /**
     * 用户首页
     */
   
   public function userList()
   {
   	
   		return $this->fetch('');
   }


   /**
    * 用户添加
    */
   public function userAdd()
   {
    if (request()->isAjax()) {
      $data = [
        'username' => input('post.username'),
        'nicename' => input('post.nicename'),
        'sex' => input('post.sex'),
        'tel' => input('post.tel'),
        'email' => input('post.email'),
        'note_mark' => input('post.note_mark'),
      ];

      // halt($data);
      $res = model('user')->add($data);

      if ($res == 1) {
        return $this->success('添加用户成功','user/userList');
      }else{
        return $this->error($res);
      }
    }
   	return $this->fetch('');
   }


   /**
    * 用户删除
    */
   public function userDel()
   {
   	
   	return $this->fetch('');
   }


   /**
    * 用户下载
    */
   
   public function userRecordDownload()
   {
   	return $this->fetch('');
   }


   /**
    * 用户分享
    */
   
   public function userRecordShare()
   {
   	return $this->fetch('');
   }

   /**
    * 用户浏览记录
    */
   
   public function userRecordBrowse()
   {
   	return $this->fetch('');
   }
}
