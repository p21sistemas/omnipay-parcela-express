<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class BilletBillingAddress
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
    public function setStateOrProvince($value): static
    {
        return $this->setParameter('stateOrProvince', $value);
    }

    /**
     * @return mixed
     */
    public function getStateOrProvince(): mixed
    {
        return $this->getParameter('stateOrProvince');
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

    /**
     * @param $value
     * @return $this
     */
    public function setComplement($value): static
    {
        return $this->setParameter('complement', $value);
    }

    /**
     * @return mixed
     */
    public function getComplement(): mixed
    {
        return $this->getParameter('complement');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDistrict($value): static
    {
        return $this->setParameter('district', $value);
    }

    /**
     * @return mixed
     */
    public function getDistrict(): mixed
    {
        return $this->getParameter('district');
    }
}