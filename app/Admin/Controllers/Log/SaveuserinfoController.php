<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;
use App\Models\Log\Saveuserinfo;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class SaveuserinfoController extends Controller
{
    use HasResourceActions;

    public $header = '用户修改日志';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function grid()
    {
        $grid = new Grid(new Saveuserinfo);

        $grid->model()->orderBy('log_saveuserinfo_id', 'desc');
        $grid->log_saveuserinfo_id('ID')->sortable();
        $grid->uid('UID');
        $grid->ip('IP');
        $grid->save_info('变动信息')->display(function ($save_info) {
            $re = "<table class='table table-bordered'>";
            foreach (json_decode($save_info, true) as $k => $v) {
                $re .= "<tr><td>" . $k . "</td><td>" . "$v" . "</td></tr>";
            }
            return $re . "</table>";
        });
        $grid->time_at('修改时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('uid', 'UID');
            $filter->like('time_at', '修改时间');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

}