<?php
namespace app\hulitong\controller;

/**
 * summary
 */
class Index extends Base
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
