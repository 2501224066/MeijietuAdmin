<?php


namespace App\Admin\Controllers\Attr;


use App\Http\Controllers\Controller;
use App\Models\Attr\Modular;
use App\Models\Attr\Theme;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;

class ModularController extends Controller
{
    use HasResourceActions;

    public $header = '模块';

    public $jumpUrl = 'tb/modular';

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

    public function show($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('查看')
            ->body($this->detail($id));
    }

    public function edit($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('编辑')
            ->body($this->form()->edit($id));
    }

    protected function detail($id)
    {
        $show = new Show(Modular::findOrFail($id));

        $show->modular_id('ID')->sortable();
        $show->modular_name('模块名称');
        $show->tag('模块标记');
        $show->abbreviation('模块简写');
        $show->settlement_type("结算模式")->as(function ($settlement_type) {
            return Modular::SETTLEMENT_TYPE[$settlement_type];
        });
        $show->theme("拥有主题")->as(function ($theme) {
            return $theme->pluck('theme_name');
        })->label();


        return $show;
    }

    public function grid()
    {
        $grid = new Grid(new Modular);

        $grid->modular_id('ID')->sortable();
        $grid->modular_name('模块名称');
        $grid->tag('模块标记');
        $grid->abbreviation('模块简写');
        $grid->actions(function ($actions) {
            $actions->disableDelete(); // 隐藏删除按钮
        });
        $grid->disableFilter();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

    public function form($urlStatus = FALSE)
    {
        $form = new Form(new Modular);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('modular_name', '模块名称')->required();
        $form->text('tag', '模块标记')->required();
        $form->text('abbreviation', '模块简写')->required();
        $form->select('settlement_type', '结算模式')->options(Modular::SETTLEMENT_TYPE)->required();
        $form->listbox('theme', '拥有主题')->options(Theme::all()->pluck('theme_name', 'theme_id'));
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