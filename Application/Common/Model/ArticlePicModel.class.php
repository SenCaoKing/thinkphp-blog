<?php
namespace Common\Model;
use Think\Model;

class ArticlePicModel extends Model{

    /**
     * 添加数据
     * @param string $aid        文章id
     * @param array  $image_path 图片路径
     */
    public function addData($aid,$image_path){
        foreach($image_path as $k => $v){
            $pic_data = array(
                'aid'=>$aid,
                'path'=>$v,
            );
            $this->add($pic_data);
        }
        return true;
    }



}



?>