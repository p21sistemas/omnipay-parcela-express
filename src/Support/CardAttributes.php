<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class CardAttributes
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
    public function setHolderName($value): static
    {
        return $this->setParameter('holderName', $value);
    }

    /**
     * @return mixed
     */
    public function getHolderName(): mixed
    {
        return $this->getParameter('holderName');
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
    public function setExpirationMonth($value): static
    {
        return $this->setParameter('expirationMonth', $value);
    }

    /**
     * @return mixed
     */
    public function getExpirationMonth(): mixed
    {
        return $this->getParameter('expirationMonth');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setExpirationYear($value): static
    {
        return $this->setParameter('expirationYear', $value);
    }

    /**
     * @return mixed
     */
    public function getExpirationYear(): mixed
    {
        return $this->getParameter('expirationYear');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSecurityCode($value): static
    {
        return $this->setParameter('securityCode', $value);
    }

    /**
     * @return mixed
     */
    public function getSecurityCode(): mixed
    {
        return $this->getParameter('securityCode');
    }
}