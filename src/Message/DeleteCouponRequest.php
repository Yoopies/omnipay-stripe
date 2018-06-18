<?php

namespace Omnipay\Stripe\Message;

class DeleteCouponRequest extends AbstractRequest
{
    /**
     * Get the source reference.
     *
     * @return string
     */
    public function getCouponReference()
    {
        return $this->getParameter('couponReference');
    }

    /**
     * Set the coupon reference.
     *
     * @param string $value
     *
     * @return DeleteCouponRequest provides a fluent interface
     */
    public function setCouponReference($value)
    {
        return $this->setParameter('couponReference', $value);
    }

    public function getData()
    {
        $this->validate('couponReference');
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons/'.$this->getCouponReference();
    }

    public function getHttpMethod()
    {
        return 'DELETE';
    }
}
