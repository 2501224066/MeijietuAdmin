<?php


namespace App\Admin\Controllers\AddGoods;


use App\Http\Controllers\Controller;
use App\Models\Data\Goods;
use App\Models\Attr\Filed;
use App\Models\Attr\Theme;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SEOController extends Controller
{
    use HasResourceActions;

    public $header = 'SEO';

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
            ->description('新增')
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
        $grid = new Grid(new Goods);
        $grid->model()->whereThemeName('SEO');

        $grid->goods_id('ID')->sortable();
        $grid->title('SEO名称');
        $grid->title_about('SEO简介');
        $grid->disableExport();
        $grid->disableFilter();
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Goods::findOrFail($id));

        $show->goods_id('商品ID')->sortable();
        $show->title('SEO名称');
        $show->title_about('SEO简介');
        $show->content("SEO内容");
        $show->modular_id("模块ID");
        $show->modular_name("模块名称");
        $show->theme_id("主题ID");
        $show->theme_name("主题名称");
        $show->filed_id("领域ID");
        $show->filed_name("领域名称");
        $show->verify_status('审核状态')->as(function ($verify_status) {
            return Goods::VERIFY_STATUS[$verify_status];
        })->label();
        $show->status('上架状态')->as(function ($status) {
            return Goods::STATUS[$status];
        })->label();
        $show->goods_price('商品价格', function ($goods_price) {
            $goods_price->priceclassify_name('价格种类');
            $goods_price->floor_price('底价');
            $goods_price->price('价格');
            $goods_price->disableActions();
            $goods_price->disableExport();
            $goods_price->disableRowSelector();
            $goods_price->disableCreateButton();
            $goods_price->disableFilter();
            $goods_price->disableColumnSelector();
        });
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
        });

        return $show;
    }

    public function form()
    {
        $form = new Form(new Goods);

        $form->text('title', 'SEO名称')->required();
        $form->text('title_about', 'SEO简介')->required();
        $form->markdown('content', '文章内容')->required();
        $Data     = Theme::whereThemeName('SEO')->with(['modular', 'priceclassify', 'filed'])->first();
        $filedArr = [];
        foreach ($Data->filed as $v) {
            $filedArr[$v->filed_id] = $v->filed_name;
        }
        $form->select('filed_id', '领域')->options($filedArr)->required();
        $form->hidden('modular_id', '模块ID')->value($Data->modular[0]->modular_id)->readonly();
        $form->text('modular_name', '模块名称')->value($Data->modular[0]->modular_name)->readonly();
        $form->hidden('theme_id', '主题ID')->value($Data->theme_id)->readonly();
        $form->text('theme_name', '主题名称')->value($Data->theme_name)->readonly();
        $form->select('verify_status', '审核状态')->options(Goods::VERIFY_STATUS)->value(2)->readonly();
        $form->select('status', '上架状态')->options(Goods::STATUS)->value(1)->readonly();
        $form->hidden('created_at', '创建时间');
        $form->hidden('updated_at', '修改时间');
        $form->text('goods_num', '商品编号')->value(createNum('GOODS'))->readonly();
        // 价格
        $form->hidden('one_goods_price.priceclassify_id', '价格种类ID')->value($Data->priceclassify[0]->priceclassify_id)->readonly();
        $form->text('one_goods_price.priceclassify_name', '价格种类')->value($Data->priceclassify[0]->priceclassify_name)->readonly();
        $form->number('one_goods_price.price', '价格')->rules('required');
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });
        $form->saved(function (Form $form) {
            // 设置filed_name
            $goods_num            = $form->model()->goods_num;
            $goods             = Goods::whereGoodsNum($goods_num)->first();
            $goods->filed_name = Filed::whereFiledId($goods->filed_id)->value('filed_name');
            $goods->save();
        });

        return $form;
    }
}