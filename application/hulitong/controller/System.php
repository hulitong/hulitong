<?php

namespace app\hulitong\controller;

use think\Controller;
use think\Request;

class System extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function systemBase()
    {
        return $this->fetch('');
    }

    /**
     * 系统日志
     */
    public function systemLog()
    {
         return $this->fetch('');
    }

    /**
     * 系统类别
     */
    public function systemCategory()
    {
         return $this->fetch('');
    }

    /**
     * 系统类别添加
     */
    public function systemCategoryAdd()
    {
         return $this->fetch('');
    }

    /**
     * 系统数据
     */
    public function systemData()
    {
         return $this->fetch('');
    }

    /**
     * 系统字典
     */
    public function systemShielding()
    {
         return $this->fetch('');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
