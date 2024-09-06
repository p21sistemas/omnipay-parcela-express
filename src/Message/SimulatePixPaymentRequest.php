<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class SimulatePixPaymentRequest extends AbstractRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'POST';
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
        return $this->setParameter('saleId', $value);
    }

    /**
     * @return mixed
     */
    public function getSaleId(): mixed
    {
        return $this->getParameter('saleId');
    }


    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "sales/{$this->getSaleId()}/pix/pay";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}