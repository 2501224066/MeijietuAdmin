<?php


namespace App\Models\Log;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Log\Upload
 *
 * @property int $log_upload_id
 * @property int $uid 用户id
 * @property string $file 上传文件
 * @property string $upload_type 上传类型
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereLogUploadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log\Upload whereUploadType($value)
 * @mixin \Eloquent
 */
class Upload extends Model
{
    protected $table = 'log_upload';

    protected $primaryKey = 'log_upload_id';


}