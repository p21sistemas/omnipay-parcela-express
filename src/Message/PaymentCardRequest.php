<?php

namespace Omnipay\ParcelaExpress\Message;

use Omnipay\ParcelaExpress\Support\CardAttributes;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class PaymentCardRequest extends AbstractPaymentRequest
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
        return "payments/sellers/{$this->getSellerId()}";
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\CardAttributes $value
     * @return static
     */
    public function setCardAttributes(CardAttributes $value): static
    {
        return $this->setParameter('cardAttributes', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\CardAttributes
     */
    public function getCardAttributes(): CardAttributes
    {
        return $this->getParameter('cardAttributes');
    }

    /**
     * @param $value
     * @return static
     */
    public function setNumberInstallments($value): static
    {
        return $this->setParameter('numberInstallments', $value);
    }

    /**
     * @return mixed
     */
    public function getNumberInstallments(): mixed
    {
        return $this->getParameter('numberInstallments');
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $data = parent::getData();
        $card = $this->getCardAttributes();

        $data['card_attributes'] = [
            'holder_name'      => $card->getHolderName(),
            'number'           => $card->getNumber(),
            'expiration_month' => $card->getExpirationMonth(),
            'expiration_year'  => $card->getExpirationYear(),
            'security_code'    => $card->getSecurityCode(),
        ];

        $data['installment_plan'] = [
            'number_installments' => $this->getNumberInstallments(),
        ];

        $data['form_payment'] = 'credit';

        return $data;
    }
}