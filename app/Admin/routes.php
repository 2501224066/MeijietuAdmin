<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    // 平台数据
    //  网站用户
    $router->resource('/user', Data\UserController::class);
    //  所有商品
    $router->resource('/data/goods', Data\GoodsController::class);
    //  商品价格
    $router->resource('/data/goods_price', Data\GoodsPriceController::class);
    //  订单数据
    $router->resource('/data/indent', Data\IndentController::class);
    //  套餐池
    $router->resource('/data/mealpool', Data\MealPoolController::class);
    //  套餐需求
    $router->resource('/data/demand', Data\DemandController::class);
    //  消息通知
    $router->resource('/data/news', Data\NewsController::class);

    // 资金数据
    //  钱包资金
    $router->resource('/pay/wallet', Pay\WalletController::class);
    //  流水记录
    $router->resource('/pay/runwater', Pay\RunwaterController::class);

    // 系统数据
    //  资讯文章
    $router->resource('/system/information', System\InformationController::class);
    //  网站设置
    $router->resource('/system/setting', System\SettingController::class);

    // 日志记录
    //  登录日志
    $router->resource('/log/login', Log\LoginController::class);
    //  上传日志
    $router->resource('/log/upload', Log\UploadController::class);
    //  用户修改日志
    $router->resource('/log/saveuserinfo', Log\SaveuserinfoController::class);
    //  失败队列
    $router->resource('/failed_jobs', Log\FailedJobsController::class);

    // 参数管理
    //  模块
    $router->resource('/attr/modular', Attr\ModularController::class);
    //  主题
    $router->resource('/attr/theme', Attr\ThemeController::class);
    //  领域
    $router->resource('/attr/filed', Attr\FiledController::class);
    //  平台
    $router->resource('/attr/platform', Attr\PlatformController::class);
    //  行业
    $router->resource('/attr/industry', Attr\IndustryController::class);
    //  价格种类
    $router->resource('/attr/priceclassify', Attr\PriceclassifyController::class);
    //  地区
    $router->resource('/attr/region', Attr\RegionController::class);
    //  粉丝量级
    $router->resource('/attr/fansnumlevel', Attr\FansnumlevelController::class);
    //  平均阅读量级
    $router->resource('/attr/readlevel', Attr\ReadlevelController::class);
    //  平均点赞量级
    $router->resource('/attr/likelevel', Attr\LikelevelController::class);
    //  权重
    $router->resource('/attr/weightlevel', Attr\WeightlevelController::class);
    //  价格量级
    $router->resource('/attr/pricelevel', Attr\PricelevelController::class);

    // 创建商品
    //  软文套餐
    $router->resource('/add_goods/softarticle_meal', AddGoods\SoftarticleMealController::class);
    //  SEO
    $router->resource('/add_goods/seo', AddGoods\SEOController::class);
});