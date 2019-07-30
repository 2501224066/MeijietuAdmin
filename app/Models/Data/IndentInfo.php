<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



/**
 * App\Models\Data\IndentInfo
 *
 * @property int $indent_id
 * @property string $indent_num 订单号
 * @property int $buyer_id 买家id
 * @property int $seller_id 卖家id
 * @property int|null $salesman_id 客服id
 * @property float $total_amount 商品最终金额
 * @property float $indent_amount 订单金额
 * @property float $compensate_fee 赔偿保证费
 * @property float|null $pay_amount 付款金额
 * @property string|null $pay_time 订单支付时间
 * @property float $seller_income 卖家收入 默认=订单价格 *（1 - 服务费率）
 * @property float $bargaining_reduce 议价节省 客服议价价差
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\IndentInfo whereBargainingReduce($value)
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
class IndentInfo extends Model
{
    protected $table = 'indent_info';

    protected $primaryKey = 'indent_id';

    protected $guarded = [];

    const BARGAINING_STATUS = [
        0 => '未完成',
        1 => '已完成'
    ];

    const STATUS = [
        0 => '待付款',
        1 => '已付款待接单',
        2 => '待接单买家取消订单',
        3 => '卖家拒单',
        4 => '交易中',
        5 => '交易中买家取消订单',
        6 => '交易中卖家取消订单',
        7 => '卖方完成',
        8 => '全部完成',
        9 => '已结算'
    ];

    const DELETE_STATUS = [
        0 => '未删除',
        1 => '已删除'
    ];

    public function indent_item() : HasMany
    {
        return $this->hasMany(IndentItem::class, 'indent_id', 'indent_id');
    }
}