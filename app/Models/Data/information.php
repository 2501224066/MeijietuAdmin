<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    protected $table = 'dt_information';

    protected $primaryKey = 'information_id';

    public $timestamps = false;

    protected $guarded = [];
}