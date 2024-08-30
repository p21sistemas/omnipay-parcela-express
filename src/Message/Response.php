<?php

namespace Omnipay\ParcelaExpress\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class Response extends AbstractResponse
{

    /**
     * @var int
     */
    protected int $statusCode;

    /**
     * @param \Omnipay\Common\Message\RequestInterface $request
     * @param $data
     * @param int $statusCode
     */
    public function __construct(RequestInterface $request, $data, int $statusCode = 200)
    {
        parent::__construct($request, $data);
        $this->statusCode = $statusCode;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return bool
     */
    public function isSuccessful(): bool
    {
        return $this->getStatusCode() < 300 and $this->getStatusCode() >= 200;
    }
}