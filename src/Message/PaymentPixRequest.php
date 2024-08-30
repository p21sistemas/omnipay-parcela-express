<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class PaymentPixRequest extends AbstractPaymentRequest
{

    /**
     * @return string
     */
    protected function getMethod(): string
    {
        return 'POST';
    }

    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "payments/sellers/{$this->getSellerId()}/pix";
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
     * @return array
     */
    public function getData(): array
    {
        $data = parent::getData();

        $data['delivery_date'] = $this->getDeliveryDate();

        return $data;
    }
}