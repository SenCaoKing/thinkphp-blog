<?php
namespace Common\Controller;
use Think\controller;

class AuthController extends Controller{
    public function __construct(){
        parent::__construct();
        if(isset($_SESSION['admin'])){
            $this->error('请登陆');
        }

    }
}
?>