<?php
namespace PayerIT\Api;

use PayerIT\Common\PayerITModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends PayerITModel
{

    /**
     * Valid Values: ["payerit"]
     * method will be like payerit, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
