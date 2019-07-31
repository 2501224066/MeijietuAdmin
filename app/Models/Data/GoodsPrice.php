<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 * @property string $tag 标记
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\GoodsPrice whereTag($value)
 */
class GoodsPrice extends Model
{
    protected $table = 'data_goods_price';

    protected $primaryKey = 'goods_price_id';

    protected $guarded = [];

    public $timestamps = false;

    public function goods() : BelongsTo
    {
        return $this->belongsTo(Goods::class, 'goods_id', 'goods_id');
    }
}