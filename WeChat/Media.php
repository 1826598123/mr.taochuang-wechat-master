<?php

namespace WeChat;

use Driver\Tool;
use Driver\WeChat;

/**
 * Class Media
 * @package WeChat
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/26 18:15
 *微信素材管理
 */
class Media extends WeChat{

    /**
     * @param $img
     * @param $type
     * @return array
     * @throws \Exception
     * 新增临时素材
     */
    public function MediaUpload($img,$type){
        $url = self::url(__FUNCTION__,self::AccessToken(),self::$config->set("type",$type));
        return Tool::json2arr(Tool::post($url,['media'=>Tool::createCurlFile($img)]));
    }

    /**
     * @param $media_id
     * @return bool|string
     * @throws \Exception
     * 获取素材
     */
    public function MediaGet($media_id){
        $url = self::url(__FUNCTION__,self::AccessToken(),self::$config->set('media_id',$media_id));
        return Tool::get($url);
    }

    /**
     * @param $media_id
     * @return bool|string
     * @throws \Exception
     * 更清晰的音频获取素材
     */
    public function MediaGetJssdk($media_id){
        $url = self::url(__FUNCTION__,self::AccessToken(),self::$config->set('media_id',$media_id));
        return Tool::get($url);
    }
    /**
     * @param $img
     * @return array
     * @throws \Exception
     * 上传图文消息内的图片获取URL
     */
    public function MediaUploadimg($img){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,['media'=>Tool::createCurlFile($img)]));
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 上传图文消息素材
     */
    public function MediaUploadNews(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param array $options
     * @return array
     * @throws \Exception
     * 新增永久图文素材
     */
    public function MediaNews(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param $img
     * @param $type
     * @return array
     * @throws \Exception
     * 新增其他素材 分别有图片（image）、语音（voice）、视频（video）和缩略图（thumb）
     */
    public function MediaOther($img,$type){
        $url = self::url(__FUNCTION__,self::AccessToken(),self::$config->set("type",$type));
        return Tool::json2arr(Tool::post($url,['media'=>Tool::createCurlFile($img)]));
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 获取永久素材
     */
    public function MediaGetMaterial(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 删除永久素材
     */
    public function MediaDeleteMaterial(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }

    /**
     * @param $options
     * @return array
     * @throws \Exception
     * 修改永久素材
     */
    public function MediaUpdateMaterial(array $options){
        $url = self::url(__FUNCTION__,self::AccessToken());
        return Tool::json2arr(Tool::post($url,Tool::arr2json($options)));
    }


}