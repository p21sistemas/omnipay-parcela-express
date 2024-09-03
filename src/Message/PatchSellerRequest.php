<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class PatchSellerRequest extends CreateSellerRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'PATCH';
    }

    /**
     * @param $value
     * @return static
     */
    public function setPatchSellerId($value): static
    {
        return $this->setParameter('patchSellerId', $value);
    }

    /**
     * @return mixed
     */
    public function getPatchSellerId(): mixed
    {
        return $this->getParameter('patchSellerId');
    }

    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "sellers/{$this->getPatchSellerId()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $data = parent::getData();
        unset($data['is_assignor']);
        unset($data['acquirer']);

        return $data;
    }
}