<?php
namespace app\hulitong\controller;
use think\Controller;
use think\Request;
use think\Db;
use app\common\model\Root as M;
class Admin extends Controller
{
    
    /*
     *登录页面显示
     */
    public function login()
    {
    	return $this->fetch('');
    }

    /*
     *登录验证
     */
    public function checkLogin()
    {
    	if (request()->isAjax()) {
            
            $data = [
                'username' => input('post.username'),
                'password' => input('post.password'),
            ];

            $result = model('root')->login($data);
            if ($result == 1) {
                return $this->success('恭喜登录成功','hulitong/Index/welcome');
            }else{
                return $this->error($result);
            }
        }
    }

    /*
     * 退出登录
     */
    public function loginOut()
    {
    	
    }


    /*
     *管理员显示页面
     */
    public function adminList()
    {
        $list = model('root')->paginate(10);
        $this->assign('list',$list);

        //查询root表里有多少条数据
        $count = model('root')->count();
        $this->assign('count',$count);
        
        return $this->fetch('');
    }

    /*
     *添加管理员
     */
    public function adminAdd()
    {   
        $roleinfo = model('role')->select();
        $this->assign('roleinfo',$roleinfo);

        if (request()->isAjax()) {
            $data = [
                'username' => input('post.username'),
                'password' => md5(md5(input('post.password'))),
                'repassword' => md5(md5(input('post.repassword'))),
                'nicename' => input('post.nicename'),
                'tel' => input('post.tel'),
                'email' => input('post.email'),
                'note_mark' => input('post.note_mark'),
                'sex' => input('post.sex'),
                'admin_role' => input('post.admin_role'),
            ];
            // halt($data);
            $result = model('root')->add($data);
            // halt($result);
            if ($result == 1) {
                return $this->success('添加管理员成功','hulitong/admin/adminList');
            }else{
                return $this->error($result);
            }

        // }else{
        //     return '非法请求';
        }
         
            return $this->fetch('');
       
    }

    /**
     * 删除管理员
     */
    public function adminDel()
    {
        if (request()->isAjax()) {
            $id = input('param.id');

            $delinfo = model('root')->where('id',$id)->find();
            if ($delinfo) {
                $res = $delinfo->delete();

                if ($res) {
                    return $this->success('删除管理员成功','adminList');
                }else{
                    return $this->error('删除管理员失败');
                }
            }
        }
    }
    /**
     * 角色管理--
     */
    
    public function adminRole()
    {
      // 查询状态为1的用户数据 并且每页显示10条数据
      $list = model('role')->paginate(10);

      $count = model('role')->count();
      $this->assign('count', $count);
      // 把分页数据赋值给模板变量list
      $this->assign('list', $list);
      // 渲染模板输出
      return $this->fetch();
    }

    /**
     * 添加角色
     */
    

    
    public function adminRoleAdd()
    {

         return $this->fetch('');
        

    }

    public function roleadd(){

        if (request()->isAjax()) {
            $data = [
            'role_name' => input('post.role_name'),
            'note_mark' => input('post.note_mark'),
            ];
            // halt($data);

            $result = model('role')->add($data);

            if ($result == 1) {
              return  $this->success('添加角色成功2','adminRole');
            }else{
              return $this->error($result);
            }

           
        }else{
            return '非法请求';
        }
       
     }


     /**
      * 角色编辑
      */
     
     public function adminRoleEdit()
     {
        $id = input('id');
        $list = Db::name('role')->where('id',$id)->find();
        if ($list) {
            $this->assign('list',$list);
        }
         return $this->fetch();
     }

     /**
      * [adminRoleUpdate 角色更新]
      * @Author   胡萝卜
      * @DateTime 2020-03-14T20:59:11+0800
      * @return   [type]                   [description]
      */
     public function adminRoleUpdate()
     {
         if (request()->isAjax()) {
             $data = [
                'id' => input('post.id'),
                'role_name' => input('post.role_name'),
                'note_mark' => input('post.note_mark'),
             ];

             $result = model('role')->adminRoleUpdate($data);
             if ($result == 1) {
                 return $this->success('角色更新成功','adminRole');
             }else{
                return $this->error($result);
             }
         }else{
            return '非法请求';
         }

     }

     /**
      * 删除角色
      */
     
     public function deleteRole()
     {
        if (request()->isAjax()) {
            $id = input('param.id');
            $delinfo = model('role')->find($id);

            if ($delinfo) {
                $res = $delinfo->delete();
                 if ($res) {
                     return $this->success('角色删除成功','adminRole');
                 }else{
                    return $this->error('角色删除失败');
                 }
            }else{
                return 'id不存在，或者已经删除了';
            }
        
        }
     }

    /**
     * 权限管理
     */
    
    public function adminPermission()
    {
        return $this->fetch('');
    }
}

