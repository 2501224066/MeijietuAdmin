<?php


namespace App\Models\Realname;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Website\RealnameEnterprise
 *
 * @property int $uid
 * @property string $enterprise_name 公司名称
 * @property string $social_credit_code 统一社会信用代码
 * @property string $business_license 营业执照图片
 * @property string $bank_deposit 开户银行
 * @property string $bank_porv 开户省
 * @property string $bank_city 开户城市
 * @property string $bank_card 银行卡号
 * @property string $bank_band_phone 绑定手机号
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankBandPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankPorv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBusinessLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereEnterpriseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereSocialCreditCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $bank_branch 开户支行
 * @property string $bank_prov 开户省
 * @property int $verify_status 审核状态 0=失败 1=成功
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereBankProv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Realname\Enterprise whereVerifyStatus($value)
 */
class Enterprise extends Model
{
    protected $table = "realname_enterprise";
}