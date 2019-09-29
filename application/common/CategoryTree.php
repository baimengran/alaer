<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/4
 * Time: 16:40
 */

namespace app\common;


class CategoryTree
{
    public function getChildren($datas, $pid=1,$level = 1)
    {
        static $data = array();
        foreach ($datas as $k => $v) {
            if ($v['pid'] == $pid) {
                $data[]=$v;
                unset($datas[$k]);
                $this->getChildren($datas, $v['id'], $level);
            }
        }
        return $data;
    }
}