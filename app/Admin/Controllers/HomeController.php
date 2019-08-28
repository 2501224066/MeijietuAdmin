<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Count\Day;
use App\Models\Data\Demand;
use App\Models\Data\Goods;
use App\Models\Data\IndentInfo;
use App\Models\User;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    use HasResourceActions;

    public $header = '首页';

    public function index(Content $content)
    {
        return $content
            ->header($this->header)
            ->description('列表')
            ->row(function (Row $row) {
                $row->column(3, $this->allUser());
                $row->column(3, $this->allGoods());
                $row->column(3, $this->allIndent());
                $row->column(3, $this->allDemand());
            })
            ->row($this->count_day());
    }

    public function allUser()
    {
        $infoBox = new InfoBox('总用户量', 'users', 'aqua', '/admin/user', User::count());
        return $infoBox->render();
    }

    public function allGoods()
    {
        $infoBox = new InfoBox('总商品量', 'bitbucket-square', 'blue', '/admin/data/goods', Goods::count());
        return $infoBox->render();
    }

    public function allIndent()
    {
        $infoBox = new InfoBox('总订单量', 'file-text-o', 'green', '/admin/data/indent', IndentInfo::count());
        return $infoBox->render();
    }

    public function allDemand()
    {
        $infoBox = new InfoBox('总需求量', 'clone', 'yellow', '/admin/data/demand', Demand::count());
        return $infoBox->render();
    }

    public function count_day()
    {
        $chart = 'count_day';

        $data     = [];
        $CountDay = Day::offset(Day::count()-30)->limit(30)->get();
        foreach ($CountDay as $d) {
            $data['time'][]     = substr($d['time'], 0, 10);
            $data['register'][] = $d['register'];
            $data['goods'][]    = $d['goods'];
            $data['indent'][]   = $d['indent'];
            $data['demand'][]   = $d['demand'];
        }

        $html = <<<EOF
		<div id="{$chart}" style="width: 100%;height:300px;">加载中....</div>
EOF;
        return view('echarts/count_day', ['chart' => $chart, 'chart_html' => $html, 'data' => $data]);
    }
}
