<?php
declare(strict_types=1);

namespace Zenrise\CardPayment\Model\Payment;

class ZenriseCardPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    protected $_code = "zenrisecardpayment";
    protected $_isOffline = true;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}

