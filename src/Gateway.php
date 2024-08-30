<?php

namespace Omnipay\ParcelaExpress;

use DateTime;
use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\ParcelaExpress\Message\CreateBilletsRequest;
use Omnipay\ParcelaExpress\Message\GetBilletRequest;
use Omnipay\ParcelaExpress\Message\GetSaleRequest;
use Omnipay\ParcelaExpress\Message\LoginRequest;
use Omnipay\ParcelaExpress\Message\PaymentCardRequest;
use Omnipay\ParcelaExpress\Message\PaymentPixRequest;

/**
 * @package Omnipay\ParcelaExpress
 * @author Thiago Daher
 */
class Gateway extends AbstractGateway
{

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'ParcelaExpress';
    }

    /**
     * @param $value
     * @return static
     */
    public function setSellerId($value): static
    {
        return $this->setParameter('sellerId', $value);
    }

    /**
     * @return mixed
     */
    public function getSellerId(): mixed
    {
        return $this->getParameter('sellerId');
    }

    /**
     * @return mixed
     */
    public function getEmail(): mixed
    {
        return $this->getParameter('email');
    }

    /**
     * @param $value
     * @return static
     */
    public function setEmail($value): static
    {
        return $this->setParameter('email', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword(): mixed
    {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return static
     */
    public function setPassword($value): static
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getTokenExpiration(): mixed
    {
        return $this->getParameter('tokenExpiration');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTokenExpiration($value): static
    {
        return $this->setParameter('tokenExpiration', $value);
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getToken(): mixed
    {
        return $this->getParameter('token');
    }

    /**
     * @param $value
     * @return static
     */
    public function setToken($value): static
    {
        return $this->setParameter('token', $value);
    }

    /**
     * @return array
     */
    public function getDefaultParameters(): array
    {
        return [
            'email'           => '',
            'password'        => '',
            'token'           => '',
            'tokenExpiration' => '',
            'testMode'        => false,
            'sellerId'        => '',
        ];
    }

    /**
     * @return bool
     */
    public function hasToken(): bool
    {
        $token = $this->getParameter('token');

        if (empty($token)) {
            return false;
        }

        // 30 segundos de segurança para expiração do token
        $minDate = new DateTime('+30 seconds');

        $tokenExpiration = $this->getTokenExpiration();

        if (is_string($tokenExpiration)) {
            $tokenExpiration = DateTime::createFromFormat('Y-m-d H:i:s', $tokenExpiration);
        }

        return $tokenExpiration instanceof DateTime && $tokenExpiration >= $minDate;
    }

    /**
     * @return void
     * @throws \Exception
     */
    private function renewToken(): void
    {
        $request  = $this->login();
        $response = $request->send();

        if (isset($response->getData()['id_token'])) {
            $this->setToken($response->getData()['id_token']);
            $this->setTokenExpiration(date('Y-m-d H:i:s', strtotime('+30 minutes')));
        }
    }

    /**
     * @param $class
     * @param array $parameters
     * @return \Omnipay\Common\Message\AbstractRequest
     * @throws \Exception
     */
    public function createTransparentRequest($class, array $parameters = []): AbstractRequest
    {
        if (!$this->hasToken() && $class != LoginRequest::class) {
            $this->renewToken();
        }

        return parent::createRequest($class, $parameters);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Message\LoginRequest|AbstractRequest
     * @throws \Exception
     */
    public function login(): LoginRequest|AbstractRequest
    {
        return $this->createTransparentRequest(LoginRequest::class, []);
    }

    /**
     * @return CreateBilletsRequest|AbstractRequest
     * @throws \Exception
     */
    public function createBillets(): CreateBilletsRequest|AbstractRequest
    {
        return $this->createTransparentRequest(CreateBilletsRequest::class, []);
    }

    /**
     * @return PaymentCardRequest|AbstractRequest
     * @throws \Exception
     */
    public function paymentCard(): PaymentCardRequest|AbstractRequest
    {
        return $this->createTransparentRequest(PaymentCardRequest::class, []);
    }

    /**
     * @return PaymentPixRequest|AbstractRequest
     * @throws \Exception
     */
    public function paymentPix(): PaymentPixRequest|AbstractRequest
    {
        return $this->createTransparentRequest(PaymentPixRequest::class, []);
    }

    /**
     * @return GetBilletRequest|AbstractRequest
     * @throws \Exception
     */
    public function getBillet(): GetBilletRequest|AbstractRequest
    {
        return $this->createTransparentRequest(GetBilletRequest::class, []);
    }

    /**
     * @return GetSaleRequest|AbstractRequest
     * @throws \Exception
     */
    public function getSale(): GetSaleRequest|AbstractRequest
    {
        return $this->createTransparentRequest(GetSaleRequest::class, []);
    }
}