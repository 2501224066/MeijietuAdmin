<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Data{
/**
 * App\Models\Data\IndentInfo
 *
 * @property int $indent_id
 * @property string $indent_num 订单号
 * @property int $buyer_id 买家id
 * @property int $seller_id 卖家id
 * @property int $salesman_id 客服id
 * @property float $total_amount 商品最终金额
 * @property float $indent_amount 订单金额
 * @property float $compensate_fee 赔偿保证费
 * @property float|null $pay_amount 付款金额
 * @property string|null $pay_time 订单支付时间
 * @property float $seller_income 卖家收入 默认=订单价格 *（1 - 服务费率）
 * @property int $bargaining_status 议价状态 0=未完成 1=已完成
 * @property int $status 交易状态 0=待付款 1=已付款待接单 2=待接单买家取消订单 3=卖家拒单  4=交易中 5=交易中买家取消订单 6=交易中卖家取消订单 7=卖方完成 8=全部完成 9=已结算
 * @property string|null $create_time
 * @property string|null $cancel_cause 取消原因
 * @property string|null $demand_file 需求文档
 * @property string|null $achievements_file 成果文档
 * @property int $delete_status 删除状态 0=未删除 1=删除
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\IndentItem[] $indent_item
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereAchievementsFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereBargainingStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereCancelCause($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereCompensateFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereDeleteStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereDemandFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereIndentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereIndentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereIndentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo wherePayAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo wherePayTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereSalesmanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereSellerIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereTotalAmount($value)
 * @mixin \Eloquent
 */
	class IndentInfo extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\IndentItem
 *
 * @property int $item_id
 * @property int $indent_id 订单id
 * @property int $goods_id
 * @property string|null $goods_num
 * @property string $goods_title
 * @property string $modular_name 模块
 * @property string $theme_name 主题
 * @property string $priceclassify_name 价格种类
 * @property float $goods_price 商品单价
 * @property int $goods_count 商品数量
 * @property float $goods_amount 商品总价
 * @property string $create_time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereCreateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereGoodsTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereIndentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereModularName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem wherePriceclassifyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentItem whereThemeName($value)
 * @mixin \Eloquent
 */
	class IndentItem extends \Eloquent {}
}

namespace App\Models\Data{
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
	class RealnameEnterprise extends \Eloquent {}
}

