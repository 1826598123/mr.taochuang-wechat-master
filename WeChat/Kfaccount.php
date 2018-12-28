<?php

namespace WeChat;

use Driver\WeChat;
use Driver\Tool;

/**
 * Class Kfaccount
 * @package WeChat
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/26 16:31
 * 客服管理
 */
class Kfaccount extends WeChat{

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 创建客服账号
     */
    public function CreateKfaccount(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 修改客服账号
     */
    public function UpdateKfaccount(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @return array
     * @throws \Exception
     * 删除客服账号
     */
    public function DeleteKfaccount(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param $kfaccount
     * @param $img //图片的绝对路径 jpg格式
     * @return array
     * @throws \Exception
     * 上传客服头像
     */
    public function UploadHeadimgKfaccount($kfaccount,$img){
        $url = self::url(__FUNCTION__,self::AccessToken(),self::$config->set('kfaccount',$kfaccount));
        return Tool::json2arr(Tool::post($url,['media'=>Tool::createCurlFile($img)]));
    }

    /**
     * @return array
     * @throws \Exception
     * 获取所有客服账号
     */
    public function GetKflist(){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::get($url));
    }

}