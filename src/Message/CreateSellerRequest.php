<?php

namespace Omnipay\ParcelaExpress\Message;

use Omnipay\ParcelaExpress\Support\SellerAddress;
use Omnipay\ParcelaExpress\Support\SellerBankAccount;

/**
 * @package Omnipay\ParcelaExpress\Message
 * @author Thiago Daher
 */
class CreateSellerRequest extends AbstractRequest
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
        return 'sellers';
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SellerAddress $value
     * @return static
     */
    public function setAddress(SellerAddress $value): static
    {
        return $this->setParameter('address', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\SellerAddress
     */
    public function getAddress(): SellerAddress
    {
        return $this->getParameter('address');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SellerBankAccount $value
     * @return static
     */
    public function setBankAccount(SellerBankAccount $value): static
    {
        return $this->setParameter('bankAccount', $value);
    }

    /**
     * @return \Omnipay\ParcelaExpress\Support\SellerBankAccount
     */
    public function getBankAccount(): SellerBankAccount
    {
        return $this->getParameter('bankAccount');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setName($value): static
    {
        return $this->setParameter('name', $value);
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->getParameter('name');
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
     * @param $value
     * @return $this
     */
    public function setDocument($value): static
    {
        return $this->setParameter('document', $value);
    }

    /**
     * @return mixed
     */
    public function getDocument(): mixed
    {
        return $this->getParameter('document');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStateRegistration($value): static
    {
        return $this->setParameter('stateRegistration', $value);
    }

    /**
     * @return mixed
     */
    public function getStateRegistration(): mixed
    {
        return $this->getParameter('stateRegistration');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCode($value): static
    {
        return $this->setParameter('code', $value);
    }

    /**
     * @return mixed
     */
    public function getCode(): mixed
    {
        return $this->getParameter('code');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSettlementType($value): static
    {
        return $this->setParameter('settlementType', $value);
    }

    /**
     * @return mixed
     */
    public function getSettlementType(): mixed
    {
        return $this->getParameter('settlementType');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMonthlyBilling($value): static
    {
        return $this->setParameter('monthlyBilling', $value);
    }

    /**
     * @return mixed
     */
    public function getMonthlyBilling(): mixed
    {
        return $this->getParameter('monthlyBilling');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPhone($value): static
    {
        return $this->setParameter('phone', $value);
    }

    /**
     * @return mixed
     */
    public function getPhone(): mixed
    {
        return $this->getParameter('phone');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setIsSplit($value): static
    {
        return $this->setParameter('isSplit', $value);
    }

    /**
     * @return mixed
     */
    public function getIsSplit(): mixed
    {
        return $this->getParameter('isSplit');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAbsorbCosts($value): static
    {
        return $this->setParameter('absorbCosts', $value);
    }

    /**
     * @return mixed
     */
    public function getAbsorbCosts(): mixed
    {
        return $this->getParameter('absorbCosts');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStatus($value): static
    {
        return $this->setParameter('status', $value);
    }

    /**
     * @return mixed
     */
    public function getStatus(): mixed
    {
        return $this->getParameter('status');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setType($value): static
    {
        return $this->setParameter('type', $value);
    }

    /**
     * @return mixed
     */
    public function getType(): mixed
    {
        return $this->getParameter('type');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMerchantId($value): static
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * @return mixed
     */
    public function getMerchantId(): mixed
    {
        return $this->getParameter('merchantId');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSalePlanId($value): static
    {
        return $this->setParameter('salePlanId', $value);
    }

    /**
     * @return mixed
     */
    public function getSalePlanId(): mixed
    {
        return $this->getParameter('salePlanId');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPixPos($value): static
    {
        return $this->setParameter('pixPos', $value);
    }

    /**
     * @return mixed
     */
    public function getPixPos(): mixed
    {
        return $this->getParameter('pixPos');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setAcquirer($value): static
    {
        return $this->setParameter('acquirer', $value);
    }

    /**
     * @return mixed
     */
    public function getAcquirer(): mixed
    {
        return $this->getParameter('acquirer');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBilletProvider($value): static
    {
        return $this->setParameter('billetProvider', $value);
    }

    /**
     * @return mixed
     */
    public function getBilletProvider(): mixed
    {
        return $this->getParameter('billetProvider');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setIsAssignor($value): static
    {
        return $this->setParameter('isAssignor', $value);
    }

    /**
     * @return mixed
     */
    public function getIsAssignor(): mixed
    {
        return $this->getParameter('isAssignor');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setNoPaymentMethods($value): static
    {
        return $this->setParameter('noPaymentMethods', $value);
    }

    /**
     * @return mixed
     */
    public function getNoPaymentMethods(): mixed
    {
        return $this->getParameter('noPaymentMethods');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPixProvider($value): static
    {
        return $this->setParameter('pixProvider', $value);
    }

    /**
     * @return mixed
     */
    public function getPixProvider(): mixed
    {
        return $this->getParameter('pixProvider');
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SellerAddress $address
     * @return array
     */
    private function getAddressData(SellerAddress $address): array
    {
        $addressData = [
            'zipcode'  => $address->getZipcode(),
            'street'   => $address->getStreet(),
            'number'   => $address->getNumber(),
            'district' => $address->getDistrict(),
            'state'    => $address->getState(),
            'city'     => $address->getCity(),
        ];

        if ($address->getComplement()) {
            $addressData['complement'] = $address->getComplement();
        }

        return $addressData;
    }

    /**
     * @param \Omnipay\ParcelaExpress\Support\SellerBankAccount $bankAccount
     * @return array
     */
    private function getBankAccountData(SellerBankAccount $bankAccount): array
    {
        $addressData = [
            'bank_code'      => $bankAccount->getBankCode(),
            'agency_number'  => $bankAccount->getAgencyNumber(),
            'account_number' => $bankAccount->getAccountNumber(),
            'type_account'   => $bankAccount->getTypeAccount(),
        ];

        if ($bankAccount->getAgencyDigit()) {
            $addressData['agency_digit'] = $bankAccount->getAgencyDigit();
        }

        if ($bankAccount->getAccountDigit()) {
            $addressData['account_digit'] = $bankAccount->getAccountDigit();
        }

        return $addressData;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'name'               => $this->getName(),
            'description'        => $this->getDescription(),
            'document'           => $this->getDocument(),
            'state_registration' => $this->getStateRegistration(),
            'code'               => $this->getCode(),
            'settlement_type'    => $this->getSettlementType(),
            'address'            => $this->getAddressData($this->getAddress()),
            'bank_account'       => $this->getBankAccountData($this->getBankAccount()),
            'monthly_billing'    => $this->getMonthlyBilling(),
            'phone'              => $this->getPhone(),
            'is_split'           => $this->getIsSplit(),
            'absorb_costs'       => $this->getAbsorbCosts(),
            'status'             => $this->getStatus(),
            'type'               => $this->getType(),
            'merchant_id'        => $this->getMerchantId(),
            'sale_plan_id'       => $this->getSalePlanId(),
            'pix_pos'            => $this->getPixPos(),
            'acquirer'           => $this->getAcquirer(),
            'billet_provider'    => $this->getBilletProvider(),
            'is_assignor'        => $this->getIsAssignor(),
            'no_payment_methods' => $this->getNoPaymentMethods(),
            'has_split_rules'    => $this->getHasSplitRules(),
            'pix_provider'       => $this->getPixProvider(),
        ];
    }
}