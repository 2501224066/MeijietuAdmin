<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;
use App\Models\Log\FailedJobs;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class FailedJobsController extends Controller
{
    use HasResourceActions;

    public $header = '失败队列';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function grid()
    {
        $grid = new Grid(new FailedJobs);

        $grid->model()->orderBy('id', 'desc');
        $grid->id('ID')->sortable();
        $grid->connection('连接');
        $grid->queue('队列');
        $grid->payload('负载');
        $grid->exception('异常');
        $grid->failed_id('失败时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->date('failed_id', '失败时间');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }
}