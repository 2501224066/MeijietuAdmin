<?php


namespace App\Models\Data;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Data\News
 *
 * @property int $news_id
 * @property string $content 消息内容
 * @property string $release_time 发布时间
 * @property int $status 状态 0=禁用 1=启用
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News whereNewsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News whereReleaseTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\News whereStatus($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $table = 'data_news';

    protected $primaryKey = 'news_id';

    public $timestamps = false;

    protected $guarded = [];

    const STATUS = [
        0 => '禁用',
        1 => '启用'
    ];

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'data_news_user', 'news_id','uid');
    }
}