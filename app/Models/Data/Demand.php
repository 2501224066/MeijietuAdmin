<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $table = 'data_demand';

    protected $primaryKey = 'demand_id';

    protected $guarded = [];

    const STATUS = [
        1 => '等待',
        2 => '失效',
        3 => '拒绝',
        4 => '接受',
        5 => '完成',
        6 => '结算'
    ];
}