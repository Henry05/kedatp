<?php
namespace app\index\controller;
use think\Controller;

class Index extends  Controller
{
    public function hello($name = '123')
    {
		$this->assign('name',$name);
		return $this->fetch();
    }
}
