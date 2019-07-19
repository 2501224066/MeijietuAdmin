<?php


namespace App\Admin\Controllers\Data;


use App\Models\Data\SystemSetting;;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SystemSettingController
{
    use HasResourceActions;

    public $header = '网站设置';

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
            ->description('新建')
            ->body($this->form());
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

    public function grid()
    {
        $grid = new Grid(new SystemSetting);

        $grid->id('ID')->sortable();
        $grid->setting_name('名称');
        $grid->about('介绍');
        $grid->value('值');
        $grid->img('图片')->image();
        $grid->disableFilter();
        $grid->disableExport();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(SystemSetting::findOrFail($id));

        $show->id('ID')->sortable();
        $show->setting_name('名称');
        $show->about('介绍');
        $show->value('值');
        $show->img('图片')->image();

        return $show;
    }

    public function form()
    {
        $form = new Form(new SystemSetting);

        $form->text('id', 'ID')->readOnly();
        $form->text('setting_name', '名称');
        $form->text('about', '介绍');
        $form->text('value', '值');
        $form->image('img', '图片')->name(function ($file) {
            return "system_img/".str_random(30).".".$file->guessExtension();
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }
}