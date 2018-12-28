<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class Menu
 * @package WeChat
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/26 13:41
 * 微信菜单处理
 */

class Menu extends WeChat{

    /**
     * @param array $options 菜单参数
     * @return array
     * @throws \Exception
     * 创建微信菜单
     */
    public function CreateMenu(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @return array
     * @throws \Exception
     * 获取微信菜单参数
     */
    public function GetMenu(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @return array
     * @throws \Exception
     * 删除微信菜单
     */
    public function DeleteMenu(){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->get()->toArray();
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 创建个性菜单
     */
    public function CreateConditionalMenu(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 删除个性化菜单
     */
    public function DeleteConditionalMenu(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 测试个性化菜单匹配结果
     */
    public function TryMatch(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @return array
     * @throws \Exception
     * 获取自定义菜单配置接口
     */
    public function GetCurrentSelfmenuInfo(){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::get($url));
    }


}