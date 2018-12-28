<?php

namespace Driver;

/**
 * Class ApiPath
 * @package Driver
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/26 13:41
 * 微信接口地址
 */
class Api
{

    /**
     * 接口地址
     * @return array
     * @url https://mp.weixin.qq.com/wiki 微信文档地址
     */
    private static $api = [
        //获取微信access_token 请求方式 GET
        'AccessToken' => 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET',
        //获取微信服务器Ip 请求方式 GET
        'GetWechatIp' => 'https://api.weixin.qq.com/cgi-bin/getcallbackip?access_token=ACCESS_TOKEN',
        //检测网络 请求方式 POST
        'WebCheck' => 'https://api.weixin.qq.com/cgi-bin/callback/check?access_token=ACCESS_TOKEN',
        //创建微信菜单 请求方式 POST
        'CreateMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=ACCESS_TOKEN',
        //获取微信菜单 请求方式 GET
        'GetMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/get?access_token=ACCESS_TOKEN',
        //删除微信菜单 请求方式 GET
        'DeleteMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=ACCESS_TOKEN',
        //创建个性化菜单 请求方式 POST
        'CreateConditionalMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/addconditional?access_token=ACCESS_TOKEN',
        //删除个性化菜单 请求方式 POST
        'DeleteConditionalMenu' => 'https://api.weixin.qq.com/cgi-bin/menu/delconditional?access_token=ACCESS_TOKEN',
        //测试个性化菜单匹配结果 请求方式 POST
        'TryMatch' => 'https://api.weixin.qq.com/cgi-bin/menu/trymatch?access_token=ACCESS_TOKEN',
        //获取自定义菜单配置接口 请求方式 GET
        'GetCurrentSelfmenuInfo' => 'https://api.weixin.qq.com/cgi-bin/get_current_selfmenu_info?access_token=ACCESS_TOKEN',
        //添加客服账号 请求方式 POST
        'CreateKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/add?access_token=ACCESS_TOKEN',
        //修改客服账号 请求方式 POST
        'UpdateKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/update?access_token=ACCESS_TOKEN',
        //删除客服账号 请求方式 POST
        'DeleteKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/del?access_token=ACCESS_TOKEN',
        //设置客服帐号的头像 请求方式 FORM/POST
        'UploadHeadimgKfaccount' => 'https://api.weixin.qq.com/customservice/kfaccount/uploadheadimg?access_token=ACCESS_TOKEN&kf_account=KFACCOUNT',
        //获取所有客服账号 请求方式 GET
        'GetKflist' => 'https://api.weixin.qq.com/cgi-bin/customservice/getkflist?access_token=ACCESS_TOKEN',
        //客服接口-发消息 请求方式 POST
        'CustomSend' => 'https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=ACCESS_TOKEN',
        //客服输入状态 请求方式 POST
        'CustomTyping' => 'https://api.weixin.qq.com/cgi-bin/message/custom/typing?access_token=ACCESS_TOKEN',
        //上传图文消息内的图片获取URL【订阅号与服务号认证后均可用】 请求方式 POST
        //请注意，本接口所上传的图片不占用公众号的素材库中图片数量的5000个的限制。图片仅支持jpg/png格式，大小必须在1MB以下。
        'MediaUploadimg' => 'https://api.weixin.qq.com/cgi-bin/media/uploadimg?access_token=ACCESS_TOKEN',
        //上传图文消息素材【订阅号与服务号认证后均可用】 请求方式 POST
        'MediaUploadNews' => 'https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=ACCESS_TOKEN',
        //根据标签进行群发【订阅号与服务号认证后均可用】 请求方式 POST
        'MassSendAll' => 'https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=ACCESS_TOKEN',
        //根据OpenID列表群发【订阅号不可用，服务号认证后可用】 请求方式 POST
        'MassSend' => 'https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=ACCESS_TOKEN',
        //删除群发【订阅号与服务号认证后均可用】 请求方式 POST
        'MassDelete' => 'https://api.weixin.qq.com/cgi-bin/message/mass/delete?access_token=ACCESS_TOKEN',
        //预览接口【订阅号与服务号认证后均可用】 请求方式 POST
        'MassPreview' => 'https://api.weixin.qq.com/cgi-bin/message/mass/preview?access_token=ACCESS_TOKEN',
        //查询群发消息发送状态【订阅号与服务号认证后均可用】 请求方式 POST
        'MassGet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/get?access_token=ACCESS_TOKEN',
        //控制群发速度-获取群发速度 请求方式 POST
        'MassSpeedGet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/speed/get?access_token=ACCESS_TOKEN',
        //控制群发速度-设置群发速度 请求方式 POST
        'MassSpeedSet' => 'https://api.weixin.qq.com/cgi-bin/message/mass/speed/set?access_token=ACCESS_TOKEN',
        //设置所属行业 请求方式 POST
        'TemplateSetIndustry' => 'https://api.weixin.qq.com/cgi-bin/template/api_set_industry?access_token=ACCESS_TOKEN',
        //获取设置的行业信息 请求方式 GET
        'TemplateGetIndustry' => 'https://api.weixin.qq.com/cgi-bin/template/get_industry?access_token=ACCESS_TOKEN',
        //获取模板ID 请求方式 POST
        'TemplateId' => 'https://api.weixin.qq.com/cgi-bin/template/api_add_template?access_token=ACCESS_TOKEN',
        //获取模板列表 请求方式 GET
        'TemplateList' => 'https://api.weixin.qq.com/cgi-bin/template/get_all_private_template?access_token=ACCESS_TOKEN',
        //删除模板 请求方式 POST
        'TemplateDelete' => 'https://api.weixin.qq.com/cgi-bin/template/del_private_template?access_token=ACCESS_TOKEN',
        //发送模板消息 请求方式 POST
        'TemplateSend' => 'https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=ACCESS_TOKEN',
        //获取公众号的自动回复规则 请求方式 GET
        'GetCurrent' => 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info?access_token=ACCESS_TOKEN',
        //新增临时素材 请求方式 FORM/POST
        'MediaUpload' => 'https://api.weixin.qq.com/cgi-bin/media/upload?access_token=ACCESS_TOKEN&type=TYPE',
        //获取临时素材 请求方式 GET
        'MediaGet' => 'https://api.weixin.qq.com/cgi-bin/media/get?access_token=ACCESS_TOKEN&media_id=MEDIA_ID',
        //获取清晰临时素材 请求方式 GET
        'MediaGetJssdk' => 'https://api.weixin.qq.com/cgi-bin/media/get/jssdk?access_token=ACCESS_TOKEN&media_id=MEDIA_ID',
        //新增永久图文素材 评论 请求方式 POST
        'MediaNews' => 'https://api.weixin.qq.com/cgi-bin/material/add_news?access_token=ACCESS_TOKEN',
        //新增其他永久素材 请求方式 FORM/POST
        'MediaOther' => 'https://api.weixin.qq.com/cgi-bin/material/add_material?access_token=ACCESS_TOKEN&type=TYPE',
        //获取永久素材 请求方式 POST
        'MediaGetMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/get_material?access_token=ACCESS_TOKEN',
        //删除永久素材 请求方式 POST
        'MediaDeleteMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/del_material?access_token=ACCESS_TOKEN',
        //修改永久素材 请求方式 POST
        'MediaUpdateMaterial' => 'https://api.weixin.qq.com/cgi-bin/material/update_news?access_token=ACCESS_TOKEN',
        //获取素材总数 请求方式 GET
        'MediaCount' => 'https://api.weixin.qq.com/cgi-bin/material/get_materialcount?access_token=ACCESS_TOKEN',
        //获取素材列表 请求方式 POST
        'MediaList' => 'https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=ACCESS_TOKEN',
        //开启文章评论 请求方式 POST
        'MediaOpenComment' => 'https://api.weixin.qq.com/cgi-bin/comment/open?access_token=ACCESS_TOKEN',
        //关闭文章评论 请求方式 POST
        'MediaCloseComment' => 'https://api.weixin.qq.com/cgi-bin/comment/close?access_token=ACCESS_TOKEN',
        //查看指定文章评论数据 请求方式 POST
        'MediaShowComment' => 'https://api.weixin.qq.com/cgi-bin/comment/list?access_token=ACCESS_TOKEN',
        //标记评论精选 请求方式 POST
        'MediaMarkComment' => 'https://api.weixin.qq.com/cgi-bin/comment/markelect?access_token=ACCESS_TOKEN',
        //将评论取消精选 请求方式 POST
        'MediaUnmarkComment' => 'https://api.weixin.qq.com/cgi-bin/comment/unmarkelect?access_token=ACCESS_TOKEN',
        //删除评论 请求方式 POST
        'MediaDeleteComment' => 'https://api.weixin.qq.com/cgi-bin/comment/delete?access_token=ACCESS_TOKEN',
        //回复评论 请求方式 POST
        'MediaReplyComment' => 'https://api.weixin.qq.com/cgi-bin/comment/reply/add?access_token=ACCESS_TOKEN',
        //删除回复 请求方式 POST
        'MediaDeleteReply' => 'https://api.weixin.qq.com/cgi-bin/comment/reply/delete?access_token=ACCESS_TOKEN',
        //微信网页授权-用户同意授权，获取code 请求方式 GET/header
        'UserGetCode' => 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect',
        //微信网页授权-用户通过code换取网页 token 请求方式 GET
        'UserAccessToken' => 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=APPSECRET&code=CODE&grant_type=authorization_code',
        //微信网页授权-用户通过refresh_token刷新 access_token 请求方式 GET
        'RefreshToken' => 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=APPID&grant_type=refresh_token&refresh_token=REFRESH_TOKEN',
        //拉取用户信息(需scope为 snsapi_userinfo) 请求方式 GET
        'UserInfo' => 'https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN',
        //检测 微信授权的 access_token 是否过期
        'CheckAccessToken' => 'https://api.weixin.qq.com/sns/auth?access_token=ACCESS_TOKEN&openid=OPENID',
        //一次性订阅消息 请求方式 GET/header
        'Subscribemsg' => 'https://mp.weixin.qq.com/mp/subscribemsg?action=get_confirm&appid=APPID&scene=SCENE&template_id=TEMPLATE_ID&redirect_url=REDIRECT_URL&reserved=RESERVED#wechat_redirect',
        //通过API推送订阅模板消息给到授权微信用户 请求方式 POST
        'SubscribeTemplate' => 'https://api.weixin.qq.com/cgi-bin/message/template/subscribe?access_token=ACCESS_TOKEN',
        //公众号调用或第三方平台帮公众号调用对公众号的所有api调用（包括第三方帮其调用）次数进行清零 请求方式 POST
        'ClearQuota' => 'https://api.weixin.qq.com/cgi-bin/clear_quota?access_token=ACCESS_TOKEN'
    ];
    private static $config = ['APPID', 'ACCESS_TOKEN', 'APPSECRET', 'TYPE', 'KFACCOUNT', 'MEDIA_ID', 'REDIRECT_URI', 'SCOPE', 'STATE', 'REFRESH_TOKEN', 'CODE', 'OPENID', 'zh_CN', 'RESERVED', 'TEMPLATE_ID', 'SCENE', 'REDIRECT_URL'];
    //url替换
    private static $url;
    //请求之后的数据
    public $data;
    //数据类型
    private $type='json';


