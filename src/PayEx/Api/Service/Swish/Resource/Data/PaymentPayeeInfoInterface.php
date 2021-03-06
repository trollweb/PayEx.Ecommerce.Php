<?php

namespace PayEx\Api\Service\Swish\Resource\Data;

use PayEx\Api\Service\Payment\Resource\Request\Data\PayeeInfoInterface;

/**
 * Swish payment payee info interface
 *
 * @api
 */
interface PaymentPayeeInfoInterface extends PayeeInfoInterface
{
    const SUBSITE = 'subsite';

    /**
     * @return string
     */
    public function getSubsite();

    /**
     * @param string $subsite
     * @return $this
     */
    public function setSubsite($subsite);
}
