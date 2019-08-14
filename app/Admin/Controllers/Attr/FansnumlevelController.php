<?php


namespace App\Admin\Controllers\Attr;


use App\Http\Controllers\Controller;
use App\Models\Attr\Fansnumlevel;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class FansnumlevelController extends Controller
{
    use HasResourceActions;

    public $header = '粉丝量级';

    public $jumpUrl = 'attr/fansnumlevel';

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
        $grid = new Grid(new Fansnumlevel);

        $grid->fansnumlevel_id('ID')->sortable();
        $grid->fansnumlevel_name('粉丝量级');
        $grid->fansnumlevel_min('最小值');
        $grid->fansnumlevel_max('最大值');
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
        $form = new Form(new Fansnumlevel);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('fansnumlevel_name', '粉丝量级')->rules('required');
        $form->text('fansnumlevel_min', '最小值')->rules('required|numeric');
        $form->text('fansnumlevel_max', '最大值')->rules('required|numeric');
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