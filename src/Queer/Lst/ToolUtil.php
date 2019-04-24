<?php
/**
 * 工具类
 * Created by PhpStorm.
 * User: LongFangYao
 * Date: 2019/4/24
 * Time: 10:11
 */
namespace Queer\Lst;

class ToolUtil
{
    public static function add($a, $b, $precision = 0)
    {
        return round($a + $b, $precision);
    }
}