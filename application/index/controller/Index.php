<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function hello($name = 'bipeng')
    {
        $this->assign('name',$name);
        return $this->fetch();
    }
}
