<?php
namespace app\school\controller;
use think\Db;
use think\Controller;


class Index extends controller
{
    public function hello($name)
    {
        return '这是首页的'.$name.'页面';
    }
}


