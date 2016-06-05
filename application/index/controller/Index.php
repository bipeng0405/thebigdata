<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'return index';
    }

    public function test()
    {
        return '这是个测试方法';
    }
    protected function hello2()
    {
        return '这是个protected方法';
    }
    private function hello3()
    {
        return '这是个privated方法';
    }
}
