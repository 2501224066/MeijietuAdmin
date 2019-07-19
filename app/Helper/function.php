<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

// 取当前路由末尾值(id)
function getUrlLast()
{
    $url = Input::url();
    $arr = explode("/", $url);
    return end($arr);
}

/**
 * 生成商品编号
 * @param string $abbreviation 业务简写
 * @return string
 */
function createGoodsNnm($abbreviation)
{
    return date('d') . strtoupper(uniqid()) . date('Y') . mt_rand(1000000, 9999999) . $abbreviation . date('m');
}

// label颜色设置
function labelColor($num, $arr)
{
    if ($num === null)
        return null;

    switch ($num) {
        case 0:
            return "<span class='label bg-yellow'>" . $arr[$num] . "</span>";
            break;

        case 1:
            return "<span class='label bg-green'>" . $arr[$num] . "</span>";
            break;

        case 2:
            return "<span class='label bg-red'>" . $arr[$num] . "</span>";
            break;

        case 3:
            return "<span class='label bg-blue'>" . $arr[$num] . "</span>";
            break;

        case 4:
            return "<span class='label bg-aqua'>" . $arr[$num] . "</span>";
            break;
        case 5:
            return "<span class='label bg-navy'>" . $arr[$num] . "</span>";
            break;
        case 6:
            return "<span class='label bg-teal'>" . $arr[$num] . "</span>";
            break;
        case 7:
            return "<span class='label bg-olive'>" . $arr[$num] . "</span>";
            break;
        case 8:
            return "<span class='label bg-lime'>" . $arr[$num] . "</span>";
            break;
        case 9:
            return "<span class='label bg-orange'>" . $arr[$num] . "</span>";
            break;
    }
}