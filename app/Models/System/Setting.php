<?php


namespace App\Models\System;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Website\SystemSetting
 *
 * @property string $setting_name 设定名称
 * @property string $value 设定值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting whereSettingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting whereValue($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $about 解释
 * @property string|null $img 图片值
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\System\Setting whereImg($value)
 */
class Setting extends Model
{
    protected $table = "system_setting";

    protected $primaryKey = "id";

    public $timestamps = false;
}