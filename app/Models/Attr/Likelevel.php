<?php


namespace App\Models\Attr;


use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Tb\Likelevel
 *
 * @property int $likelevel_id 平均点赞量级id
 * @property string $likelevel_name 平均点赞量级名称
 * @property int $likelevel_min 平均点赞量级最小值
 * @property int $likelevel_max 平均点赞量级最大值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel whereLikelevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel whereLikelevelMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel whereLikelevelMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Likelevel whereLikelevelName($value)
 * @mixin \Eloquent
 */
class Likelevel extends Model
{
    protected $table = "attr_likelevel";

    protected $primaryKey = 'likelevel_id';

    public $timestamps = false;

    protected $guarded = [];
}