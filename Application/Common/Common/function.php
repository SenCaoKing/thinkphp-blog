<?php

header("Content-type:text/html;charset=utf-8");

function p($data){
    echo "<pre>".print_r($data,true)."</pre>";
}

/**
 * 字符串截取，支持中文和其他编码
 * @param  string $str     需要转换字符串
 * @param  string $start   开始位置
 * @param  string $length  截取长度
 * @param  string $charset 编码格式
 * @param  string $suffix  截断显示字符
 * @return string
 */
// function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true){
//     if(function_exists()){}
// }

?>