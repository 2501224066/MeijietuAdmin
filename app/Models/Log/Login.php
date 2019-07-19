<?php


namespace App\Models\Log;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\Login
 *
 * @property int $log_login_id
 * @property int $uid
 * @property string $user_phone 用户手机号
 * @property string $ip 客户端IP
 * @property string $agent 设备信息
 * @property int $login_type 登录方式 1=账密登录 2=动态登录
 * @property int $login_status 状态 0=失败 1=失败
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereLogLoginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereLoginStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereLoginType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Login whereUserPhone($value)
 * @mixin \Eloquent
 */
class Login extends Model
{
    protected $table = 'log_login';

    protected $primaryKey = 'log_login_id';

    const LOGIN_TYPE = [
        1 => '账密登录',
        2 => '动态登录',
    ];

    const LOGIN_STATUS = [
        1 => '成功',
        0 => '失败',
    ];
}