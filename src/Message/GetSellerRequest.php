<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class GetSellerRequest extends AbstractRequest
{

    /**
     * @return int
     */
    protected function getVersion(): int
    {
        return '1';
    }

    /**
     * @param $value
     * @return static
     */
    public function setCode($value): static
    {
        return $this->setParameter('code', $value);
    }

    /**
     * @return mixed
     */
    public function getCode(): mixed
    {
        return $this->getParameter('code');
    }

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "sellers/code/{$this->getCode()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [];
    }
}