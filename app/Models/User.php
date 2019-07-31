<?php


namespace App\Models;


use App\Models\Realname\Enterprise;
use App\Models\Realname\People;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


/**
 * App\Models\User
 *
 * @property int $uid 用户id （初始值1000000）
 * @property string $user_num 用户编号
 * @property string $nickname 昵称
 * @property string $email 邮箱
 * @property string $phone 电话
 * @property string $password 密码
 * @property string|null $head_portrait 头像
 * @property int|null $sex 性别 1=男 0=女
 * @property string|null $birth 出生日期
 * @property string|null $qq_ID qq号
 * @property string|null $weixin_ID 微信号
 * @property int|null $identity 身份 1=广告主 2=媒体主 3=业务员
 * @property int $realname_status 实名认证状态 0=未认证 1=个人认证 2=企业认证
 * @property string $ip 客户端最近一次登录ip
 * @property int|null $status 状态 0=禁用 1=启用
 * @property int|null $salesman_id 客服id
 * @property string|null $salesman_name 客服名称
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Realname\Enterprise $realnameEnterprise
 * @property-read \App\Models\Realname\People $realnamePeople
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereHeadPortrait($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRealnameStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSalesmanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSalesmanName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUserNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereWeixinID($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    protected $table = "user";

    protected $primaryKey = 'uid';

    public $incrementing = false;

    protected $guarded = [];

    // 官方卖家
    const GF_SELLER = 1;

    // 官方买家
    const GF_BUYER = 2;

    const IDENTITY = [
        "1" => "广告主",
        "2" => "媒体主",
        "3" => "业务员"
    ];

    const REALNAME_STATUS = [
        "0" => "未认证",
        "1" => "个人认证",
        "2" => "企业认证"
    ];

    const STATUS = [
        0 => "禁用",
        1 => "启用"
    ];

    const SEX = [
        0 => '女',
        1 => '男'
    ];

    public function realnamePeople(): HasOne
    {
        return $this->hasOne(People::class, 'uid', 'uid');
    }

    public function realnameEnterprise(): HasOne
    {
        return $this->hasOne(Enterprise::class, 'uid', 'uid');
    }
}