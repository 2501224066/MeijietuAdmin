<?php


namespace App\Models\Realname;


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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankBandPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereBankProv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereIdentityCardBack($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereIdentityCardFace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereIdentityCardHold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereIdentityCardID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereTruename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $verify_status 审核状态 0=失败 1=成功
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\People whereVerifyStatus($value)
 */
class People extends Model
{
    protected $table = "realname_people";
}