<?php


namespace App\Models\Log;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\FailedJobs
 *
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property string $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\FailedJobs whereQueue($value)
 * @mixin \Eloquent
 */
class FailedJobs extends Model
{
    protected $table = 'failed_jobs';

    protected $primaryKey = 'id';

    protected $guarded = [];
}