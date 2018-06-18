<?php

namespace Omnipay\Stripe\Message;

class FetchSourceRequest extends AbstractRequest
{
    /**
     * Get the source reference.
     *
     * @return string
     */
    public function getSourceReference()
    {
        return $this->getParameter('sourceReference');
    }

    /**
     * Set the source reference.
     *
     * @param string
     * @return FetchSourceRequest provides a fluent interface.
     */
    public function setSourceReference($value)
    {
        return $this->setParameter('sourceReference', $value);
    }

    public function getData()
    {
        $this->validate('sourceReference');
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/sources/'.$this->getSourceReference();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
