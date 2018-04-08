<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class CategoryController extends AuthController {

    // 分类列表首页
    public function index(){
        $this->display();
    }

     // 添加分类
    public function add(){
        $this->display();
    }

     // 修改分类
    public function edit(){
        $this->display();
    }
}