<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class User
 * @package WeChat
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/27 14:32
 * 微信网页开发授权
 */
class User extends WeChat{

    /**
     * @param $redirect_uri /授权后重定向的回调链接地址， 请使用 urlEncode 对链接进行处理
     * @param string $scope /应用授权作用域，snsapi_base （不弹出授权页面，直接跳转，只能获取用户openid），snsapi_userinfo （弹出授权页面，可通过openid拿到昵称、性别、所在地。并且， 即使在未关注的情况下，只要用户授权，也能获取其信息 ）
     * @param string $state /重定向后会带上state参数，开发者可以填写a-zA-Z0-9的参数值，最多128字节
     * @return string
     */
    public function UserGetCode($redirect_uri,$scope='snsapi_base',$state='STATE'){
        $url = self::url(__FUNCTION__,self::$config->set('redirect_uri',$redirect_uri),self::$config->set('scope',$scope),self::$config->set('state',$state));
        header('location:'.$url);exit;
    }

    /**
     * @param $code /授权后的code
     * @return array
     * @throws \Exception
     * 获取用户access_token
     */
    public function UserAccessToken($code){
        $url = self::url(__FUNCTION__,self::$config->set('code',$code));
        return Tool::json2arr(Tool::get($url));
    }

    /**
     * @param $refresh_token /用于更新access_token
     * @return array
     * @throws \Exception
     * 刷新access_token
     */
    public function RefreshToken($refresh_token){
        $url = self::url(__FUNCTION__,self::$config->set('refresh_token',$refresh_token));
        return Tool::json2arr(Tool::get($url));
    }

    /**
     * @param $access_token
     * @param $openid
     * @param string $lang 国家地区语言版本，zh_CN 简体，zh_TW 繁体，en 英语
     * @return array
     * @throws \Exception
     * 微信获取用户信息
     */
    public function UserInfo($access_token,$openid,$lang='zh_CN'){
        $url = self::url(__FUNCTION__,self::$config->set('access_token',$access_token),self::$config->set('openid',$openid),self::$config->set('zh_cn',$lang));
        return Tool::json2arr(Tool::get($url));
    }

    public function CheckAccessToken($access_token,$openid){
        $url = self::url(__FUNCTION__,self::$config->set('access_token',$access_token),self::$config->set('openid',$openid));
        return Tool::json2arr(Tool::get($url));
    }
}