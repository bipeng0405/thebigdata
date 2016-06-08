<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    public function index($id)
    {
       return 'haole'.$id;
    }
}


class Blog
{
    public function get($id)
    {
        return '查看id= '.$id.' 的内容';
    }

    public function read($name)
    {
        return '查看name= ' .$name. '的内容';
    }

    public function archive($year,$month)
    {
        return '查看' .$year. '/'.$month. '存档';
    }
}
