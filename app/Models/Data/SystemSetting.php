<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Website\SystemSetting
 *
 * @property string $setting_name 设定名称
 * @property string $value 设定值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting whereSettingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting whereValue($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $about 解释
 * @property string|null $img 图片值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\SystemSetting whereImg($value)
 */
class SystemSetting extends Model
{
    protected $table = "system_setting";

    protected $primaryKey = "id";

    public $timestamps = false;
}