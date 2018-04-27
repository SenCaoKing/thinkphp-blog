<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 后台登陆
 */
class LoginController extends Controller{
    // 登陆页面
    public function login(){
        if(IS_POST){
            $data=I('post.');
            if(check_verify($data['verify'])){
                $password=M('config')->getFieldByName('ADMIN_PASSWORD','value');
                if(md5($data['ADMIN_PASSWORD']==$password)){
                    session('admin','admin');
                    $this->success('登录成功',U('Admin/Index/index'));
                }else{
                    $this->error('密码输入错误');
                }
            }else{
                $this->error('验证码输入错误');
            }
        }else{
            $this->display();
        }
    }

    // 生成验证码
    public function showVerify(){
        show_verify();
    }



}

?>