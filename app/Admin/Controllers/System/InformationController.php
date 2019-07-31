<?php


namespace App\Admin\Controllers\System;


use App\Http\Controllers\Controller;
use App\Models\System\information;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class InformationController extends Controller
{
    use HasResourceActions;

    public $header = '资讯文章';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function show($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('查看')
            ->body($this->detail($id));
    }

    public function create(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('新增')
            ->body($this->form());
    }

    public function edit($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('编辑')
            ->body($this->form()->edit($id));
    }

    public function grid()
    {
        $grid = new Grid(new information);

        $grid->model()->orderBy('information_id', 'desc');
        $grid->information_id('资讯ID')->sortable();
        $grid->title('标题');
        $grid->author('作者');
        $grid->read_num('阅读数');
        $grid->time('创建时间');
        $grid->disableExport();
        $grid->disableRowSelector();

        return $grid;
    }

    public function detail($id)
{
    $show = new Show(information::findOrFail($id));

    $show->information_id('资讯ID');
    $show->title('标题');
    $show->author('作者');
    $show->read_num('阅读数');
    $show->time('创建时间');
    $show->motif_img('封面图片')->image();
    $show->content('资讯内容')->unescape()->as(function ($avatar) {

        return "<textarea style='width: 100%;border: none;resize: none;' readonly rows='20'>{$avatar}</textarea>";

    });;

    return $show;
}

    public function form()
    {
        $form = new Form(new information);

        $form->text('information_id','资讯ID')->readOnly();
        $form->text('title','标题')->required();
        $form->text('author','作者')->required();
        $form->date('time','创建时间')->required();
        $form->number('read_num','阅读数')->required()->value(7);
        $form->markdown('content','文章内容')->required();
        $form->image('motif_img','封面图片')->name(function ($file) {
            return "information/" . str_random(30) . "." . $file->guessExtension();
        })->required();
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}