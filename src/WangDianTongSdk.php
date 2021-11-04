<?php

namespace Wsk\WangDianTongSdk;


use Hanson\Foundation\Foundation;

/**
 * @property \Wsk\WangDianTongSdk\Basic\Basic $basic
 * @property \Wsk\WangDianTongSdk\Goods\Goods $goods
 * @property \Wsk\WangDianTongSdk\Purchase\Purchase $purchase
 * @property \Wsk\WangDianTongSdk\Refund\Refund $refund
 * @property \Wsk\WangDianTongSdk\Stock\Stock $stock
 * @property \Wsk\WangDianTongSdk\Trade\Trade $trade
 *
 * Class WangDianTong
 * @package Wsk\WangDianTongSdk
 */
class WangDianTongSdk extends Foundation
{
    protected $providers = [
        ServiceProvider::class
    ];

    public function __construct($config)
    {
        $config['debug'] = $config['debug'] ?? false;
        parent::__construct($config);
    }
}