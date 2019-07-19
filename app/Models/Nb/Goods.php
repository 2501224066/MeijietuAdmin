<?php


namespace App\Models\Nb;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Nb\Goods
 *
 * @property int $goods_id
 * @property int $uid 用户id 默认官方账户
 * @property string $goods_num 编码
 * @property string $title 标题
 * @property string $html_title 页面tile
 * @property string $title_about 标题简介
 * @property string|null $content 套餐内容
 * @property int|null $max_title_long 限制标题长度
 * @property string|null $avatar_url 头像
 * @property string|null $qrcode_url 二维码
 * @property string|null $qq_ID QQ号
 * @property string|null $weixin_ID 微信号
 * @property string|null $room_ID 房间号
 * @property int|null $fans_num 粉丝数
 * @property int $auth_type 认证类型 0=未认证 1=已认证
 * @property int $news_source_status 是否新闻源 0=否 1=是
 * @property int $entry_status 入口状态 1=没有入口 2=首页入口 3=频道入口 4=上级入口
 * @property int $included_sataus 收录状态 0=不包收录 1=包收录
 * @property string|null $link 链接
 * @property string|null $case_link 案例链接
 * @property int $link_type 链接类型 0=不可带网址 1=可带网址
 * @property int $weekend_status 周末可发 0=否 1=是
 * @property int $reserve_status 是否预约 0=否 1=是
 * @property string|null $remarks 备注
 * @property int $modular_id
 * @property string $modular_name 模块
 * @property int $theme_id
 * @property string $theme_name 主题
 * @property int|null $filed_id
 * @property string|null $filed_name 领域
 * @property int|null $platform_id
 * @property string|null $platform_name 平台
 * @property string|null $platform_logo 平台logo
 * @property int|null $industry_id
 * @property string|null $industry_name 行业
 * @property int|null $region_id
 * @property string|null $region_name 地区
 * @property int|null $phone_weightlevel_id
 * @property string|null $phone_weightlevel_img 移动端权重 图片
 * @property int|null $pc_weightlevel_id
 * @property string|null $pc_weightlevel_img PC端权重 图片
 * @property int $verify_status 审核状态 0=待审核 1=未通过 2=通过
 * @property int $status 上架状态 0=未上架 1=上架
 * @property int $recommend_status 推荐状态 0=否 1=是
 * @property int $delete_status 删除状态 0=未删除 1=删除
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $avg_read_num 平均阅读数
 * @property int|null $avg_like_num 平均点赞数
 * @property int|null $avg_comment_num 平均评论数
 * @property int|null $avg_retweet_num 平均转发数
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Nb\GoodsPrice[] $goods_price
 * @property-read \App\Models\Nb\GoodsPrice $one_goods_price
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAuthType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAvgCommentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAvgLikeNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAvgReadNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereAvgRetweetNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereCaseLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereDeleteStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereEntryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereFansNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereFiledId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereFiledName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereGoodsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereHtmlTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereIncludedSataus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereIndustryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereIndustryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereLinkType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereMaxTitleLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereModularId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereModularName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereNewsSourceStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePcWeightlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePcWeightlevelImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePhoneWeightlevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePhoneWeightlevelImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePlatformId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePlatformLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods wherePlatformName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereQqID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereQrcodeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereRecommendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereReserveStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereRoomID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereThemeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereTitleAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereVerifyStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereWeekendStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereWeixinID($value)
 * @mixin \Eloquent
 * @property string|null $level_name 级别名称
 * @property int|null $max_read_num 最大阅读数
 * @property int|null $total_like_num 合计点赞数
 * @property int|null $max_like_num 最大点赞数
 * @property int|null $total_comment_num 合计评论数
 * @property int|null $max_comment_num 最大评论数
 * @property int|null $total_retweet_num 合计转发数
 * @property int|null $max_retweet_num 最大转发数
 * @property int|null $follows_num 关注数量
 * @property int|null $notes_num 笔记数量
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereFollowsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereLevelName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereMaxCommentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereMaxLikeNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereMaxReadNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereMaxRetweetNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereNotesNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereTotalCommentNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereTotalLikeNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Nb\Goods whereTotalRetweetNum($value)
 */
class Goods extends Model
{
    protected $table = 'nb_goods';

    protected $primaryKey = 'goods_id';

    protected $guarded = [];

    const AUTY_TYPE = [
        0 => '未认证',
        1 => '已认证'
    ];

    const NEW_SOURCE_STATUS = [
        1 => '是',
        0 => '否'
    ];

    const ENTRY_STATUS = [
        1 => '没有入口',
        2 => '首页入口',
        3 => '频道入口',
        4 => '上级入口'
    ];

    const INCLUDED_STATUS = [
        1 => '包收录',
        0 => '不包收录'
    ];

    const LINK_TYPE = [
        0 => '不可带网址',
        1 => '可带网址'
    ];

    const WEEKEND_STATUS = [
        1 => '是',
        0 => '否'
    ];

    const RESERVE_STATUS = [
        1 => '是',
        0 => '否'
    ];

    const VERIFY_STATUS = [
        0 => '待审核',
        1 => '未通过',
        2 => '通过'
    ];


    const STATUS = [
        0 => '下架',
        1 => '上架'
    ];

    const RECOMMEND_STATUS = [
        1 => '是',
        0 => '否'
    ];

    const DELETE_STATUS = [
        1 => '是',
        0 => '否'
    ];

    public function goods_price(): HasMany
    {
        return $this->hasMany(GoodsPrice::class, 'goods_id', 'goods_id');
    }


    public function one_goods_price(): HasOne
    {
        return $this->hasOne(GoodsPrice::class, 'goods_id', 'goods_id');
    }
}