<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class GetBilletRequest extends AbstractRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'GET';
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
        return "billets/{$this->getBilletId()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}