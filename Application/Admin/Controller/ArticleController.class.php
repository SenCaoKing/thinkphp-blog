<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class ArticleController extends AuthController{
    // 定义数据表
    private $db;

    // 构造函数 实例化ArticleModel表
    public function __construct(){
        parent::__construct();
        $this->db=D('Article');
    }

    // 文章列表
    public function index(){
        echo 'index';
        $this->display();
    }

    // 添加文章
    public function add(){
        $this->display();
    }
}