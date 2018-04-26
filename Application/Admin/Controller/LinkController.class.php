<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
/**
 * 回收管理
 */
class LinkController extends AdminBaseController{

    // 友情链接列表
    public function index(){
        $this->display();
    }

    // 添加友情链接
    public function add(){
        $this->display();
    }

    // 修改友情链接
    public function edit(){
        $this->display();
    }
  
}

?>