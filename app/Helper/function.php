<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cache;

// 取当前路由末尾值(id)
function getUrlLast()
{
    $url = Input::url();
    $arr = explode("/", $url);
    return end($arr);
}

/**
 * 生成编号
 */
function createNum($numType)
{
    // 订单数key
    $key = $numType . date('Ymd');
    // 当天单数
    $todayCount = todayCount($key);
    // 单数自增
    Cache::increment($key);

    return substr(date('Ymd'), 2) . mt_rand(1000, 9999) . $todayCount;

}

/**
 * 当天单数
 *  1.容纳量-千万
 * @param string $key 键
 * @return int
 */
function todayCount($key): string
{
    if (!Cache::has($key))
        Cache::put($key, 1, 60 * 24);

    return sprintf("%08d", Cache::get($key));
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