<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;



/**
 * App\Models\Data\Runwater
 *
 * @property int $runwater_id 流水id
 * @property string $runwater_num 流水单号
 * @property int|null $from_uid 来源处
 * @property int|null $to_uid 去往处
 * @property int|null $indent_id 订单id
 * @property string|null $indent_num 订单号
 * @property int $type 类型 1=充值 2=提现 3=订单付款 4=支付赔偿保证费 5=取消订单全额退款 6=取消订单非全额退款 7=对方取消订单退款 8=订单完成结算 9=需求结算
 * @property int $direction 方向 1=转入 2=转出
 * @property float $money 金额
 * @property string|null $pay_type 支付方式
 * @property int $status 状态 0=进行中 1=成功 2=异常
 * @property string|null $callback_time 回调时间
 * @property string|null $callback_trade_no 交易凭证
 * @property float|null $callback_money_order 交易金额
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackMoneyOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCallbackTradeNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereDirection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereFromUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereIndentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereIndentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater wherePayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereRunwaterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereRunwaterNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereToUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Runwater whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Runwater extends Model
{
    protected $table = 'up_runwater';

    protected $primaryKey = 'runwater_id';

    protected $guarded = [];

    const TYPE = [
        1 => '充值',
        2 => '提现',
        3 => '订单付款',
        4 => '支付赔偿保证费',
        5 => '取消订单全额退款',
        6 => '取消订单非全额退款',
        7 => '对方取消订单退款',
        8 => '订单完成结算'
    ];

    const DIRECTION = [
        1 => '转入',
        2 => '转出'
    ];

    const STATUS = [
        0 => '进行中',
        1 => '成功',
        2 => '异常'
    ];
}