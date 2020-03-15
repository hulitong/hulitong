<?php
namespace app\hulitong\controller;

use think\Controller;

/**
 * summary
 */
class Index extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }


    public function index()
    {
    	return $this->fetch('');
    }

    public function welcome()
    {
    	return $this->fetch('');
    }
}
