<?php


namespace App\Admin\Controllers\Goods;


use App\Http\Controllers\Controller;
use App\Models\Nb\Goods;
use App\Models\Tb\Modular;
use App\Models\Tb\Theme;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class GoodsController extends Controller
{
    use HasResourceActions;

    public $header = '商品数据';

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
        $grid = new Grid(new Goods);

        $grid->model()->orderBy('goods_id', 'desc');
        $grid->goods_id('商品ID')->sortable();
        $grid->goods_num('商品编号');
        $grid->uid('UID');
        $grid->title('商品名称');
        $grid->modular_name('模块名称');
        $grid->theme_name('主题名称');
        $grid->verify_status('审核状态')->display(function ($verify_status) {
            return labelColor($verify_status, Goods::VERIFY_STATUS);
        });
        $grid->status('上架状态')->display(function ($status) {
            return labelColor($status, Goods::STATUS);
        });
        $grid->recommend_status('首页推荐')->display(function ($recommend_status) {
            return labelColor($recommend_status, Goods::RECOMMEND_STATUS);
        });
        $grid->delete_status('删除状态')->display(function ($delete_status) {
            return labelColor($delete_status, Goods::DELETE_STATUS);
        });
        $grid->created_at('创建时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('goods_id', '商品ID');
            $filter->like('goods_num', '商品编号');
            $filter->like('uid', 'UID');
            $filter->like('title', '商品名称');
            $filter->equal('modular_id', '模块名称')->select(Modular::pluck('modular_name', 'modular_id'));
            $filter->equal('theme_id', '主题名称')->select(Theme::pluck('theme_name', 'theme_id'));
            $filter->like('weixin_ID', '微信号');
            $filter->equal('verify_status', '审核状态')->select(Goods::VERIFY_STATUS);
            $filter->equal('status', '上架状态')->select(Goods::STATUS);
            $filter->equal('recommend_status', '首页推荐')->select(Goods::RECOMMEND_STATUS);
            $filter->equal('delete_status', '删除状态')->select(Goods::DELETE_STATUS);
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
        $show = new Show(Goods::findOrFail($id));

        $show->goods_id('商品ID');
        $show->goods_num('商品编号');
        $show->uid('UID');
        $show->title('商品名称');
        $show->html_title('HTML名称');
        $show->title_about('名称简介');
        $show->content('内容');
        $show->max_title_long('限制标题长度');
        $show->avatar_url('头像')->image();
        $show->qrcode_url('二维码')->image();
        $show->qq_ID('QQ号');
        $show->weixin_ID('微信号');
        $show->room_ID('房间号');
        $show->divider();
        $show->modular_name('模块名称');
        $show->theme_name('主题名称');
        $show->filed_name('领域名称');
        $show->platform_name('平台名称');
        $show->platform_logo('平台LOGO')->image();
        $show->industry_name('行业名称');
        $show->region_name('所属地区');
        $show->remarks('备注');
        $show->divider();
        $show->fans_num('粉丝数');
        $show->avg_read_num('平均阅读数');
        $show->avg_like_num('平均点赞数');
        $show->avg_comment_num('平均评论数');
        $show->avg_retweet_num('平均转发数');
        $show->link('链接');
        $show->case_link('案例链接');
        $show->link_type('链接类型')->as(function ($link_type) {
            return $link_type === null ? null : Goods::LINK_TYPE[$link_type];
        })->label();
        $show->phone_weightlevel_img('移动权重')->image();
        $show->pc_weightlevel_img('PC权重')->image();
        $show->auth_type('认证类型')->as(function ($auth_type) {
            return $auth_type === null ? null : Goods::AUTY_TYPE[$auth_type];
        })->label();
        $show->news_source_status('新闻源')->as(function ($news_source_status) {
            return $news_source_status === null ? null : Goods::NEW_SOURCE_STATUS[$news_source_status];
        })->label();
        $show->entry_status('入口状态')->as(function ($entry_status) {
            return $entry_status === null ? null : Goods::ENTRY_STATUS[$entry_status];
        })->label();
        $show->included_sataus('收录状态')->as(function ($included_sataus) {
            return $included_sataus === null ? null : Goods::INCLUDED_STATUS[$included_sataus];
        })->label();
        $show->weekend_status('周末可发')->as(function ($weekend_status) {
            return $weekend_status === null ? null : Goods::WEEKEND_STATUS[$weekend_status];
        })->label();
        $show->reserve_status('是否预约')->as(function ($reserve_status) {
            return $reserve_status === null ? null : Goods::RESERVE_STATUS[$reserve_status];
        })->label();
        $show->divider();
        $show->verify_status('审核状态')->as(function ($verify_status) {
            return $verify_status === null ? null : Goods::VERIFY_STATUS[$verify_status];
        })->label();
        $show->status('上架状态')->as(function ($status) {
            return $status === null ? null : Goods::STATUS[$status];
        })->label();
        $show->recommend_status('首页推荐')->as(function ($recommend_status) {
            return $recommend_status === null ? null : Goods::RECOMMEND_STATUS[$recommend_status];
        })->label();
        $show->delete_status('删除状态')->as(function ($delete_status) {
            return $delete_status === null ? null : Goods::DELETE_STATUS[$delete_status];
        })->label();
        $show->created_at('创建时间');
        $show->updated_at('修改时间');
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

        $form->text('goods_id', '商品ID')->readOnly();
        $form->text('goods_num', '商品编号')->readOnly();
        $form->text('uid', 'UID')->readOnly();
        $form->text('title', '商品名称');
        $form->text('html_title', 'HTML名称');
        $form->text('title_about', '名称简介');
        $form->text('content', '内容');
        $form->text('max_title_long', '限制标题长度');
        $form->image('avatar_url', '头像');
        $form->text('qrcode_url', '二维码');
        $form->text('qq_ID', 'QQ号');
        $form->text('weixin_ID', '微信号');
        $form->text('room_ID', '房间号');
        $form->text('modular_id', '模块ID');
        $form->text('modular_name', '模块名称');
        $form->text('theme_id', '主题ID');
        $form->text('theme_name', '主题名称');
        $form->text('filed_id', '领域ID');
        $form->text('filed_name', '领域名称');
        $form->text('platform_name', '平台名称');
        $form->text('platform_logo', '平台LOGO');
        $form->text('industry_name', '行业名称');
        $form->text('region_name', '所属地区');
        $form->text('remarks', '备注');
        $form->text('fans_num', '粉丝数');
        $form->text('avg_read_num', '平均阅读数');
        $form->text('avg_like_num', '平均点赞数');
        $form->text('avg_comment_num', '平均评论数');
        $form->text('avg_retweet_num', '平均转发数');
        $form->text('link', '链接');
        $form->text('case_link', '案例链接');
        $form->select('link_type', '链接类型')->options(Goods::LINK_TYPE);
        $form->image('phone_weightlevel_img', '移动权重')->readOnly();
        $form->image('pc_weightlevel_img', 'PC权重')->readOnly();
        $form->select('auth_type', '认证类型')->options(Goods::AUTY_TYPE);
        $form->select('news_source_status', '新闻源')->options(Goods::NEW_SOURCE_STATUS);
        $form->select('entry_status', '入口状态')->options(Goods::ENTRY_STATUS);
        $form->select('included_sataus', '收录状态')->options(Goods::INCLUDED_STATUS);
        $form->select('weekend_status', '周末可发')->options(Goods::WEEKEND_STATUS);
        $form->select('reserve_status', '是否预约')->options(Goods::RESERVE_STATUS);
        $form->select('verify_status', '审核状态')->options(Goods::VERIFY_STATUS);
        $form->select('status', '上架状态')->options(Goods::STATUS);
        $form->select('recommend_status', '首页推荐')->options(Goods::RECOMMEND_STATUS);
        $form->select('delete_status', '删除状态')->options(Goods::DELETE_STATUS);
        $form->text('created_at', '创建时间')->readOnly();
        $form->text('updated_at', '修改时间')->readOnly();
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