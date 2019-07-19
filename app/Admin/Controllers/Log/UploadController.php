<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;
use App\Models\Log\Upload;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class UploadController extends Controller
{
    use HasResourceActions;

    public $header = '上传日志';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function grid()
    {
        $grid = new Grid(new Upload);

        $grid->model()->orderBy('log_upload_id', 'desc');
        $grid->log_upload_id('ID')->sortable();
        $grid->uid('UID');
        $grid->file('文件');
        $grid->upload_type('上传类型')->label();
        $grid->created_at('上传时间');
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->like('upload_type', '上传类型');
            $filter->like('created_at', '上传时间');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

}