<?php


namespace App\Admin\Controllers\Attr;


use App\Models\Attr\Readlevel;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class ReadlevelController
{
    use HasResourceActions;

    public $header = '平均阅读量级';

    public $jumpUrl = 'tb/readlevel';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->row(function (Row $row) {
                $row->column(6, $this->grid());
                $row->column(6, $this->form(TRUE));
            });
    }

    public function grid()
    {
        $grid = new Grid(new Readlevel);

        $grid->readlevel_id('ID')->sortable();
        $grid->readlevel_name('平均阅读');
        $grid->readlevel_min('最小值');
        $grid->readlevel_max('最大值');
        $grid->actions(function ($actions) {
            $actions->disableView(); // 隐藏查看按钮
            $actions->disableEdit(); // 隐藏编辑按钮
        });
        $grid->disableExport();
        $grid->disableCreateButton();
        $grid->disableFilter();

        return $grid;
    }

    public function form($urlStatus = FALSE)
    {
        $form = new Form(new Readlevel);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('readlevel_name', '平均阅读')->rules('required');
        $form->text('readlevel_min', '最小值')->rules('required|numeric');
        $form->text('readlevel_max', '最大值')->rules('required|numeric');
        $form->tools(function (Form\Tools $tools) {
            $tools->disableList();
            $tools->disableDelete();
            $tools->disableView();
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}