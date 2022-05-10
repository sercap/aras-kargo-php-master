<?php

namespace Sercap\ArasKargoPhpMaster;

use Exception;
use SoapClient;
use SoapFault;
use stdClass;

class ArasKargo
{

    public string $liveRequest = 'https://integrationtest.araskargo.com.tr/mpordertest/IntegrationService.svc?wsdl';
    public string $testRequest = 'https://integrationtest.araskargo.com.tr/mpordertest/IntegrationService.svc?wsdl';
    public string $customerCode = '2128054550925';
    public string $username = 'mporder';
    public string $password = '123456';

    public object $soapClient;
    public bool $testMode = false;

    protected string $codeExpireDate;
    protected string $configurationId;
    protected int $integrationCode;
    protected int $lovCollectionType;
    protected int $lovPayOrType;
    protected string $mainServiceCode;
    protected string $extServiceCodeList;
    protected int $pieceCount;
    protected int $tradingWaybillNumber;
    protected int $volume;
    protected int $weight;

    protected string $receiverAddress;
    protected string $receiverAddressId;
    protected string $receiverCityName;
    protected string $receiverMobilePhone;
    protected string $receiverName;
    protected string $receiverPhoneNumber;
    protected string $receiverTownName;
    protected string $receiverTaxNumber;

    protected string $senderAddress;
    protected string $senderAddressId;
    protected string $senderCityName;
    protected string $senderMobilePhone;
    protected string $senderName;
    protected string $senderPhoneNumber;
    protected string $senderTownName;
    protected string $senderTaxNumber;

    /**
     * @param bool $testMode
     * @return $this
     */
    public function setTestMode(bool $testMode): ArasKargo
    {
        $this->testMode = $testMode;

        return $this;
    }

    /**
     * @param string $codeExpireDate
     * @return $this
     */
    public function setCodeExpireDate(string $codeExpireDate): ArasKargo
    {
        $this->codeExpireDate = $codeExpireDate;

        return $this;
    }

    /**
     * @param string $configurationId
     * @return $this
     */
    public function setConfigurationId(string $configurationId): ArasKargo
    {
        $this->configurationId = $configurationId;

        return $this;
    }

    /**
     * @param int $integrationCode
     * @return $this
     */
    public function setIntegrationCode(int $integrationCode): ArasKargo
    {
        $this->integrationCode = $integrationCode;

        return $this;
    }

    /**
     * @param int $lovCollectionType
     * @return $this
     */
    public function setLovCollectionType(int $lovCollectionType): ArasKargo
    {
        $this->lovCollectionType = $lovCollectionType;

        return $this;
    }

    /**
     * @param int $lovPayOrType
     * @return $this
     */
    public function setLovPayOrType(int $lovPayOrType): ArasKargo
    {
        $this->lovPayOrType = $lovPayOrType;

        return $this;
    }

    /**
     * @param string $mainServiceCode
     * @return $this
     */
    public function setMainServiceCode(string $mainServiceCode): ArasKargo
    {
        $this->mainServiceCode = $mainServiceCode;

        return $this;
    }

    /**
     * @param string $extServiceCodeList
     * @return $this
     */
    public function setExtServiceCodeList(string $extServiceCodeList): ArasKargo
    {
        $this->extServiceCodeList = $extServiceCodeList;

        return $this;
    }

    /**
     * @param int $pieceCount
     * @return $this
     */
    public function setPieceCount(int $pieceCount): ArasKargo
    {
        $this->pieceCount = $pieceCount;

        return $this;
    }

    /**
     * @param int $tradingWaybillNumber
     * @return $this
     */
    public function setTradingWaybillNumber(int $tradingWaybillNumber): ArasKargo
    {
        $this->tradingWaybillNumber = $tradingWaybillNumber;

        return $this;
    }

    /**
     * @param int $volume
     * @return $this
     */
    public function setVolume(int $volume): ArasKargo
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @param int $weight
     * @return $this
     */
    public function setWeight(int $weight): ArasKargo
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @param string $receiverAddress
     * @return $this
     */
    public function setReceiverAddress(string $receiverAddress): ArasKargo
    {
        $this->receiverAddress = $receiverAddress;

        return $this;
    }

    /**
     * @param string $receiverAddressId
     * @return $this
     */
    public function setReceiverAddressId(string $receiverAddressId): ArasKargo
    {
        $this->receiverAddressId = $receiverAddressId;

        return $this;
    }

    /**
     * @param string $receiverCityName
     * @return $this
     */
    public function setReceiverCityName(string $receiverCityName): ArasKargo
    {
        $this->receiverCityName = $receiverCityName;

        return $this;
    }

    /**
     * @param string $receiverMobilePhone
     * @return $this
     */
    public function setReceiverMobilePhone(string $receiverMobilePhone): ArasKargo
    {
        $this->receiverMobilePhone = $receiverMobilePhone;

        return $this;
    }

    /**
     * @param string $receiverName
     * @return $this
     */
    public function setReceiverName(string $receiverName): ArasKargo
    {
        $this->receiverName = $receiverName;

        return $this;
    }

