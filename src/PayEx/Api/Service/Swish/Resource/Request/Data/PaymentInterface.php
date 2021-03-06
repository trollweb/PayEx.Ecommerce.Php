<?php

namespace PayEx\Api\Service\Swish\Resource\Request\Data;

use PayEx\Api\Service\Payment\Resource\Request\Data\PaymentRequestInterface;
use PayEx\Api\Service\Swish\Resource\Data\PaymentSwishInterface;
use PayEx\Api\Service\Payment\Resource\Collection\PricesCollection;

/**
 * Swish Payment Interface
 *
 * @api
 */
interface PaymentInterface extends PaymentRequestInterface
{
    const PRICES = 'prices';
    const SWISH = 'swish';

    /**
     * @return PricesCollection
     */
    public function getPrices();

    /**
     * @param PricesCollection|array $prices
     * @return $this
     */
    public function setPrices($prices);


    /**
     * @return PaymentSwishInterface
     */
    public function getSwish();

    /**
     * @param PaymentSwishInterface $swish
     * @return $this
     */
    public function setSwish($swish);
}
