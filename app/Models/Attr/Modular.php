<?php


namespace App\Models\Attr;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
class Modular extends Model
{
    protected $table = "attr_modular";

    protected $primaryKey = 'modular_id';

    public $timestamps = false;

    protected $guarded = [];

    const SETTLEMENT_TYPE = [
        1 => '标准模式',
        2 => '软文模式',
        3 => '自身模式'
    ];

    public function theme(): BelongsToMany
    {
        return $this->belongsToMany(Theme::class, "attr_modular_theme", 'modular_id', 'theme_id');
    }
}