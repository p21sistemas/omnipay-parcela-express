<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class SimulationRequest extends AbstractRequest
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
    public function setAmountCents($value): static
    {
        return $this->setParameter('amountCents', $value);
    }

    /**
     * @return mixed
     */
    public function getAmountCents(): mixed
    {
        return $this->getParameter('amountCents');
    }


    /**
     * @return string
     */
    protected function getResource(): string
    {
        return "simulation/sellers/{$this->getSellerId()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'amount_cents' => $this->getAmountCents(),
        ];
    }
}