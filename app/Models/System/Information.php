<?php


namespace App\Models\System;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Data\information
 *
 * @property int $information_id
 * @property string $title 标题
 * @property string $author 作者
 * @property string $motif_img 装饰图
 * @property string $content 内容
 * @property int $read_num 阅读数
 * @property string $time 创建时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereInformationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereMotifImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereReadNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\information whereTitle($value)
 * @mixin \Eloquent
 */
class Information extends Model
{
    protected $table = 'system_information';

    protected $primaryKey = 'information_id';

    public $timestamps = false;

    protected $guarded = [];
}