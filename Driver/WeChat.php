<?php

namespace Driver;

/**
 * Class WeChat
 * @package Driver
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/26 13:40
 * 微信基础
 *
 * -----微信集成类----
 *
 *@method  \Wechat\We We($config) static 第三方插件库
 */
class WeChat
{
    /**
     * @var array
     * 微信公众号基本参数
     */
    public static $config;

    /**
     * WeChat constructor.
     * @param array $param
     * 获取微信公众号配置信息
     */
    public function __construct(array $param)
    {
        self::$config =new Init($param);
    }

    /**
     * @param $url
     * @return Init
     */
    public static function instance($url='')
    {
        return self::$config->registerUrl($url);
    }
    public static function getAccessToken(){
        return self::$config->AccessToken();
    }
    public static function __callStatic($name,$arguments){
        $class = "\\WeChat\\" . ucfirst(strtolower($name));
        if (class_exists($class)) return new $class($arguments[0]);
        throw new \Exception("Class '{$class}' not found");
    }

}