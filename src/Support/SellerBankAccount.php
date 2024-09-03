<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class SellerBankAccount
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
    public function setBankCode($value): static
    {
        return $this->setParameter('bankCode', $value);
    }

    /**
     * @return mixed
     */
    public function getBankCode(): mixed
    {
        return $this->getParameter('bankCode');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAgencyNumber($value): static
    {
        return $this->setParameter('agencyNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getAgencyNumber(): mixed
    {
        return $this->getParameter('agencyNumber');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAgencyDigit($value): static
    {
        return $this->setParameter('agencyDigit', $value);
    }

    /**
     * @return mixed
     */
    public function getAgencyDigit(): mixed
    {
        return $this->getParameter('agencyDigit');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAccountNumber($value): static
    {
        return $this->setParameter('accountNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountNumber(): mixed
    {
        return $this->getParameter('accountNumber');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAccountDigit($value): static
    {
        return $this->setParameter('accountDigit', $value);
    }

    /**
     * @return mixed
     */
    public function getAccountDigit(): mixed
    {
        return $this->getParameter('accountDigit');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTypeAccount($value): static
    {
        return $this->setParameter('typeAccount', $value);
    }

    /**
     * @return mixed
     */
    public function getTypeAccount(): mixed
    {
        return $this->getParameter('typeAccount');
    }
}