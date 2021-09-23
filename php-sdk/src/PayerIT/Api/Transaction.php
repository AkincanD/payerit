<?php namespace PayerIT\Api;

use PayerIT\Common\PayerITModel;

/**
 * Class Transaction
 * @property \PayerIT\Api\Amount amount
 *
 */

class Transaction extends PayerITModel
{

    /**
     * @param \PayerIT\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}