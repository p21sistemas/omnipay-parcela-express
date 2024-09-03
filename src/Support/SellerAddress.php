<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class SellerAddress
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
    public function setNumber($value): static
    {
        return $this->setParameter('number', $value);
    }

    /**
     * @return mixed
     */
    public function getNumber(): mixed
    {
        return $this->getParameter('number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setZipcode($value): static
    {
        return $this->setParameter('zipcode', $value);
    }

    /**
     * @return mixed
     */
    public function getZipcode(): mixed
    {
        return $this->getParameter('zipcode');
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