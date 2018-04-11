<?php
namespace Admin\Controller;
use Common\Controller\AuthController;
class CategoryController extends AuthController {
    // 定义数据表
    private $db;

    // 定义category表数据
    private $categoryData;

    // 构造函数
    public function __construct(){
        parent::__construct();
        // 初始化时实例化category model
        $this->db=D('Category');
        // 获取category数据并赋值给$categoryData
        $this->categoryData=$this->db->getData();
    }


    // 分类列表首页
    public function index(){
        $this->assign('data',$this->categoryData());
            p($data);exit;
        $this->display();
    }

     // 添加分类
    public function add(){
        if(IS_POST){
            if($this->db->addData()){
                $this->success('分类添加成功');
            }else{
                $this->error($this->db->getError());
            }
        }else{
            $this->assign('data',$this->categoryData);
            $this->display();
        }   
    }

     // 修改分类
    public function edit(){
        $this->display();
    }
}