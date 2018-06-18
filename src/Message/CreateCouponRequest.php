<?php

namespace Omnipay\Stripe\Message;

class CreateCouponRequest extends AbstractRequest
{
    /**
     * @return mixed
     */
    public function getAmountOff()
    {
        return $this->getParameter('amount_off');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAmountOff($value)
    {
        return $this->setParameter('amount_off', $value);
    }

    /**
     * @return mixed
     */
    public function getPercentOff()
    {
        return $this->getParameter('percent_off');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPercentOff($value)
    {
        return $this->setParameter('percent_off', $value);
    }

    /**
     * @return mixed
     */
    public function getDurationInMonths()
    {
        return $this->getParameter('duration_in_months');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setDurationInMonths($value)
    {
        return $this->setParameter('duration_in_months', $value);
    }

    /**
     * @return mixed
     */
    public function getMaxRedemptions()
    {
        return $this->getParameter('max_redemptions');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setMaxRedemptions($value)
    {
        return $this->setParameter('duration_in_months', $value);
    }

    /**
     * @return mixed
     */
    public function getRedeemBy()
    {
        return $this->getParameter('redeem_by');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setRedeemBy($value)
    {
        return $this->setParameter('redeem_by', $value);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * @param mixed $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->getParameter('duration');
    }

    /**
     * @param $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setDuration($value)
    {
        return $this->setParameter('duration', $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $data = [
            'id'                 => $this->getId(),
            'duration'           => $this->getDuration(),
            'amount_off'         => $this->getAmountOff(),
            'currency'           => $this->getCurrency(),
            'duration_in_months' => $this->getDurationInMonths(),
            'max_redemptions'    => $this->getMaxRedemptions(),
            'percent_off'        => $this->getPercentOff(),
            'redeem_by'          => $this->getRedeemBy(),
        ];

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons';
    }

    public function getHttpMethod()
    {
        return 'POST';
    }
}
