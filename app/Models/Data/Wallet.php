<?php


namespace App\Models\Data;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Data\Wallet
 *
 * @property int $wallet_id
 * @property int $uid
 * @property float $available_money 可用资金
 * @property string $change_lock 修改校验锁
 * @property int $status 钱包状态 0=禁用 1=启用
 * @property string|null $remark 备注
 * @property string $time
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereAvailableMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereChangeLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Data\Wallet whereWalletId($value)
 * @mixin \Eloquent
 */
class Wallet extends Model
{
    protected $table = 'up_wallet';

    protected $primaryKey = 'wallet_id';

    protected $guarded = [];

    const STATUS = [
        0 => '禁用',
        1 => '启用'
    ];
}