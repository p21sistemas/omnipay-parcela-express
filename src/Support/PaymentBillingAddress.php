<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class PaymentBillingAddress
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
    public function setCity($value): static
    {
        return $this->setParameter('city', $value);
    }

    /**
     * @return mixed
     */
    public function getCity(): mixed
    {
        return $this->getParameter('city');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCountry($value): static
    {
        return $this->setParameter('country', $value);
    }

    /**
     * @return mixed
     */
    public function getCountry(): mixed
    {
        return $this->getParameter('country');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setHouseNumberOrName($value): static
    {
        return $this->setParameter('houseNumberOrName', $value);
    }

    /**
     * @return mixed
     */
    public function getHouseNumberOrName(): mixed
    {
        return $this->getParameter('houseNumberOrName');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPostalCode($value): static
    {
        return $this->setParameter('postalCode', $value);
    }

    /**
     * @return mixed
     */
    public function getPostalCode(): mixed
    {
        return $this->getParameter('postalCode');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setState($value): static
    {
        return $this->setParameter('state', $value);
    }

    /**
     * @return mixed
     */
    public function getState(): mixed
    {
        return $this->getParameter('state');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStreet($value): static
    {
        return $this->setParameter('street', $value);
    }

    /**
     * @return mixed
     */
    public function getStreet(): mixed
    {
        return $this->getParameter('street');
    }
}