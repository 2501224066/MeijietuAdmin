<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\Wallet;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class WalletController extends Controller
{
    use HasResourceActions;

    public $header = '钱包资金';

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
        $grid = new Grid(new Wallet);

        $grid->model()->orderBy('wallet_id', 'desc');
        $grid->wallet_id('钱包ID')->sortable();
        $grid->uid('UID');
        $grid->available_money('可用资金');
        $grid->status('上架状态')->display(function ($status) {
            return labelColor($status, Wallet::STATUS);
        });
        $grid->time('修改时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->equal('status', '状态')->select(Wallet::STATUS);
            $filter->date('time', '修改时间');
            $filter->group('available_money', '可用资金', function ($group) {
                $group->gt('大于');
                $group->lt('小于');
                $group->equal('等于');
            });
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
        $show = new Show(Wallet::findOrFail($id));
        $show->wallet_id('钱包ID')->sortable();
        $show->uid('UID');
        $show->change_lock('修改校验锁');
        $show->available_money('可用资金');
        $show->remark('备注');
        $show->status('上架状态')->as(function ($status) {
            return Wallet::STATUS[$status];
        })->label();
        $show->time('修改时间');
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
        });

        return $show;
    }

    public function form()
    {
        $form = new Form(new Wallet);

        $form->text('wallet_id','钱包ID')->readOnly();
        $form->text('uid','UID')->readOnly();
        $form->text('change_lock','修改校验锁')->readOnly();
        $form->text('available_money','可用资金')->readOnly();
        $form->text('remark','备注');
        $form->select('status','上架状态')->options(Wallet::STATUS);
        $form->date('time','修改时间')->readOnly();
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