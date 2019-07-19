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
        $grid->old_info('原信息')->display(function ($oldInfo){
            $re = "";
            foreach (json_decode($oldInfo, true) as $k => $v){
                $re .= "<div>".$k.":"."$v"."</div>";
            }
            return $re;
        });
        $grid->new_info('新信息')->display(function ($newInfo){
            $re = "";
            foreach (json_decode($newInfo, true) as $k => $v){
                $re .= "<div>".$k.":"."$v"."</div>";
            }
            return $re;
        });
        $grid->time_at('修改时间');
        $grid->filter(function($filter){
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