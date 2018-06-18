<?php

/**
 * Stripe Detach Source Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Detach Source Request.
 *
 * Detaches a Source object from a Customer.
 * The status of a source is changed to consumed when it is detached and it can no longer be used to create a charge.
 *
 * @link https://stripe.com/docs/api/curl#detach_source
 */
class DetachSourceRequest extends AbstractRequest
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
     * Set the set source reference.
     *
     * @param string $value
     *
     * @return DetachSourceRequest provides a fluent interface.
     */
    public function setSourceReference($value)
    {
        return $this->setParameter('sourceReference', $value);
    }
    
    public function getData()
    {
        $this->validate('customerReference', 'sourceReference');

        return;
    }

    public function getHttpMethod()
    {
        return 'DELETE';
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/customers/'.$this->getCustomerReference().'/sources/'.$this->getSourceReference();
    }
}
