<?php


namespace App\Models\Data;


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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankBandPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankPorv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBusinessLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereEnterpriseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereSocialCreditCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $bank_branch 开户支行
 * @property string $bank_prov 开户省
 * @property int $verify_status 审核状态 0=失败 1=成功
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereBankProv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\RealnameEnterprise whereVerifyStatus($value)
 */
class RealnameEnterprise extends Model
{
    protected $table = "realname_enterprise";
}