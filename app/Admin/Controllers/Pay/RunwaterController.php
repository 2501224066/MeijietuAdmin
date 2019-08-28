<?php


namespace App\Admin\Controllers\Pay;


use App\Http\Controllers\Controller;
use App\Models\Pay\Runwater;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class RunwaterController extends Controller
{
    use HasResourceActions;

    public $header = '流水记录';

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

    public function show($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('详情')
            ->body($this->detail($id));
    }

    public function grid()
    {
        $grid = new Grid(new Runwater);

        $grid->model()->orderBy('runwater_id', 'desc');
        $grid->runwater_id('流水ID')->sortable();
        $grid->runwater_num('流水单号');
        $grid->indent_num('关联订单');
        $grid->money('金额')->label();
        $grid->from_uid('来源');
        $grid->to_uid('去向');
        $grid->pay_type('支付方式')->label();
        $grid->status('状态')->display(function ($status) {
            return labelColor($status, Runwater::STATUS);
        });
        $grid->type('类型')->display(function ($type) {
            return labelColor($type, Runwater::TYPE);
        });
        $grid->created_at('创建时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('runwater_id', '流水ID');
            $filter->like('runwater_num', '流水单号');
            $filter->where(function ($query) {
                $query->whereRaw("`from_uid` >= {$this->input} OR `to_uid` = {$this->input}");
            }, '用户ID');
            $filter->like('money', '金额');
            $filter->equal('direction', '方向')->select(Runwater::DIRECTION);
            $filter->equal('status', '状态')->select(Runwater::STATUS);
            $filter->equal('type', '类型')->select(Runwater::TYPE);
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
        $show = new Show(Runwater::findOrFail($id));

        $show->runwater_id('流水ID');
        $show->runwater_num('流水单号');
        $show->from_uid('来源');
        $show->to_uid('去向');
        $show->money('金额');
        $show->pay_type('支付方式')->label();
        $show->type('类型')->as(function ($type) {
            return Runwater::TYPE[$type];
        })->label();
        $show->direction('方向')->as(function ($direction) {
            return Runwater::DIRECTION[$direction];
        })->label();
        $show->status('状态')->as(function ($status) {
            return Runwater::STATUS[$status];
        })->label();
        $show->indent_id('订单ID');
        $show->indent_num('订单编号');
        $show->callback_time('回调时间');
        $show->callback_success_time('充值时间');
        $show->callback_trade_no('交易凭证');
        $show->callback_money_order('交易金额');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
            $tools->disableEdit();
        });

        return $show;
    }

    public function form()
    {
        $form = new Form(new Runwater);

        /*$form->text('runwater_id', '流水ID');
        $form->text('runwater_num', '流水单号');
        $form->text('from_uid', '来源');
        $form->text('to_ui', '去向');
        $form->text('money', '金额');
        $form->text('pay_type', '支付方式');
        $form->select('type', '类型')->options(Runwater::TYPE);
        $form->select('direction', '方向')->options(Runwater::DIRECTION);*/
        $form->select('status', '状态')->options(Runwater::STATUS);
        /*$form->text('indent_id', '订单ID');
        $form->text('indent_num', '订单编号');
        $form->datetime('callback_time', '回调时间');
        $form->datetime('callback_success_time', '充值时间');
        $form->text('callback_trade_no', '交易凭证');
        $form->number('callback_money_order', '交易金额');
        $form->datetime('created_at', '创建时间');
        $form->datetime('updated_at', '修改时间');*/
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