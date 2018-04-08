<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class TagController extends AuthController {

    // 标签首页
    public function index(){
        $this->display();
    }

     // 添加标签
    public function add(){
        $this->display();
    }

     // 修改标签
    public function edit(){
        $this->display();
    }
}