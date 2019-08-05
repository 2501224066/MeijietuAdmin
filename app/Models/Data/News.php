<?php


namespace App\Models\Data;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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