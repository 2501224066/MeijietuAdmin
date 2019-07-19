<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Website\RealnamePeople
 *
 * @property int $uid
 * @property string $truename 真实姓名
 * @property string $identity_card_ID 身份证号
 * @property string $identity_card_face 身份证正面图片
 * @property string $identity_card_back 身份证背面图片
 * @property string|null $identity_card_hold 手持身份证图片
 * @property string $bank_deposit 开户银行
 * @property string $bank_branch 支行名称
 * @property string $bank_prov 开户省
 * @property string $bank_city 开户城市
 * @property string $bank_card 银行卡号
 * @property string $bank_band_phone 绑定手机号
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankBandPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereBankProv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereIdentityCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereIdentityCardFace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereIdentityCardHold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereIdentityCardID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereTruename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $verify_status 审核状态 0=失败 1=成功
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnamePeople whereVerifyStatus($value)
 */
class RealnamePeople extends Model
{
    protected $table = "realname_people";
}