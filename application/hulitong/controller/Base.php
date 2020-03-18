<?php

namespace app\hulitong\controller;

use think\Controller;

class Base extends Controller
{
    //
    public function initialize()
    {
    	if (session('?admin.id')) {
    		$this->redirect('hulitong/Index/welcome');
    	}
    }
}
