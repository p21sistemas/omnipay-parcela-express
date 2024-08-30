<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class GetSaleRequest extends AbstractRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @return int
     */
    protected function getVersion(): int
    {
        return 1;
    }

    /**
     * @param $value
     * @return static
     */
    public function setSaleId($value): static
    {
        return $this->setParameter('billetId', $value);
    }

    /**
     * @return mixed
     */
    public function getSaleId(): mixed
    {
        return $this->getParameter('billetId');
    }


    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "sellers/{$this->getSellerId()}/sales/{$this->getSaleId()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}