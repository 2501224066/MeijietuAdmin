<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\Demand;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;

class DemandController extends Controller
{
    use HasResourceActions;

    public $header = '套餐需求';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->body($this->grid());
    }

    public function grid()
    {
        $grid = new Grid(new Demand);

        $grid->model()->orderBy('demands_id', 'desc');
        $grid->demand_id('需求ID')->sortable();
        $grid->demand_num('需求编号');
        $grid->bind_indent_id('绑定订单ID');
        $grid->uid('UID');
        $grid->title('需求名称');
        $grid->word('需求文档');
        $grid->back_link('返回链接');
        $grid->price('价格');
        $grid->status('状态')->display(function ($status) {
            return labelColor($status, Demand::STATUS);
        });
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('demand_num', '需求编号');
            $filter->like('bind_indent_id', '绑定订单ID');
            $filter->like('uid', 'UID');
        });
        $grid->disableActions();
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }
}
