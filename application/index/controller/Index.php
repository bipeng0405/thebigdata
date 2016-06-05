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
