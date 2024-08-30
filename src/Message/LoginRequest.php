<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class LoginRequest extends AbstractRequest
{

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'email'    => $this->getEmail(),
            'password' => $this->getPassword(),
        ];
    }

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
        return 'auth/login';
    }
}