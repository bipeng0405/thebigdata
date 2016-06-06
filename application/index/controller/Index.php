<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $data = Db::name('companys')->find();
        $this->assign('result',$data);
        return $this->fetch();
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
