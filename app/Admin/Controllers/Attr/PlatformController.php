<?php


namespace App\Admin\Controllers\Attr;

use App\Http\Controllers\Controller;
use App\Models\Attr\Platform;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class PlatformController extends Controller
{
    use HasResourceActions;

    public $header = '平台';

    public $jumpUrl = 'tb/platform';

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
        $grid = new Grid(new Platform);

        $grid->platform_id('ID')->sortable();
        $grid->platform_name('平台名称');
        $grid->logo_path('平台LOGO')->image();
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableCreateButton();
        $grid->disableFilter();

        return $grid;
    }

    public function form($urlStatus = FALSE)
    {
        $form = new Form(new Platform);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('platform_name', '平台')->rules('required');
        $form->image('logo_path', '平台LOGO')->name(function ($file) {
            return "video_platform_logo/".str_random(30).".".$file->guessExtension();
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