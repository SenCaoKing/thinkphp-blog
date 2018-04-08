<?php
/**
 * 数据处理类
 * @package    tools_class
 * @author     Sen
 */
namespace Org\Bjy;
final class Data
{
    /**
     * 返回多层栏目
     * @param        $data     操作的数组
     * @param int    $pid      一级pid的值
     * @param string $html     栏目名称前缀
     * @param string $fieldPri 唯一键名，如果是表则是表的主键
     * @param string $fieldPid 父ID键名
     * @param int    $level    不需要传参数(执行时调用)
     * @return array
     */
    static public function channelLevel($data, $pid = 0, $html = "&nbsp;", $fieldPri = 'cid', $fieldPid = 'pid', $level = 1)
    {
        if(empty($data)) {
            return array();
        }
        $arr = array();
        foreach ($data as $v) {
            if ($v[$fieldPid] == $pid) {
                $arr[$v[$fieldPri]] = $v;
                $arr[$v[$fieldPri]]['_level'] = $level;
                $arr[$v[$fieldPri]]['_html'] = str_repeat($html, $level - 1);
                $arr[$v[$fieldPri]]["_data"] = self::channelLevel($data, $v[$fieldPri], $html, $fieldPri, $fieldPid, $level + 1);
            }
        }
        return $arr;
    }

    /**
     * 获得所有子栏目
     * @param          $data     栏目数据
     * @param  int     $pid      操作的栏目
     * @param  string  $html     栏目名前字符
     * @param  string  $fieldPri 表主键
     * @param  string  $fieldPid 父id
     * @param  integer $level    等级
     * @return array
     */
    static public function channelList($data, $pid = 0, $html = "&nbsp;", $fieldPri = 'cid', $fieldPid = 'pid', $level = 1)
    {
        $data = self::_channelList($data, $pid, $html, $fieldPri, $fieldPid, $level);
        if (empty($data))
            return $data;
        foreach ($data as $n => $m) {
            if ($m['_level'] == 1)
                continue;
            $data[$n]['_first'] = false;
            $data[$n]['_end'] = false;
            if (!isset($data[$n - 1]) || $data[$n - 1]['_level'] != $m['_level']) {
                $data[$n]['_first'] = true;
            }
            if (isset($data[$n + 1]) && $data[$n]['_level'] > $data[$n + 1]['_level']) {
                $data[$n]['_end'] = true;
            }
        }
        // 更新key为栏目主键
        $category=array();
        foreach ($data as $d) {
            $category[$d[$fieldPri]]=$d;
        }
        return $category;
    }



    
       
}

?>