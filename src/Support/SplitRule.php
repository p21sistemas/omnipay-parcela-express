<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class SplitRule
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
    public function setAmount($value): static
    {
        return $this->setParameter('amount', $value);
    }

    /**
     * @return mixed
     */
    public function getAmount(): mixed
    {
        return $this->getParameter('amount');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSellerId($value): static
    {
        return $this->setParameter('sellerId', $value);
    }

    /**
     * @return mixed
     */
    public function getSellerId(): mixed
    {
        return $this->getParameter('sellerId');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDescription($value): static
    {
        return $this->setParameter('description', $value);
    }

    /**
     * @return mixed
     */
    public function getDescription(): mixed
    {
        return $this->getParameter('description');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setNoCost($value): static
    {
        return $this->setParameter('noCost', $value);
    }

    /**
     * @return mixed
     */
    public function getNoCost(): mixed
    {
        return $this->getParameter('noCost');
    }
}