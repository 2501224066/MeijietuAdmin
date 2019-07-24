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
    $router->resource('/website_user', Data\UserController::class);
    //  客服人员
    $router->resource('/website_usalesman', Data\UsalesmanController::class);
    //  订单数据
    $router->resource('/indent', Data\IndentController::class);
    //  钱包资金
    $router->resource('/wallet', Data\WalletController::class);
    //  流水记录
    $router->resource('/runwater', Data\RunwaterController::class);
    //  资讯文章
    $router->resource('/information', Data\InformationController::class);
    //  网站设置
    $router->resource('/system_setting', Data\SystemSettingController::class);

    // 商品数据
    //  所有商品
    $router->resource('/goods/all', Goods\GoodsController::class);
    //  商品价格
    $router->resource('/goods/price', Goods\PriceController::class);

    // 日志记录
    //  登录日志
    $router->resource('/log/login', Log\LoginController::class);
    //  上传日志
    $router->resource('/log/upload', Log\UploadController::class);
    //  用户修改日志
    $router->resource('/log/saveuserinfo', Log\SaveuserinfoController::class);
    //  失败队列
    $router->resource('/failed_jobs', Log\FailedJobsController::class);

    // TB管理
    //  模块
    $router->resource('/tb/modular', Tb\ModularController::class);
    //  主题
    $router->resource('/tb/theme', Tb\ThemeController::class);
    //  领域
    $router->resource('/tb/filed', Tb\FiledController::class);
    //  平台
    $router->resource('/tb/platform', Tb\PlatformController::class);
    //  行业
    $router->resource('/tb/industry', Tb\IndustryController::class);
    //  价格种类
    $router->resource('/tb/priceclassify', Tb\PriceclassifyController::class);
    //  地区
    $router->resource('/tb/region', Tb\RegionController::class);
    //  粉丝量级
    $router->resource('/tb/fansnumlevel', Tb\FansnumlevelController::class);
    //  平均阅读量级
    $router->resource('/tb/readlevel', Tb\ReadlevelController::class);
    //  平均点赞量级
    $router->resource('/tb/likelevel', Tb\LikelevelController::class);
    //  权重
    $router->resource('/tb/weightlevel', Tb\WeightlevelController::class);
    //  价格量级
    $router->resource('/tb/pricelevel', Tb\PricelevelController::class);

    // 自身业务
    //  软文套餐
    $router->resource('/softarticle_meal', SelfProduct\SoftarticleMealController::class);
    //  SEO
    $router->resource('/seo', SelfProduct\SEOController::class);
});