<?php
namespace app\school\controller;
use think\Db;
use think\Controller;


class index extends controller
{
    public function hello($name)
    {
        return '这是首页的'.$name.'页面';
    }
}