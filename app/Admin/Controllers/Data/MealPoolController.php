<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\MealPool;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class MealPoolController extends Controller
{
    use HasResourceActions;

    public $header = '套餐池';

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
        $grid = new Grid(new MealPool);

        $grid->model()->wherePid(0);
        $grid->id('ID')->sortable();
        $grid->pool_name('池名称');
        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
        });
        $grid->disableExport();
        $grid->disableFilter();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(MealPool::findOrFail($id));

        $show->pool_name('池名称');
        $show->id('包含商品')->unescape()->as(function ($id) {
            $data = MealPool::wherePid($id)
                ->get(['goods_id', 'title']);
            $h    = '<table class="table table-bordered"><tr><th class="font-weight:600">商品ID</th><th class="font-weight:600">商品名称</th>';
            foreach ($data as $d) {
                $h .= '<tr><td>' . $d->goods_id . '</td>' .
                    '<td>' . $d->title . '</td></tr>';
            }
            return $h . "</table>";
        });
        $show->panel()->tools(function ($tools) {
            $tools->disableDelete();
            $tools->disableEdit();
        });

        return $show;
    }
}