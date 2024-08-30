<?php

namespace Omnipay\ParcelaExpress\Message;

use Omnipay\ParcelaExpress\Support\BilletBillingAddress;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class CreateBilletsRequest extends AbstractRequest
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
        return $this->getIsHibrido() ?
            "billets/{$this->getSellerId()}/hibrid" :
            "billets/{$this->getSellerId()}";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $data = [];

        foreach ($this->getBillets() as $billet) {
            $shopper = $billet->getShopper();
            $address = $shopper->getBillingAddress();

            $shopperData = [
                'first_name'      => $shopper->getFirstName(),
                'last_name'       => $shopper->getLastName(),
                'billing_address' => $this->getBillingAddressData($address),
            ];

            if ($shopper->getEmail()) {
                $shopperData['email'] = $shopper->getEmail();
            }

            if ($shopper->getPhone()) {
                $shopperData['phone'] = $shopper->getPhone();
            }

            $billetData = [
                'value'                  => $billet->getValue(),
                'social_security_number' => $billet->getSocialSecurityNumber(),
                'shopper_statement'      => $billet->getShopperStatement(),
                'description'            => $billet->getDescription(),
                'delivery_date'          => $billet->getDeliveryDate(),
                'shopper'                => $shopperData,
            ];

            if (!empty($billet->getSplitRules())) {
                $billetData['split_rules'] = $this->getSplitRulesData($billet->getSplitRules());
            }

            $billetData['has_split_rules'] = $billet->getHasSplitRules();

            $data[] = $billetData;
        }

        return $data;
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\Billet[] $value
     * @return static
     */
    public function setBillets(array $value): static
    {
        return $this->setParameter('billets', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\Billet[]
     */
    public function getBillets(): array
    {
        return $this->getParameter('billets');
    }

    /**
     * @param $value
     * @return static
     */
    public function setIsHibrido($value): static
    {
        return $this->setParameter('isHibrido', $value);
    }

    /**
     * @return mixed
     */
    public function getIsHibrido(): mixed
    {
        return $this->getParameter('isHibrido');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\BilletBillingAddress $address
     * @return array
     */
    private function getBillingAddressData(BilletBillingAddress $address): array
    {
        $addressData = [
            'city'                 => $address->getCity(),
            'house_number_or_name' => $address->getHouseNumberOrName(),
            'postal_code'          => $address->getPostalCode(),
            'state_or_province'    => $address->getStateOrProvince(),
            'street'               => $address->getStreet(),
            'district'             => $address->getDistrict(),
        ];

        if ($address->getComplement()) {
            $addressData['complement'] = $address->getComplement();
        }

        return $addressData;
    }
}