<?php


namespace App\Admin\Controllers\Data;


use App\Http\Controllers\Controller;
use App\Models\Data\News;
use App\Models\User;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class NewsController extends Controller
{
    use HasResourceActions;

    public $header = '消息通知';

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

    public function edit($id, Content $content)
    {
        return $content
            ->header($this->header)
            ->description('编辑')
            ->body($this->form()->edit($id));
    }

    public function grid()
    {
        $grid = new Grid(new News);

        $grid->model()->orderBy('news_id', 'DESC');
        $grid->news_id('消息ID')->sortable();
        $grid->content('消息内容');
        $grid->release_time('发布日期');
        $grid->status('状态')->display(function ($status) {
            return labelColor($status, News::STATUS);
        });
        $grid->filter(function ($filter) {
            $filter->disableIdFilter();
            $filter->like('content', '消息内容');
            $filter->equal('status', '状态')->select(News::STATUS);
        });
        $grid->disableExport();
        $grid->disableRowSelector();
        $grid->disableCreateButton();

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->content('消息内容');
        $show->release_time('发布日期');
        $show->status('状态')->as(function ($status) {
            return News::STATUS[$status];
        })->label();
        $show->user("通知对象")->as(function ($user) {
            return $user->map(function ($item) {
                return $item['uid'] . ". " . $item['nickname'];
            });
        })->label();

        return $show;
    }

    public function form()
    {
        $form = new Form(new News);

        $form->markdown('content', '消息内容');
        $form->datetime('release_time', '发布日期');
        $form->select('status', '状态')->options(News::STATUS);
        $form->listbox('user', '通知对象')->options(User::pluck('nickname', 'uid'));
        $form->tools(function (Form\Tools $tools) {
            $tools->disableDelete();
            $tools->disableView();
        });
        $form->footer(function ($footer) {
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
        });

        return $form;
    }

}