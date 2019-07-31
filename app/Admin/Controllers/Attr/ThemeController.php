<?php


namespace App\Admin\Controllers\Attr;


use App\Http\Controllers\Controller;
use App\Models\Attr\Fansnumlevel;
use App\Models\Attr\Filed;
use App\Models\Attr\Industry;
use App\Models\Attr\Likelevel;
use App\Models\Attr\Priceclassify;
use App\Models\Attr\Pricelevel;
use App\Models\Attr\Readlevel;
use App\Models\Attr\Region;
use App\Models\Attr\Theme;
use App\Models\Attr\Platform;
use App\Models\Attr\Weightlevel;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Show;

class ThemeController extends Controller
{
    use HasResourceActions;

    public $header = '主题';

    public $jumpUrl = 'tb/theme';

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
        $show = new Show(Theme::findOrFail($id));

        $show->theme_id('ID')->sortable();
        $show->theme_name('主题名称');
        $show->theme_status('主题状态')->as(function ($theme_status) {
            return Theme::THEMESTATUS[$theme_status];
        });
        $show->filed("拥有领域")->as(function ($filed) {
            return $filed->map(function ($item) {
                return $item['filed_id'] . ". " . $item['filed_name'];
            });
        })->label();
        $show->industry("拥有行业")->as(function ($industry_name) {
            return $industry_name->map(function ($item) {
                return $item['industry_id'] . ". " . $item['industry_name'];
            });
        })->label();
        $show->platform("拥有平台")->as(function ($platform) {
            return $platform->map(function ($item) {
                return $item['platform_id'] . ". " . $item['platform_name'];
            });
        })->label();
        $show->region("地区分类")->as(function ($region) {
            return $region->map(function ($item) {
                return $item['region_id'] . ". " . $item['region_name'];
            });
        })->label();
        $show->priceclassify("价格种类")->as(function ($priceclassify) {
            return $priceclassify->map(function ($item) {
                return $item['priceclassify_id'] . ". " . $item['priceclassify_name'];
            });
        })->label();
        $show->fansnumlevel("粉丝量级")->as(function ($fansnumlevel) {
            return $fansnumlevel->map(function ($item) {
                return $item['fansnumlevel_id'] . ". " . $item['fansnumlevel_name'];
            });
        })->label();
        $show->readlevel("阅读量级")->as(function ($readlevel) {
            return $readlevel->map(function ($item) {
                return $item['readlevel_id'] . ". " . $item['readlevel_name'];
            });
        })->label();
        $show->likelevel("点赞量级")->as(function ($likelevel) {
            return $likelevel->map(function ($item) {
                return $item['likelevel_id'] . ". " . $item['likelevel_name'];
            });
        })->label();
        $show->pricelevel("价格量级")->as(function ($pricelevel) {
            return $pricelevel->map(function ($item) {
                return $item['pricelevel_id'] . ". " . $item['pricelevel_name'];
            });
        })->label();
        $show->weightlevel("权重等级")->as(function ($weightlevel) {
            return $weightlevel->map(function ($item) {
                return $item['weightlevel_id'] . ". " . $item['weightlevel_name'];
            });
        })->label();
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
        });

        return $show;
    }

    public function grid()
    {
        $grid = new Grid(new Theme);

        $grid->theme_id('ID')->sortable();
        $grid->theme_name('主题名称');
        $grid->theme_status('主题状态')->display(function ($theme_status) {
            return Theme::THEMESTATUS[$theme_status];
        });
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
        $form = new Form(new Theme);
        if ($urlStatus)
            $form->setAction(admin_base_path($this->jumpUrl));
        $form->text('theme_name', '主题名称')->required();
        $form->select('theme_status', '主题状态')->options(Theme::THEMESTATUS);
        $form->listbox('filed', '拥有领域')->options(Filed::orderBy('filed_id', 'ASC')->pluck('filed_name', 'filed_id'));
        $form->listbox('platform', '拥有平台')->options(Platform::orderBy('platform_id', 'ASC')->pluck('platform_name', 'platform_id'));
        $form->listbox('industry', '拥有行业')->options(Industry::orderBy('industry_id', 'ASC')->pluck('industry_name', 'industry_id'));
        $form->listbox('region', '地区分类')->options(Region::orderBy('region_id', 'ASC')->pluck('region_name', 'region_id'));
        $form->listbox('priceclassify', '价格种类')->options(Priceclassify::orderBy('priceclassify_id', 'ASC')->pluck('priceclassify_name', 'priceclassify_id'));
        $form->listbox('fansnumlevel', '粉丝量级')->options(Fansnumlevel::orderBy('fansnumlevel_id', 'ASC')->pluck('fansnumlevel_name', 'fansnumlevel_id'));
        $form->listbox('readlevel', '阅读量级')->options(Readlevel::orderBy('readlevel_id', 'ASC')->pluck('readlevel_name', 'readlevel_id'));
        $form->listbox('likelevel', '点赞量级')->options(Likelevel::orderBy('likelevel_id', 'ASC')->pluck('likelevel_name', 'likelevel_id'));
        $form->listbox('pricelevel', '价格量级')->options(Pricelevel::orderBy('pricelevel_id', 'ASC')->pluck('pricelevel_name', 'pricelevel_id'));
        $form->listbox('weightlevel', '权重等级')->options(Weightlevel::orderBy('weightlevel_id', 'ASC')->pluck('weightlevel_name', 'weightlevel_id'));
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