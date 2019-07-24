<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\SystemSetting;
use App\Models\Data\User;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Encore\Admin\Form;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    use HasResourceActions;

    public $header = '网站用户';

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
            ->description('查看')
            ->body($this->detail($id));
    }

    public function create(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('新增（仅限客服）')
            ->body($this->form());
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
        $grid = new Grid(new User);

        $grid->uid('UID')->sortable();
        $grid->user_num('编号');
        $grid->nickname('昵称');
        $grid->phone('手机号');
        $grid->email('邮箱');
        $grid->identity('身份')->display(function ($identity) {
            return labelColor($identity, User::IDENTITY);
        });
        $grid->realname_status('实名认证状态')->display(function ($realname_status) {
            return labelColor($realname_status, User::REALNAME_STATUS);
        });
        $grid->status('状态')->display(function ($status) {
            return labelColor($status, User::STATUS);
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();
        });
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->like('user_num', '编号');
            $filter->like('phone', '手机号');
            $filter->like('email', '邮箱');
            $filter->like('nickname', '昵称');
            $filter->equal('status', '状态')->select(User::STATUS);
            $filter->equal('identity', '身份')->select(User::IDENTITY);
        });
        $grid->disableExport();
        $grid->disableRowSelector();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(User::findOrFail($id));

        $show->uid('UID');
        $show->user_num('编号');
        $show->nickname('昵称');
        $show->head_portrait('头像')->image();
        $show->phone('手机号');
        $show->email('邮箱');
        $show->sex('性别')->as(function ($sex) {
            return $sex == null ? null : User::SEX[$sex];
        });
        $show->birth('出生日期');
        $show->qq_ID('QQ号');
        $show->weixin_ID('微信号');
        $show->identity('身份')->as(function ($identity) {
            return $identity ? User::IDENTITY[$identity] : null;
        })->label();
        $show->realname_status('实名认证')->as(function ($realname_status) {
            return User::REALNAME_STATUS[$realname_status];
        })->label();
        $show->ip('最后一次登录IP');
        $show->status('状态')->as(function ($status) {
            return User::STATUS[$status];
        })->label();
        $show->salesman_id("客服ID");
        $show->salesman_name("客服名称");
        $show->created_at('created_at');
        $show->updated_at('updated_at');
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
        });

        //个人实名认证
        $show->realnamePeople('个人实名认证', function ($realnamePeople) {
            $realnamePeople->truename("真实姓名");
            $realnamePeople->identity_card_ID('身份证号码');
            $realnamePeople->identity_card_face('身份证正面')->image();
            $realnamePeople->identity_card_back('身份证背面')->image();
            $realnamePeople->identity_card_hold('手持身份证')->image();
            $realnamePeople->bank_deposit('开户银行');
            $realnamePeople->bank_branch('开户支行');
            $realnamePeople->bank_prov('开户省');
            $realnamePeople->bank_city('开户市');
            $realnamePeople->bank_card('银行卡号');
            $realnamePeople->created_at('created_at');
            $realnamePeople->updated_at('updated_at');
            $realnamePeople->panel()->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });
        });

        //企业实名认证
        $show->realnameEnterprise('企业实名认证', function ($realnameEnterprise) {
            $realnameEnterprise->enterprise_name('公司名称');
            $realnameEnterprise->social_credit_code('统一社会信用代码');
            $realnameEnterprise->business_license('营业执照')->image();
            $realnameEnterprise->bank_deposit('开户银行');
            $realnameEnterprise->bank_branch('开户支行');
            $realnameEnterprise->bank_prov('开户省');
            $realnameEnterprise->bank_city('开户市');
            $realnameEnterprise->bank_card('银行卡号');
            $realnameEnterprise->bank_band_phone('绑定手机号');
            $realnameEnterprise->created_at('created_at');
            $realnameEnterprise->updated_at('updated_at');
            $realnameEnterprise->panel()->tools(function ($tools) {
                $tools->disableEdit();
                $tools->disableDelete();
            });
        });

        return $show;
    }

    public function form()
    {
        $form = new Form(new User);

        $form->text('uid', 'UID');
        $form->text('nickname', '昵称')->required();
        $form->text('user_num', '编号')->readOnly()->value(createUserNum());
        $form->text('phone', '电话')->required();
        $form->text('password', '密码')->required();
        $form->email('email', '邮箱')->required();
        $form->image('head_portrait', '头像')->name(function ($file) {
            return "head_portrait/" . str_random(30) . "." . $file->guessExtension();
        });
        $form->select('sex', '性别')->options(User::SEX);
        $form->date('birth', '生日');
        $form->text('qq_ID', 'QQ号')->required();
        $form->text('weixin_ID', '微信号');
        $form->select('identity', '身份')->options(User::IDENTITY)->value(3)->readonly();
        $form->select('realname_status', '实名认证')->options(User::REALNAME_STATUS)->value(0)->readonly();
        $form->hidden('ip', 'IP')->value(Input::getClientIp());
        $form->select('status', '状态')->options(User::STATUS)->value(1);
        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });
        $form->saved(function (Form $form) {
            // 修改头像，加密密码
            $userNum         = $form->model()->user_num;
            $user           = User::whereUserNum($userNum)->first();
            $user->password = Hash::make($user->password);
            $user->user_num = createUserNum();
            if (!$user->head_portrait)
                $user->head_portrait = SystemSetting::whereSettingName('salesman_head_portrait')->value('img');
            $user->save();
        });

        return $form;
    }
}