<?php
namespace Common\Controller;
use Think\controller;

class AdminBaseController extends Controller{
    public function __construct(){
        parent::__construct();
        if(!isset($_SESSION['admin'])){
            redirect(U('Admin/Login/login'));
        }
    }
    
}
