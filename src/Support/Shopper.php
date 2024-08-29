<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class Shopper
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
    public function setPhone($value): static
    {
        return $this->setParameter('phone', $value);
    }

    /**
     * @return mixed
     */
    public function getPhone(): mixed
    {
        return $this->getParameter('phone');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\BilletBillingAddress $value
     * @return $this
     */
    public function setBillingAddress(BilletBillingAddress $value): static
    {
        return $this->setParameter('billingAddress', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\BilletBillingAddress
     */
    public function getBillingAddress(): BilletBillingAddress
    {
        return $this->getParameter('billingAddress');
    }
}