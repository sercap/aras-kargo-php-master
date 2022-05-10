<?php

require "vendor/autoload.php";

use Sercap\ArasKargoPhpMaster\ArasKargo;

$arasKargo = new ArasKargo();

$arasKargo->setTestMode(true)
    ->setTradingWaybillNumber(3792249)
    ->setVolume(5)
    ->setWeight(3)
    ->setCodeExpireDate('2022-01-22T02:36:50')
    ->setConfigurationId('EFC38C44F22A684F93403961D53E836E')
    ->setIntegrationCode(41773334)
    ->setLovCollectionType(1)
    ->setLovPayOrType(2)
    ->setMainServiceCode('STNK')
    ->setExtServiceCodeList('AT')
    ->setPieceCount(1)

    ->setReceiverAddress('test mah.  Aydın Sok. No:7')
    ->setReceiverAddressId('74A8D9AEC5E3B64682C3EDE658A6E663')
    ->setReceiverCityName('İSTANBUL')
    ->setReceiverMobilePhone('5555555555')
    ->setReceiverName('Berkay Kasnaklı')
    ->setReceiverPhoneNumber('02162162116')
    //->setReceiverTaxNumber('')
    ->setReceiverTownName('ÜMRANİYE')

    ->setSenderAddress('test mah.  Aydın Sok. No:7')
    ->setSenderAddressId('')
    ->setSenderCityName('İSTANBUL')
    ->setSenderMobilePhone('5555555555')
    ->setSenderName('Nedim Demirci')
    ->setSenderPhoneNumber('02165385562')
    //->setSenderTaxNumber('')
    ->setSenderTownName('GAZİOSMANPAŞA');

$a = $arasKargo->createArasMPOrder();