<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class VoidBilletRequest extends AbstractRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'POST';
    }

    /**
     * @param $value
     * @return static
     */
    public function setBilletId($value): static
    {
        return $this->setParameter('billetId', $value);
    }

    /**
     * @return mixed
     */
    public function getBilletId(): mixed
    {
        return $this->getParameter('billetId');
    }

    /**
     * @return int
     */
    protected function getVersion(): int
    {
        return 1;
    }
    
    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "billets/{$this->getSellerId()}/{$this->getBilletId()}/void";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}