<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

class NewsUser extends Model
{
    protected $table = 'data_news_user';

    public $timestamps = false;

    protected $guarded = [];
}