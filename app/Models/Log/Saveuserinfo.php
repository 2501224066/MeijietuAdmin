<?php


namespace App\Models\Log;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\Saveuserinfo
 *
 * @property int $log_saveuserinfo_id
 * @property int $uid 用户id
 * @property string $ip 客户端IP
 * @property string $old_info 原信息
 * @property string $new_info 新信息
 * @property string|null $time_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereLogSaveuserinfoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereNewInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereOldInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereTimeAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Saveuserinfo whereUid($value)
 * @mixin \Eloquent
 */
class Saveuserinfo extends Model
{
    protected $table = 'log_saveuserinfo';

    protected $primaryKey = 'log_saveuserinfo_id';

}