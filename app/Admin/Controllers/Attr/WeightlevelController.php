<?php


namespace App\Admin\Controllers\Attr;


use App\Http\Controllers\Controller;
use App\Models\Attr\Weightlevel;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class WeightlevelController extends Controller
{
    use HasResourceActions;

    public $header = '权重等级';

    public $jumpUrl = 'tb/weightlevel';

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
        $grid = new Grid(new Weightlevel);

        $grid->weightlevel_id('ID')->sortable();
        $grid->weightlevel_name('等级名称');
        $grid->img_path('权重图片')->image();
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
        $form = new Form(new Weightlevel);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('weightlevel_name', '等级名称')->rules('required');
        $form->image('img_path', '权重图片')->name(function ($file) {
            return "currency_weightlevel_img/".md5(uniqid()).".".$file->guessExtension();
        });
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