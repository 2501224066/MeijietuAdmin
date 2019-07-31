<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;
use App\Models\Data\information;
use App\Models\User;
use App\Models\Log\Upload;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
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

    public function create(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('新增')
            ->body($this->form());
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
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->like('upload_type', '上传类型');
            $filter->like('created_at', '上传时间');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();

        return $grid;
    }

    public function form()
    {
        $form = new Form(new Upload);

        $form->text('uid', 'UID')->readOnly()->value(User::GF_SELLER);
        $form->text('upload_type', '上传类型')->readOnly()->value('后台图片');
        $form->display('created_at', '上传时间');
        $form->image('file', '文件')->name(function ($file) {
            return "admin_img/" . str_random(30) . "." . $file->guessExtension();
        })->required();
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }

}