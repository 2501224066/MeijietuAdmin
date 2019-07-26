<?php


namespace App\Admin\Controllers\SelfProduct;


use App\Http\Controllers\Controller;
use App\Models\Nb\Goods;
use App\Models\Tb\Theme;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SoftarticleMealController extends Controller
{
    use HasResourceActions;

    public $header = '软文套餐';

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
        $grid->model()->whereThemeName('软文套餐');

        $grid->goods_id('ID')->sortable();
        $grid->title('套餐名称');
        $grid->title_about('套餐简介');
        $grid->disableExport();
        $grid->disableFilter();
        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Goods::findOrFail($id));

        $show->goods_id('ID')->sortable();
        $show->title('套餐名称');
        $show->title_about('套餐简介');
        $show->content("套餐内容")->as(function ($content) {
            $c = explode('&', $content);
            return $c;
        })->label();
        $show->status('上架状态')->as(function ($status) {
            return Goods::STATUS[$status];
        });
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

        $form->text('title', '套餐名称')->rules('required');
        $form->text('title_about', '套餐简介')->rules('required');
        $form->markdown('content', '套餐内容')->rules('required');
        $Data = Theme::whereThemeName('软文套餐')->with(['modular', 'priceclassify'])->first();
        $form->hidden('modular_id', '模块ID')->value($Data->modular[0]->modular_id)->readonly();
        $form->text('modular_name', '模块名称')->value($Data->modular[0]->modular_name)->readonly();
        $form->hidden('theme_id', '主题ID')->value($Data->theme_id)->readonly();
        $form->text('theme_name', '主题名称')->value($Data->theme_name)->readonly();
        $form->select('verify_status', '审核状态')->options(Goods::VERIFY_STATUS)->value(2)->readonly();
        $form->select('status', '上架状态')->options(Goods::STATUS)->value(1)->readonly();$form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');
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

        return $form;
    }
}