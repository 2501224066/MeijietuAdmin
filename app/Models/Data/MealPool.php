<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

class MealPool extends Model
{
    protected $table = 'data_mealpool';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}