<?php


namespace App\Admin\Controllers\Goods;


use App\Http\Controllers\Controller;
use App\Models\Nb\GoodsPrice;
use App\Models\Tb\Priceclassify;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class PriceController extends Controller
{
    use HasResourceActions;

    public $header = '商品价格';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
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
        $grid = new Grid(new GoodsPrice);

        $grid->model()->orderBy('goods_price_id', 'desc');
        $grid->goods_price_id('商品价格ID')->sortable();
        $grid->goods_id('商品ID');
        $grid->priceclassify_name('价格种类');
        $grid->tag('标记');
        $grid->floor_price('底价')->label();
        $grid->price('价格')->label();
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('goods_id', '商品ID');
            $filter->like('goods_price_id', '商品价格ID');
            $filter->equal('priceclassify_id', '价格种类')->select(Priceclassify::pluck('priceclassify_name', 'priceclassify_id'));
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableView();
        });
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

    public function form()
    {
        $form = new Form(new GoodsPrice);

        $form->text("goods_price_id",'商品价格ID')->readOnly();
        $form->text("goods_id",'商品ID');
        $form->text("priceclassify_id",'价格种类ID');
        $form->text("priceclassify_name",'价格种类');
        $form->text("tag",'标记');
        $form->number("floor_price",'底价')->label();
        $form->number("price",'价格')->label();
        $form->tools(function (Form\Tools $tools) {
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