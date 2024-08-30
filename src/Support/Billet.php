<?php

namespace Omnipay\ParcelaExpress\Support;

use Omnipay\Common\ParametersTrait;

/**
 * @package Omnipay\ParcelaExpress\Support
 * @author Thiago Daher
 */
class Billet
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
    public function setValue($value): static
    {
        return $this->setParameter('value', $value);
    }

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->getParameter('value');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSocialSecurityNumber($value): static
    {
        return $this->setParameter('socialSecurityNumber', $value);
    }

    /**
     * @return mixed
     */
    public function getSocialSecurityNumber(): mixed
    {
        return $this->getParameter('socialSecurityNumber');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopperStatement($value): static
    {
        return $this->setParameter('shopperStatement', $value);
    }

    /**
     * @return mixed
     */
    public function getShopperStatement(): mixed
    {
        return $this->getParameter('shopperStatement');
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
    public function setDeliveryDate($value): static
    {
        return $this->setParameter('deliveryDate', $value);
    }

    /**
     * @return mixed
     */
    public function getDeliveryDate(): mixed
    {
        return $this->getParameter('deliveryDate');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\Shopper|null $value
     * @return $this
     */
    public function setShopper(?Shopper $value): static
    {
        return $this->setParameter('shopper', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\Shopper|null
     */
    public function getShopper(): ?Shopper
    {
        return $this->getParameter('shopper');
    }

    /**
     * @return mixed
     */
    public function getHasSplitRules(): mixed
    {
        return $this->getParameter('hasSplitRules');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setHasSplitRules($value): static
    {
        return $this->setParameter('hasSplitRules', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\SplitRule[]|null
     */
    public function getSplitRules(): array|null
    {
        return $this->getParameter('splitRules');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SplitRule[]|null $value
     * @return $this
     */
    public function setSplitRules(array|null $value): static
    {
        return $this->setParameter('splitRules', $value);
    }
}