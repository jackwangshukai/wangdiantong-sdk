<?php

namespace Wsk\WangDianTongSdk;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Wsk\WangDianTongSdk\Basic\Basic;
use Wsk\WangDianTongSdk\Goods\Goods;
use Wsk\WangDianTongSdk\Purchase\Purchase;
use Wsk\WangDianTongSdk\Refund\Refund;
use Wsk\WangDianTongSdk\Stock\Stock;
use Wsk\WangDianTongSdk\Trade\Trade;

class ServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        // 基础接口
        $pimple['basic'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Basic($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };

        // 货品接口
        $pimple['goods'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Goods($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };

        // 采购接口
        $pimple['purchase'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Purchase($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };

        // 售后接口
        $pimple['refund'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Refund($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };

        // 库存接口
        $pimple['stock'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Stock($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };

        // 订单接口
        $pimple['trade'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Trade($config['appkey'], $config['appsecret'], $config['sid'], $config['baseUrl']);
        };


    }
}