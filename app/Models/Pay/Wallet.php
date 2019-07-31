<?php


namespace App\Models\Pay;


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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereAvailableMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereChangeLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereRemark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Pay\Wallet whereWalletId($value)
 * @mixin \Eloquent
 */
class Wallet extends Model
{
    protected $table = 'pay_wallet';

    protected $primaryKey = 'wallet_id';

    protected $guarded = [];

    const STATUS = [
        0 => '禁用',
        1 => '启用'
    ];
}