namespace App\Models\Data{
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
	class RealnamePeople extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\Runwater
 *
 * @property int $runwater_id 流水id
 * @property string $runwater_num 流水单号
 * @property int|null $from_uid 来源处
 * @property int|null $to_uid 去往处
 * @property int|null $indent_id 订单id
 * @property string|null $indent_num 订单号
 * @property int $type 类型 1=充值 2=提现 3=订单付款 4=支付赔偿保证费 5=取消订单全额退款 6=取消订单非全额退款 7=取消订单退款加补偿 8=订单完成结算
 * @property int $direction 方向 1=转入 2=转出
 * @property float $money 金额
 * @property int $status 状态 0=进行中 1=成功 2=异常
 * @property string|null $callback_time 回调时间
 * @property string|null $callback_oid_paybill 连连支付单号
 * @property float|null $callback_money_order 交易金额
 * @property string|null $callback_settle_order 清算日期
 * @property string|null $callback_pay_type 支付方式 0:余额支付 1:网银借记卡支付 8:网银信用卡支付 9:企业网银信用卡支付 2:快捷支付(借记卡) 3:快捷支付(信用卡) D:认证支付 I:微信主扫 L:支付宝主扫
 * @property string|null $callback_bank_code 银行编号
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackMoneyOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackOidPaybill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackPayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackSettleOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereFromUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereIndentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereIndentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereRunwaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereRunwaterNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereToUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Runwater extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Website\SystemSetting
 *
 * @property string $setting_name 设定名称
 * @property string $value 设定值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting whereSettingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting whereValue($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $about 解释
 * @property string|null $img 图片值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Setting whereImg($value)
 */
	class SystemSetting extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\Usalesman
 *
 * @property int $salesman_id 业务员id （初始值1000000）
 * @property string $account 账号
 * @property string $password 密码
 * @property string $true_pass 真实密码
 * @property string $salesman_qq_ID QQ号
 * @property string $salesman_weixin_ID 微信号
 * @property string $salesman_name 姓名
 * @property string $salesman_head_portrait 头像
 * @property int $status 状态 0=禁用 1=启用
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereSalesmanHeadPortrait($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereSalesmanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereSalesmanName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereSalesmanQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereSalesmanWeixinID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereTruePass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Usalesman whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Usalesman extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Website\User
 *
 * @property string $id UUID
 * @property int $uid 用户id
 * @property string $nickname 昵称
 * @property string $email 邮箱
 * @property string $phone 电话
 * @property string $password 密码
 * @property int|null $sex 性别 1=男 2=女
 * @property string|null $birth 出生日期
 * @property string|null $qq_ID qq号
 * @property string|null $weixin_ID 微信号
 * @property int|null $identity 身份 1=广告主 2=流量主 3=代理
 * @property int $realname_status 实名认证状态 0=未认证 1=个人认证 2=企业认证
 * @property string $ip 客户端最近一次登录ip
 * @property int|null $status 状态 0=禁用 1=启用
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRealnameStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereWeixinID($value)
 * @mixin \Eloquent
 * @property string|null $head_portrait 头像
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\Usalesman[] $usalesman
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereHeadPortrait($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\User_usalesman
 *
 * @property int $uid 用户id
 * @property int $salesman_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_usalesman newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_usalesman newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_usalesman query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_usalesman whereSalesmanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User_usalesman whereUid($value)
 * @mixin \Eloquent
 */
	class User_usalesman extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\Wallet
 *
 * @property int $wallet_id
 * @property int $uid
 * @property float $available_money 可用资金
 * @property string $change_lock 修改校验锁
 * @property int $status 钱包状态 0=禁用 1=启用
 * @property string|null $remark 备注
 * @property string $time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereAvailableMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereChangeLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereWalletId($value)
 * @mixin \Eloquent
 */
	class Wallet extends \Eloquent {}
}

namespace App\Models\Log{
/**
 * App\Models\Log\FailedJobs
 *
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property string $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereQueue($value)
 */
	class FailedJobs extends \Eloquent {}
}

namespace App\Models\Log{
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
	class Login extends \Eloquent {}
}

namespace App\Models\Log{
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
	class Saveuserinfo extends \Eloquent {}
}

namespace App\Models\Log{
/**
 * App\Models\Log\Upload
 *
 * @property int $log_upload_id
 * @property int $uid 用户id
 * @property string $file 上传文件
 * @property string $upload_type 上传类型
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereLogUploadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUploadType($value)
 * @mixin \Eloquent
 */
	class Upload extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\Goods
 *
 * @property int $goods_id
 * @property int $uid 用户id 默认官方账户
 * @property string $goods_num 编码
 * @property string $title 标题
 * @property string $html_title 页面tile
 * @property string $title_about 标题简介
 * @property string|null $content 套餐内容
 * @property int|null $max_title_long 限制标题长度
 * @property string|null $avatar_url 头像
 * @property string|null $qrcode_url 二维码
 * @property string|null $qq_ID QQ号
 * @property string|null $weixin_ID 微信号
 * @property string|null $room_ID 房间号
 * @property int|null $fans_num 粉丝数
 * @property int $auth_type 认证类型 0=未认证 1=已认证
 * @property int $news_source_status 是否新闻源 0=否 1=是
 * @property int $entry_status 入口状态 1=没有入口 2=首页入口 3=频道入口 4=上级入口
 * @property int $included_sataus 收录状态 0=不包收录 1=包收录
 * @property string|null $link 链接
 * @property string|null $case_link 案例链接
 * @property int $link_type 链接类型 0=不可带网址 1=可带网址
 * @property int $weekend_status 周末可发 0=否 1=是
 * @property int $reserve_status 是否预约 0=否 1=是
 * @property string|null $remarks 备注
 * @property int $modular_id
 * @property string $modular_name 模块
 * @property int $theme_id
 * @property string $theme_name 主题
 * @property int|null $filed_id
 * @property string|null $filed_name 领域
 * @property int|null $platform_id
 * @property string|null $platform_name 平台
 * @property string|null $platform_logo 平台logo
 * @property int|null $industry_id
 * @property string|null $industry_name 行业
 * @property int|null $region_id
 * @property string|null $region_name 地区
 * @property int|null $phone_weightlevel_id
 * @property string|null $phone_weightlevel_img 移动端权重 图片
 * @property int|null $pc_weightlevel_id
 * @property string|null $pc_weightlevel_img PC端权重 图片
 * @property int $verify_status 审核状态 0=待审核 1=未通过 2=通过
 * @property int $status 上架状态 0=未上架 1=上架
 * @property int $recommend_status 推荐状态 0=否 1=是
 * @property int $delete_status 删除状态 0=未删除 1=删除
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $avg_read_num 平均阅读数
 * @property int|null $avg_like_num 平均点赞数
 * @property int|null $avg_comment_num 平均评论数
 * @property int|null $avg_retweet_num 平均转发数
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Data\GoodsPrice[] $goods_price
 * @property-read \App\Models\Data\GoodsPrice $one_goods_price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAuthType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAvgCommentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAvgLikeNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAvgReadNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereAvgRetweetNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereCaseLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereDeleteStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereEntryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereFansNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereFiledId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereFiledName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereHtmlTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereIncludedSataus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereIndustryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereLinkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereMaxTitleLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereModularId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereModularName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereNewsSourceStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePcWeightlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePcWeightlevelImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePhoneWeightlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePhoneWeightlevelImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePlatformId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePlatformLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods wherePlatformName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereQrcodeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereRecommendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereReserveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereRoomID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereThemeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereTitleAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereVerifyStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereWeekendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Goods whereWeixinID($value)
 * @mixin \Eloquent
 */
	class Goods extends \Eloquent {}
}

namespace App\Models\Data{
/**
 * App\Models\Data\GoodsPrice
 *
 * @property int $goods_price_id
 * @property int $goods_id
 * @property int $priceclassify_id
 * @property string $priceclassify_name 价格种类
 * @property float $floor_price 低价(软文模式使用)
 * @property float $price 真实价格
 * @property-read \App\Models\Data\Goods $goods
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice whereFloorPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice whereGoodsPriceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice wherePriceclassifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice wherePriceclassifyName($value)
 * @mixin \Eloquent
 */
	class GoodsPrice extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Fansnumlevel
 *
 * @property int $fansnumlevel_id 粉丝量级id
 * @property string $fansnumlevel_name 粉丝量级名称
 * @property int $fansnumlevel_min 粉丝量级最小值
 * @property int $fansnumlevel_max 粉丝量级最大值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel whereFansnumlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel whereFansnumlevelMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel whereFansnumlevelMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Fansnumlevel whereFansnumlevelName($value)
 * @mixin \Eloquent
 */
	class Fansnumlevel extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Filed
 *
 * @property int $filed_id 领域id
 * @property string $filed_name 领域名称
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Filed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Filed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Filed query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Filed whereFiledId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Filed whereFiledName($value)
 * @mixin \Eloquent
 */
	class Filed extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Industry
 *
 * @property int $industry_id 行业id
 * @property string $industry_name 行业名称
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Industry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Industry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Industry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Industry whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Industry whereIndustryName($value)
 * @mixin \Eloquent
 */
	class Industry extends \Eloquent {}
}

namespace App\Models\Attr{
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
	class Likelevel extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Modular
 *
 * @property int $modular_id
 * @property string $modular_name 模块名称
 * @property string $tag 模块标记
 * @property string $abbreviation 缩写
 * @property int $settlement_type 结算方式 1=标准模式 2=软文模式  3=自身模式
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Theme[] $theme
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular whereModularId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular whereModularName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular whereSettlementType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Modular whereTag($value)
 * @mixin \Eloquent
 */
	class Modular extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Platform
 *
 * @property int $platform_id
 * @property string $platform_name
 * @property string|null $logo_path
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform whereLogoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform wherePlatformId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Platform wherePlatformName($value)
 * @mixin \Eloquent
 */
	class Platform extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Priceclassify
 *
 * @property int $priceclassify_id 价格种类id
 * @property string $priceclassify_name 价格种类名称
 * @property string $tag
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify wherePriceclassifyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify wherePriceclassifyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Priceclassify whereTag($value)
 * @mixin \Eloquent
 */
	class Priceclassify extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Pricelevel
 *
 * @property int $pricelevel_id 价格量级id
 * @property string $pricelevel_name 价格量级名称
 * @property int $pricelevel_min 价格量级最小值
 * @property int $pricelevel_max 价格量级最大值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel wherePricelevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel wherePricelevelMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel wherePricelevelMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Pricelevel wherePricelevelName($value)
 * @mixin \Eloquent
 */
	class Pricelevel extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Readlevel
 *
 * @property int $readlevel_id 阅读量级id
 * @property string $readlevel_name 平均阅读量级名称
 * @property int $readlevel_min 平均阅读量级最小值
 * @property int $readlevel_max 平均阅读量级最大值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel whereReadlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel whereReadlevelMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel whereReadlevelMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Readlevel whereReadlevelName($value)
 * @mixin \Eloquent
 */
	class Readlevel extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Region
 *
 * @property int $region_id 面向地区id
 * @property string $region_name 面向地区
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Region whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Region whereRegionName($value)
 * @mixin \Eloquent
 */
	class Region extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Theme
 *
 * @property int $theme_id
 * @property string $theme_name
 * @property string $theme_status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Fansnumlevel[] $fansnumlevel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Filed[] $filed
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Industry[] $industry
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Likelevel[] $likelevel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Modular[] $modular
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Platform[] $platform
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Priceclassify[] $priceclassify
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Pricelevel[] $pricelevel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Readlevel[] $readlevel
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Region[] $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attr\Weightlevel[] $weightlevel
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme whereThemeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Theme whereThemeStatus($value)
 * @mixin \Eloquent
 */
	class Theme extends \Eloquent {}
}

namespace App\Models\Attr{
/**
 * App\Models\Tb\Weightlevel
 *
 * @property int $weightlevel_id 权重等级id
 * @property string $weightlevel_name 权重等级名称
 * @property string $img_path 权重等级图片
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel whereWeightlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Attr\Weightlevel whereWeightlevelName($value)
 * @mixin \Eloquent
 */
	class Weightlevel extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id UUID
 * @property int $uid 用户id
 * @property string|null $nickname 昵称
 * @property string|null $email 邮箱
 * @property string $phone 电话
 * @property string $password 密码
 * @property int|null $sex 性别 1=男 2=女
 * @property string|null $birth 出生日期
 * @property string|null $qq_ID qq号
 * @property string|null $weixin_ID 微信号
 * @property int|null $identity 身份 1=广告主 2=流量主 3=代理
 * @property int $realname_status 实名认证状态 0=未认证 1=个人认证 2=企业认证
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIdentity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRealnameStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereWeixinID($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

