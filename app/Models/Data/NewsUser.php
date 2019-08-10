<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Data\NewsUser
 *
 * @property int $news_id
 * @property int $uid
 * @property int $read_status 阅读状态 0=未读 1=已读
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser whereReadStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\NewsUser whereUid($value)
 * @mixin \Eloquent
 */
class NewsUser extends Model
{
    protected $table = 'data_news_user';

    public $timestamps = false;

    protected $guarded = [];
}