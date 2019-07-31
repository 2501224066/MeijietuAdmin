<?php


namespace App\Admin\Controllers\Attr;

use App\Http\Controllers\Controller;
use App\Models\Attr\Priceclassify;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class PriceclassifyController extends Controller
{
    use HasResourceActions;

    public $header = '价格种类';

    public $jumpUrl = 'tb/priceclassify';

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
        $grid = new Grid(new Priceclassify);

        $grid->priceclassify_id('ID')->sortable();
        $grid->priceclassify_name('种类名称');
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
        $form = new Form(new Priceclassify);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('priceclassify_name', '种类名称')->rules('required');
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