<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\IndentInfo;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class IndentController extends Controller
{
    use HasResourceActions;

    public $header = '订单数据';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function show($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('详情')
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
        $grid = new Grid(new IndentInfo);

        $grid->model()->orderBy('indent_id', 'desc');
        $grid->indent_id('订单ID')->sortable();
        $grid->indent_num('订单编号');
        $grid->buyer_id('买家ID');
        $grid->seller_id('卖家ID');
        $grid->salesman_id('客服ID');
        $grid->bargaining_status('议价状态')->display(function ($bargaining_status) {
            return labelColor($bargaining_status, IndentInfo::BARGAINING_STATUS);
        });
        $grid->status('订单状态')->display(function ($status) {
            return labelColor($status, IndentInfo::STATUS);
        });
        $grid->delete_status('删除状态')->display(function ($delete_status) {
            return labelColor($delete_status, IndentInfo::DELETE_STATUS);
        });
        $grid->create_time('创建时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('indent_id', '订单ID');
            $filter->like('indent_num', '订单编号');
            $filter->like('buyer_id', '买家ID');
            $filter->like('seller_id', '卖家ID');
            $filter->like('salesman_id', '客服ID');
            $filter->equal('bargaining_status', '议价状态')->select(IndentInfo::BARGAINING_STATUS);
            $filter->equal('status', '订单状态')->select(IndentInfo::STATUS);
            $filter->equal('delete_status', '删除状态')->select(IndentInfo::DELETE_STATUS);
            $filter->date('created_at', '创建时间');
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }


    public function detail($id)
    {
        $show = new Show(IndentInfo::findOrFail($id));

        $show->indent_id('订单ID');
        $show->indent_num('订单编号');
        $show->buyer_id('买家ID');
        $show->seller_id('卖家ID');
        $show->salesman_id('客服ID');
        $show->divider();
        $show->total_amount('商品最终金额');
        $show->indent_amount('订单金额');
        $show->compensate_fee('赔偿保证费');
        $show->seller_income('买家收入');
        $show->pay_amount('支付金额');
        $show->pay_time('支付时间');
        $show->divider();
        $show->bargaining_reduce('议价节省');
        $show->bargaining_status('议价状态')->as(function ($bargaining_status) {
            return IndentInfo::BARGAINING_STATUS[$bargaining_status];
        })->label();
        $show->status('订单状态')->as(function ($status) {
            return IndentInfo::STATUS[$status];
        })->label();
        $show->delete_status('删除状态')->as(function ($delete_status) {
            return IndentInfo::DELETE_STATUS[$delete_status];
        })->label();
        $show->divider();
        $show->create_time('创建时间');
        $show->cancel_cause('取消原因');
        $show->demand_file('需求文档')->file();
        $show->achievements_file('成果文档')->file();
        // 订单商品
        $show->indent_item('订单商品', function ($indnet_item) {
            $indnet_item->goods_id('商品ID');
            $indnet_item->goods_num('商品编号');
            $indnet_item->goods_title('名称');
            $indnet_item->modular_name('模块名称');
            $indnet_item->theme_name('主题名称');
            $indnet_item->priceclassify_name('价格种类');
            $indnet_item->goods_price('单价');
            $indnet_item->goods_count('数量');
            $indnet_item->goods_amount('总价');
            $indnet_item->create_time('创建时间');
            $indnet_item->disableActions();
            $indnet_item->disableExport();
            $indnet_item->disableRowSelector();
            $indnet_item->disableCreateButton();
            $indnet_item->disableFilter();
            $indnet_item->disableColumnSelector();
        });
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
        });

        return $show;
    }

    public function form()
    {
        $form = new Form(new IndentInfo);

        $form->text('indent_id', '订单ID')->readOnly();
        $form->text('indent_num', '订单编号')->readOnly();
        $form->text('buyer_id', '买家ID')->readOnly();
        $form->text('seller_id', '卖家ID')->readOnly();
        $form->text('salesman_id', '客服ID')->readOnly();
        $form->number('total_amount', '商品最终金额');
        $form->number('indent_amount', '订单金额');
        $form->number('compensate_fee', '赔偿保证费');
        $form->number('seller_income', '买家收入');
        $form->number('pay_amount', '支付金额')->readOnly();
        $form->datetime('pay_time', '支付时间')->readOnly();
        $form->number('bargaining_reduce', '议价节省')->readOnly();
        $form->select('bargaining_status', '议价状态')->options(IndentInfo::BARGAINING_STATUS);
        $form->select('status', '订单状态')->options(IndentInfo::STATUS);
        $form->select('delete_status', '删除状态')->options(IndentInfo::DELETE_STATUS);
        $form->datetime('create_time', '创建时间');
        $form->text('cancel_cause', '取消原因');
        $form->file('demand_file', '需求文档');
        $form->file('achievements_file', '成果文档');
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