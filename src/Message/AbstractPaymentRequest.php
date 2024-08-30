<?php

namespace Omnipay\ParcelaExpress\Message;

use Omnipay\ParcelaExpress\Support\Customer;
use Omnipay\ParcelaExpress\Support\PaymentBillingAddress;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
abstract class AbstractPaymentRequest extends AbstractRequest
{
    /**
     * @param \Omnipay\ParcelaExpress\Support\Customer $value
     * @return static
     */
    public function setCustomer(Customer $value): static
    {
        return $this->setParameter('customer', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\Customer
     */
    public function getCustomer(): Customer
    {
        return $this->getParameter('customer');
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
     * @param $value
     * @return $this
     */
    public function setDescription($value): static
    {
        return $this->setParameter('description', $value);
    }

    /**
     * @return mixed
     */
    public function getDescription(): mixed
    {
        return $this->getParameter('description');
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $customer = $this->getCustomer();

        $customerData = [
            'first_name'      => $customer->getFirstName(),
            'last_name'       => $customer->getLastName(),
            'billing_address' => $this->getBillingAddressData($customer->getBillingAddress()),
        ];

        if ($customer->getDocument()) {
            $customerData['document'] = $customer->getDocument();
        }

        if ($customer->getEmail()) {
            $customerData['email'] = $customer->getEmail();
        }

        if ($customer->getIp()) {
            $customerData['ip'] = $customer->getIp();
        }

        $data = [
            'amount_cents' => $this->getAmountCents(),
            'description'  => $this->getDescription(),
            'customer'     => $customerData,
        ];

        if (!empty($this->getSplitRules())) {
            $data['split_rules'] = $this->getSplitRulesData($this->getSplitRules());
        }

        $data['has_split_rules'] = $this->getHasSplitRules();

        return $data;
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\PaymentBillingAddress $address
     * @return array
     */
    private function getBillingAddressData(PaymentBillingAddress $address): array
    {
        return [
            'city'                 => $address->getCity(),
            'house_number_or_name' => $address->getHouseNumberOrName(),
            'postal_code'          => $address->getPostalCode(),
            'state'                => $address->getState(),
            'street'               => $address->getStreet(),
            'country'              => $address->getCountry(),
        ];
    }
}