    /**
     * @param string $receiverPhoneNumber
     * @return $this
     */
    public function setReceiverPhoneNumber(string $receiverPhoneNumber): ArasKargo
    {
        $this->receiverPhoneNumber = $receiverPhoneNumber;

        return $this;
    }

    /**
     * @param string $receiverTownName
     * @return $this
     */
    public function setReceiverTownName(string $receiverTownName): ArasKargo
    {
        $this->receiverTownName = $receiverTownName;

        return $this;
    }

    /**
     * @param string $receiverTaxNumber
     * @return $this
     */
    public function setReceiverTaxNumber(string $receiverTaxNumber): ArasKargo
    {
        $this->receiverTaxNumber = $receiverTaxNumber;

        return $this;
    }

    /**
     * @param string $senderAddress
     * @return $this
     */
    public function setSenderAddress(string $senderAddress): ArasKargo
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    /**
     * @param string $senderAddressId
     * @return $this
     */
    public function setSenderAddressId(string $senderAddressId): ArasKargo
    {
        $this->senderAddressId = $senderAddressId;

        return $this;
    }

    /**
     * @param string $senderCityName
     * @return $this
     */
    public function setSenderCityName(string $senderCityName): ArasKargo
    {
        $this->senderCityName = $senderCityName;

        return $this;
    }

    /**
     * @param string $senderMobilePhone
     * @return $this
     */
    public function setSenderMobilePhone(string $senderMobilePhone): ArasKargo
    {
        $this->senderMobilePhone = $senderMobilePhone;

        return $this;
    }

    /**
     * @param string $senderName
     * @return $this
     */
    public function setSenderName(string $senderName): ArasKargo
    {
        $this->senderName = $senderName;

        return $this;
    }

    /**
     * @param string $senderPhoneNumber
     * @return $this
     */
    public function setSenderPhoneNumber(string $senderPhoneNumber): ArasKargo
    {
        $this->senderPhoneNumber = $senderPhoneNumber;

        return $this;
    }

    /**
     * @param string $senderTownName
     * @return $this
     */
    public function setSenderTownName(string $senderTownName): ArasKargo
    {
        $this->senderTownName = $senderTownName;

        return $this;
    }

    /**
     * @param string $senderTaxNumber
     * @return $this
     */
    public function setSenderTaxNumber(string $senderTaxNumber): ArasKargo
    {
        $this->senderTaxNumber = $senderTaxNumber;

        return $this;
    }


    /**
     * @throws SoapFault
     */
    function __construct()
    {
        if (!class_exists('SoapClient')) {
            echo 'SoapClient Not Fount';
            exit;
        }

        if ($this->testMode == false) {
            $url = $this->liveRequest;
        } else {
            $url = $this->testRequest;
        }

        $this->soapClient = new SoapClient($url);
    }

    /**
     * @return stdClass
     */
    function createArasMPOrder(): stdClass
    {
        $data = [
            'customerInfo' => [
                'CustomerCode' => $this->customerCode,
                'Password'     => $this->password,
                'UserName'     => $this->username,
            ],
            'model' => [
                'CodeExpireDate'     => $this->codeExpireDate,
                'ConfigurationId'    => $this->configurationId,
                'ExtServiceCodeList' => [
                    'string' => 'AT'
                ],
                'IntegrationCode'      => $this->integrationCode,
                'LovCollectionType'    => $this->lovCollectionType,
                'LovPayOrType'         => $this->lovPayOrType,
                'MainServiceCode'      => $this->mainServiceCode,
                'PieceCount'           => $this->pieceCount,
                'TradingWaybillNumber' => $this->tradingWaybillNumber,
                'Volume'               => $this->volume,
                'Weight'               => $this->weight,
                'ReceiverAddressInfo' => [
                    'Address'     => $this->receiverAddress,
                    'AddressId'   => $this->receiverAddressId,
                    'CityName'    => $this->receiverCityName,
                    'MobilePhone' => $this->receiverMobilePhone,
                    'Name'        => $this->receiverName,
                    'PhoneNumber' => $this->receiverPhoneNumber,
                    'TaxNumber'   => $this->receiverTaxNumber ?? '',
                    'TownName'    => $this->receiverTownName,
                ],
                'SenderAddressInfo' => [
                    'Address'     => $this->senderAddress,
                    'AddressId'   => $this->senderAddressId,
                    'CityName'    => $this->senderCityName,
                    'Name'        => $this->senderName,
                    'PhoneNumber' => $this->senderPhoneNumber,
                    'TaxNumber'   => $this->senderTaxNumber ?? '',
                    'TownName'    => $this->senderTownName,
                ]
            ]
        ];

        try {
            return $this->soapClient->ArasMPOrder($data)->ArasMPOrderResult;
        } catch (Exception $e) {
            $object = new stdClass();
            $object->Result = -100;
            $object->Description = $e->getMessage();

            return $object;
        }
    }
}