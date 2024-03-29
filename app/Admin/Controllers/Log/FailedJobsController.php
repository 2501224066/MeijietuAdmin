<?php


namespace App\Admin\Controllers\Log;


use App\Http\Controllers\Controller;
use App\Models\Log\FailedJobs;
use App\Models\Pay\Runwater;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

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

    public function show($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('详情')
            ->body($this->detail($id));
    }

    public function grid()
    {
        $grid = new Grid(new FailedJobs);

        $grid->model()->orderBy('id', 'desc');
        $grid->id('ID')->sortable();
        $grid->connection('连接');
        $grid->queue('队列');
        $grid->failed_at('失败时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->date('failed_id', '失败时间');
        });
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
        });
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

    public function detail($id)
    {
        $show = new Show(FailedJobs::findOrFail($id));

        $show->id('ID');
        $show->connection('连接');
        $show->payload('负载');
        $show->exception('错误');
        $show->connection('连接');
        $show->queue('队列');
        $show->failed_at('失败时间');
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
            $tools->disableEdit();
        });

        return $show;
    }
}