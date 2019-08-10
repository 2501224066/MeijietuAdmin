<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Data\MealPool
 *
 * @property int $id
 * @property string|null $pool_name 池名称
 * @property int $pid 父id
 * @property int|null $goods_id 商品id
 * @property string|null $title 商品名称
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool wherePoolName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\MealPool whereTitle($value)
 * @mixin \Eloquent
 */
class MealPool extends Model
{
    protected $table = 'data_mealpool';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}