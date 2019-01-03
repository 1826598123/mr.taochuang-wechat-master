<?php

namespace WeChat;

use Driver\WeChat;

/**
 * Class Card
 * @package WeChat
 * @author Mr.taochuang <1826598123@qq.com>
 * @date 2018/12/29 18:48
 * 卡劵管理
 */
class Card extends WeChat{

    /**
     * @param array $options
     * @return array
     * 创建卡券
     */
    public function CardCreate(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $card_id /卡券id
     * @param bool $is_open /是否开启买单功能，填true/false
     * @return array
     * 设置买单接口
     */
    public function PaycellSet($card_id,$is_open=true){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'is_open'=>$is_open])->toArray();
    }

    /**
     * @param $card_id /卡券id
     * @param bool $is_open /是否开启买单功能，填true/false
     * @return array
     * 设置自助核销接口
     */
    public function SetSelfconsumecell($card_id, $is_open = true){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'is_open'=>$is_open])->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 创建二维码接口
     */
    public function CardQrcodeCreate(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param array $options
     * @return array
     * 创建货架接口
     */
    public function CreateLandingpage(array $options){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($options)->toArray();
    }

    /**
     * @param $card_id /cardid
     * @param array $code
     * @return array
     * 导入code接口
     */
    public function CodeDeposit($card_id, array $code){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'code'=>$code])->toArray();
    }

    /**
     * @param $card_id
     * @return array
     * 查询导入code数目接口
     */
    public function CodeGetdepositcount($card_id){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id])->toArray();
    }

    /**
     * @param $card_id
     * @param array $code
     * @return array
     * 核查code
     */
    public function CodeCheck($card_id, array $code){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'code'=>$code])->toArray();
    }

    /**
     * @param $card_id
     * @return array
     *  图文消息群发卡券
     */
    public function MpnewsGethtml($card_id){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id])->toArray();
    }

    /**
     * @param array $openid 	测试的openid列表
     * @param array $username 测试的微信号列表
     * @return array
     * 设置测试白名单
     */
    public function TestwhitelistSet(array $openid = [],array $username = []){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['openid'=>$openid,'username'=>$username])->toArray();
    }

    /**
     * @param $code /单张卡券的唯一标准
     * @param string $card_id /卡券ID代表一类卡券 自定义code卡券必填
     * @param bool $check_consume /	是否校验code核销状态，填入true和false时的code异常状态返回数据不同
     * @return array
     * 线下核销 查询Code接口
     */
    public function CodeGet($code,$card_id='',$check_consume=true){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'code'=>$code,'check_consume'=>$check_consume])->toArray();
    }

    /**
     * @param $card_id /卡券ID。创建卡券时use_custom_code填写true时必填。非自定义Code不必填写。
     * @param $code /需核销的Code码
     * @return array
     * 线下核销 核销Code接口
     */
    public function CodeConsume($code,$card_id=''){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'code'=>$code])->toArray();
    }

    /**
     * @param $encrypt_code /经过加密的Code码
     * @return array
     * Code解码接口
     */
    public function CodeDecrypt($encrypt_code){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['encrypt_code'=>$encrypt_code])->toArray();
    }

    /**
     * @param $openid /需要查询的用户openid
     * @param string $card_id /	卡券ID。不填写时默认查询当前appid下的卡券
     * @return array
     * 获取用户已领取卡券接口
     */
    public function CardUserGetcardlist($openid,$card_id=''){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'openid'=>$openid])->toArray();
    }

    /**
     * @param $card_id /卡券ID
     * @return array
     * 查看卡券详情
     */
    public function CardDetails($card_id){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id])->toArray();
    }

    /**
     * @param $offset /查询卡列表的起始偏移量，从0开始，即offset: 5是指从从列表里的第六个开始读取。
     * @param int $count /需要查询的卡片的数量（数量最大50）。
     * @param array $status_list /支持开发者拉出指定状态的卡券列表 “CARD_STATUS_NOT_VERIFY”, 待审核 ； “CARD_STATUS_VERIFY_FAIL”, 审核失败； “CARD_STATUS_VERIFY_OK”， 通过审核； “CARD_STATUS_DELETE”， 卡券被商户删除； “CARD_STATUS_DISPATCH”， 在公众平台投放过的卡券；
     * @return array
     * 批量查询卡券列表
     */
    public function CardBatchget($offset, $count = 50, array $status_list = []){

        $data = ['offset' => $offset, 'count' => $count];
        if(!empty($status_list)) $data['status_list'] = $status_list;
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post($data)->toArray();
    }

    /**
     * @param $card_id
     * @param array $member_card
     * @return array
     * 更改卡券信息接口
     */
    public function CardUpdate($card_id,array $member_card){
        return self::instance(__FUNCTION__)->run(self::GetAccessToken())->post(['card_id'=>$card_id,'member_card'=>$member_card])->toArray();
    }

    public function CardModifyStock($card_id, $increase_stock_value = null, $reduce_stock_value = null){

    }
}