    /**
     * 微信接口地址
     * @param $option //指定的微信接口配置
     * @param $config //匹配参数
     * @return string //匹配后的url
     */
    public function __construct($option, $config)
    {
        self::$url = self::$api[$option]??$option;
        foreach (self::$config as $value) {
            strpos(self::$url, $value) !== false ? self::$url = str_replace($value, $config[strtolower($value)], self::$url) : false;
        }
        return self::$url;
    }

    /**
     * @return $this
     * 微信get请求
     */
    public function get()
    {
        $this->data = Tool::get(self::$url);
        return $this;
    }

    /**
     * @param array $options
     * @param string $type
     * @return $this
     * 微信 post请求
     */
    public function post(array $options, $type = 'json')
    {
        $this->type = $type;
        if ($this->type == 'json') $options = Tool::arr2json($options);
        $this->data = Tool::post(self::$url, $options);
        return $this;
    }

    /**
     * @param $file
     * @return bool|string
     * form表单 文件上传
     */
    public function file($file, $key = 'media')
    {
        $this->data = Tool::post(self::$url, [$key => Tool::createCurlFile($file)]);
        return $this;
    }

    /**
     * @return array
     * @throws \Exception
     * 转数组
     */
    public function toArray()
    {
        if ($this->type == 'json') {
            return Tool::json2arr($this->data);
        } else {
            return Tool::xml2arr($this->data);
        }
    }

    /**
     * @return mixed
     * 输出url
     */
    public function toUrl()
    {
        return self::$url;
    }

}