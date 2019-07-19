<?php


namespace App\Admin\Controllers\Tb;


use App\Http\Controllers\Controller;
use App\Models\Tb\Industry;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class IndustryController extends Controller
{
    use HasResourceActions;

    public $header = '行业';

    public $jumpUrl = 'tb/industry';

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
        $grid = new Grid(new Industry);

        $grid->industry_id('ID')->sortable();
        $grid->industry_name('行业名称');
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
        $form = new Form(new Industry);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('industry_name', '行业')->rules('required');
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