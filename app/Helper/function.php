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
 * 生成用户编号
 * @return string
 */
function createUserNum() : string
{
    $asciiArr = [48,49,50,51,52,53,54,55,57,57,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90];
    $randStr = mt_rand(10,35).date('Y'). mt_rand(10,35).date('m').mt_rand(10,35).date('dH').mt_rand(10,35).mt_rand(10,35);
    $arr = str_split($randStr, 2);
    $num = "";
    foreach($arr as $v){
        $num .= chr($asciiArr[$v*1]);
    }

    $count = \App\Models\Data\User::whereUserNum($num)->count();
    if($count)
        $num = createUserNum();

    return $num;
}

/**
 * 生成商品编号
 * @param string $abbreviation 业务简写
 * @return string
 */
function createGoodsNnm($abbreviation) : string
{
    $num = date('d') . strtoupper(uniqid()) . date('Y') . mt_rand(1000000, 9999999) . $abbreviation . date('m');
    $count = \App\Models\Nb\Goods::whereGoodsNum($num)->count();
    if($count)
        $num = createGoodsNnm($abbreviation);

    return $num;
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