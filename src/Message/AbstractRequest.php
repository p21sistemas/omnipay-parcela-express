<?php

namespace Omnipay\ParcelaExpress\Message;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{

    /**
     * @var string
     */
    protected string $liveEndpoint = 'https://api-prod.parcelaexpress.com.br';

    /**
     * @var string
     */
    protected string $testEndpoint = 'https://sandbox.parcelaexpress.com.br';

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
     * @return string
     */
    private function getEndpoint(): string
    {
        return sprintf(
            '%s/v%s/%s',
            $this->getTestMode() ? $this->testEndpoint : $this->liveEndpoint,
            $this->getVersion(),
            $this->getResource()
        );
    }

    /**
     * Retorna a versão da API.
     *
     * @return int
     */
    protected function getVersion(): int
    {
        return 2;
    }

    /**
     * Retorna o método da requisição: exemplo: POST, GET, etc
     *
     * @return string
     */
    abstract protected function getMethod(): string;

    /**
     * Retorna a URL do recurso que será acessado.
     *
     * @return string
     */
    abstract protected function getResource(): string;

    /**
     * @return array
     * @throws \Exception
     */
    protected function getHeaders(): array
    {
        return $this->getBaseHeaders();
    }

    /**
     * @return array
     * @throws \Exception
     */
    protected function getBaseHeaders(): array
    {
        $headers = [
            'Content-Type' => 'application/json',
        ];

        if (!empty($token = $this->getToken())) {
            $headers['Authorization'] = 'Bearer ' . $token;
        }

        return $headers;
    }

    /**
     * @param $data
     * @return \Omnipay\ParcelaExpress\Message\Response
     * @throws \Exception
     */
    public function sendData($data): Response
    {
        if ($this->getMethod() == 'GET') {
            $requestUrl = $this->getEndpoint();

            if (!empty($data)) {
                $requestUrl .= '?' . http_build_query($data);
            }

            $body = null;
        } else {
            $body       = json_encode($data, true);
            $requestUrl = $this->getEndpoint();
        }

        $response = $this->httpClient->request(
            $this->getMethod(),
            $requestUrl,
            $this->getHeaders(),
            $body
        );

        $body = (string)$response->getBody();

        $jsonToArrayResponse = !empty($body) ? json_decode($body, true) : [];

        if (empty($jsonToArrayResponse)) {
            $jsonToArrayResponse = $body;
        }

        return new Response($this, $jsonToArrayResponse, $response->getStatusCode());
    }

    /**
     * @return mixed
     */
    public function getHasSplitRules(): mixed
    {
        return $this->getParameter('hasSplitRules');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setHasSplitRules($value): static
    {
        return $this->setParameter('hasSplitRules', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\SplitRule[]|null
     */
    public function getSplitRules(): array|null
    {
        return $this->getParameter('splitRules');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SplitRule[]|null $value
     * @return $this
     */
    public function setSplitRules(array|null $value): static
    {
        return $this->setParameter('splitRules', $value);
    }

    /**
     * @param array|null|\Omnipay\ParcelaExpress\Support\SplitRule[] $rulesList
     * @return array
     */
    protected function getSplitRulesData(?array $rulesList = null): array
    {
        if ($rulesList === null) {
            $rulesList = $this->getSplitRules();
        }

        $rules = [];

        foreach ($rulesList as $splitRule) {
            $ruleData = [
                'amount'    => $splitRule->getAmount(),
                'seller_id' => $splitRule->getSellerId(),
            ];

            if ($splitRule->getDescription()) {
                $ruleData['description'] = $splitRule->getDescription();
            }

            if ($splitRule->getNoCost()) {
                $ruleData['no_cost'] = $splitRule->getNoCost();
            }

            $rules[] = $ruleData;
        }

        return $rules;
    }
}