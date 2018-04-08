<?php
namespace Common\Model;
use Think\Model;
Class CategoryModel extends Model{
    // 自动验证
    protected $_vaildate=array(
        array('cname','require','分类名不能为空'),
        array('sort','number','排序必须为数字'),
    );

    // 添加数据
    public function addData(){
        $data=I('post.');
        if($this->create($data)){
            return $this->add();
        }
    }

    // 修改数据
    public function editData(){
        $data=I('post.');
        // p($data);exit;
        if($this->creat($data)){
            // p($data);exit;
            return $this->where(array('cid'=>$data['cid']))->save($data);
        }
    }

    // 删除数据
    public function deleteData($cid=null){
        $cid=is_null($cid) ? I('get.cid') : $cid;
        if($this->where("cid=$cid")->delete()){
            return true;
        }else{
            return false;
        }
    }

    // 传递数据库字段名 获取对应的数据
    // 不传递获取全部数据
    public function getData($field='all',$tree=1){
        if($field=='all'){
            $data=$this->select();
            if($tree){
                return \Org\Bjy\Data::tree($data,'cname');
            }else{
                return $data;
            }
        }else{
            return $this->getField("cid,$field");
        }
    }

    // 传递cid获取对应的数据
    public function getDataByCid($cid){
        return $this->where("cid=$cid")->find();
    }


}



?>