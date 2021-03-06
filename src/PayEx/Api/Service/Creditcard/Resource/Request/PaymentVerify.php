<?php

namespace PayEx\Api\Service\Creditcard\Resource\Request;

use PayEx\Api\Service\Creditcard\Resource\Request\Data\PaymentVerifyInterface;
use PayEx\Api\Service\Payment\Resource\Request\Payment as PaymentRequest;

/**
 * Verify payment data object
 */
class PaymentVerify extends PaymentRequest implements PaymentVerifyInterface
{
    /**
     * @return bool
     */
    public function isPageStripdown()
    {
        return $this->offsetGet(self::PAGE_STRIPDOWN);
    }

    /**
     * @param bool $pageStripdown
     * @return $this
     */
    public function setPageStripdown($pageStripdown)
    {
        return $this->offsetSet(self::PAGE_STRIPDOWN, $pageStripdown);
    }
}
