<?php


namespace App\Models\Tb;


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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tb\Theme[] $theme
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular whereModularId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular whereModularName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular whereSettlementType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tb\Modular whereTag($value)
 * @mixin \Eloquent
 */
class Modular extends Model
{
    protected $table = "tb_modular";

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
        return $this->belongsToMany(Theme::class, "tb_modular_theme", 'modular_id', 'theme_id');
    }
}