<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;

use App\Models\Log\Login;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Layout\Content;
use Encore\Admin\Grid;

class LoginController extends Controller
{
    use HasResourceActions;

    public $header = '登录日志';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function grid()
    {
        $grid = new Grid(new Login);

        $grid->model()->orderBy('log_login_id', 'desc');
        $grid->log_login_id('ID')->sortable();
        $grid->uid('UID');
        $grid->user_phone('手机号');
        $grid->created_at('登录时间');
        $grid->ip('登录IP');
        $grid->agent('设备信息');
        $grid->login_type('登录方式')->display(function ($theme_status) {
            return Login::LOGIN_TYPE[$theme_status];
        });
        $grid->login_status('登录状态')->display(function ($theme_status) {
            return Login::LOGIN_STATUS[$theme_status];
        });
        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->like('user_phone', '手机号');
            $filter->like('ip', '登录IP');
            $filter->like('created_at', '登录时间');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

}