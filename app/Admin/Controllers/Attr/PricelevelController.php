<?php


namespace App\Admin\Controllers\Attr;


use App\Http\Controllers\Controller;
use App\Models\Attr\Pricelevel;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class PricelevelController extends Controller
{
    use HasResourceActions;

    public $header = '价格量级';

    public $jumpUrl = 'attr/pricelevel';

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
        $grid = new Grid(new Pricelevel);

        $grid->pricelevel_id('ID')->sortable();
        $grid->pricelevel_name('量级名称');
        $grid->pricelevel_min('最小值');
        $grid->pricelevel_max('最大值');
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
        $form = new Form(new Pricelevel);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('pricelevel_name', '量级名称')->rules('required');
        $form->text('pricelevel_min', '最小值')->rules('required|numeric');
        $form->text('pricelevel_max', '最大值')->rules('required|numeric');
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