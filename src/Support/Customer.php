<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class Customer
{

    use ParametersTrait;

    /**
     * Construtor.
     */
    public function __construct()
    {
        $this->initialize();
    }

    /**
     * @param $value
     * @return $this
     */
    public function setFirstName($value): static
    {
        return $this->setParameter('firstName', $value);
    }

    /**
     * @return mixed
     */
    public function getFirstName(): mixed
    {
        return $this->getParameter('firstName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLastName($value): static
    {
        return $this->setParameter('lastName', $value);
    }

    /**
     * @return mixed
     */
    public function getLastName(): mixed
    {
        return $this->getParameter('lastName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setEmail($value): static
    {
        return $this->setParameter('email', $value);
    }

    /**
     * @return mixed
     */
    public function getEmail(): mixed
    {
        return $this->getParameter('email');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDocument($value): static
    {
        return $this->setParameter('document', $value);
    }

    /**
     * @return mixed
     */
    public function getDocument(): mixed
    {
        return $this->getParameter('document');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setIp($value): static
    {
        return $this->setParameter('ip', $value);
    }

    /**
     * @return mixed
     */
    public function getIp(): mixed
    {
        return $this->getParameter('ip');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\PaymentBillingAddress $value
     * @return $this
     */
    public function setBillingAddress(PaymentBillingAddress $value): static
    {
        return $this->setParameter('billingAddress', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\PaymentBillingAddress
     */
    public function getBillingAddress(): PaymentBillingAddress
    {
        return $this->getParameter('billingAddress');
    }
}