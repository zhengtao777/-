<?php

namespace App\Tools;

/**
 * 公共方法类
 */
class TollsAdmin
{

    /**
     *  无限级分类的数据组装函数
     * @param $array $data
     * @param $fid  父类id
     */

    public static function buildTree($data, $fid=0)
    {

        if(empty($data)){
            return [];
        }

        //  定义一个静态常量，用来存储无限级分类的数据
        static $menus = [];

        foreach($data as $key => $value){

            //  判断当前循环的内容中fid是否等于函数fid参数
            if($value['fid'] == $fid){

            }

        }


    }


}