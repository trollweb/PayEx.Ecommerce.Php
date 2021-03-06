<?php

namespace PayEx\Api\Service\Vipps\Resource\Request\Data;

use PayEx\Api\Service\Payment\Resource\Request\Data\PaymentRequestInterface;
use PayEx\Api\Service\Payment\Resource\Collection\PricesCollection;

/**
 * Vipps Payment Interface
 *
 * @api
 */
interface PaymentInterface extends PaymentRequestInterface
{
    const PRICES = 'prices';

    /**
     * @return PricesCollection
     */
    public function getPrices();

    /**
     * @param PricesCollection|array $prices
     * @return $this
     */
    public function setPrices($prices);
}
