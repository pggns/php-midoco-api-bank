<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionJournalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionJournalDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The bookingInitiator
     * @var string|null
     */
    protected ?string $bookingInitiator = null;
    /**
     * The bookingUser
     * @var int|null
     */
    protected ?int $bookingUser = null;
    /**
     * The carCity
     * @var string|null
     */
    protected ?string $carCity = null;
    /**
     * The carCityCode
     * @var string|null
     */
    protected ?string $carCityCode = null;
    /**
     * The carPickupDate
     * @var string|null
     */
    protected ?string $carPickupDate = null;
    /**
     * The carReturnDate
     * @var string|null
     */
    protected ?string $carReturnDate = null;
    /**
     * The carSupplier
     * @var string|null
     */
    protected ?string $carSupplier = null;
    /**
     * The carType
     * @var string|null
     */
    protected ?string $carType = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The ccNoCustomer
     * @var string|null
     */
    protected ?string $ccNoCustomer = null;
    /**
     * The ccTypeCustomer
     * @var string|null
     */
    protected ?string $ccTypeCustomer = null;
    /**
     * The changingUser
     * @var int|null
     */
    protected ?int $changingUser = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The departure
     * @var string|null
     */
    protected ?string $departure = null;
    /**
     * The depositAmount
     * @var float|null
     */
    protected ?float $depositAmount = null;
    /**
     * The depositDate
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The domesticIndicator
     * @var string|null
     */
    protected ?string $domesticIndicator = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The exchangeTicketno
     * @var string|null
     */
    protected ?string $exchangeTicketno = null;
    /**
     * The externalSystem
     * @var string|null
     */
    protected ?string $externalSystem = null;
    /**
     * The fare
     * @var float|null
     */
    protected ?float $fare = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeDescription
     * @var string|null
     */
    protected ?string $feeDescription = null;
    /**
     * The feeReferenceItem
     * @var int|null
     */
    protected ?int $feeReferenceItem = null;
    /**
     * The finalPaymentAmount
     * @var float|null
     */
    protected ?float $finalPaymentAmount = null;
    /**
     * The finalPaymentDate
     * @var string|null
     */
    protected ?string $finalPaymentDate = null;
    /**
     * The hotelAddress1
     * @var string|null
     */
    protected ?string $hotelAddress1 = null;
    /**
     * The hotelAddress2
     * @var string|null
     */
    protected ?string $hotelAddress2 = null;
    /**
     * The hotelAddress3
     * @var string|null
     */
    protected ?string $hotelAddress3 = null;
    /**
     * The hotelAirportCode
     * @var string|null
     */
    protected ?string $hotelAirportCode = null;
    /**
     * The hotelChain
     * @var string|null
     */
    protected ?string $hotelChain = null;
    /**
     * The hotelCheckInDate
     * @var string|null
     */
    protected ?string $hotelCheckInDate = null;
    /**
     * The hotelCheckOutDate
     * @var string|null
     */
    protected ?string $hotelCheckOutDate = null;
    /**
     * The hotelLocationDescription
     * @var string|null
     */
    protected ?string $hotelLocationDescription = null;
    /**
     * The hotelName
     * @var string|null
     */
    protected ?string $hotelName = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The invoiceCurrency
     * @var string|null
     */
    protected ?string $invoiceCurrency = null;
    /**
     * The invoiceFare
     * @var float|null
     */
    protected ?float $invoiceFare = null;
    /**
     * The invoiceInkassoPrice
     * @var float|null
     */
    protected ?float $invoiceInkassoPrice = null;
    /**
     * The invoiceItemPrice
     * @var float|null
     */
    protected ?float $invoiceItemPrice = null;
    /**
     * The invoiceTotaltax
     * @var float|null
     */
    protected ?float $invoiceTotaltax = null;
    /**
     * The isHiddenFee
     * @var bool|null
     */
    protected ?bool $isHiddenFee = null;
    /**
     * The isVoid
     * @var bool|null
     */
    protected ?bool $isVoid = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The margin
     * @var float|null
     */
    protected ?float $margin = null;
    /**
     * The noOfNights
     * @var int|null
     */
    protected ?int $noOfNights = null;
    /**
     * The noOfServices
     * @var string|null
     */
    protected ?string $noOfServices = null;
    /**
     * The orderCreationDate
     * @var string|null
     */
    protected ?string $orderCreationDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The personsPerService
     * @var int|null
     */
    protected ?int $personsPerService = null;
    /**
     * The recordLocator
     * @var string|null
     */
    protected ?string $recordLocator = null;
    /**
     * The routing
     * @var string|null
     */
    protected ?string $routing = null;
    /**
     * The salesCurrency
     * @var string|null
     */
    protected ?string $salesCurrency = null;
    /**
     * The salesFare
     * @var float|null
     */
    protected ?float $salesFare = null;
    /**
     * The salesInkassoPrice
     * @var float|null
     */
    protected ?float $salesInkassoPrice = null;
    /**
     * The salesPrice
     * @var float|null
     */
    protected ?float $salesPrice = null;
    /**
     * The salesTax
     * @var float|null
     */
    protected ?float $salesTax = null;
    /**
     * The savingsAccepted
     * @var float|null
     */
    protected ?float $savingsAccepted = null;
    /**
     * The savingsCode
     * @var string|null
     */
    protected ?string $savingsCode = null;
    /**
     * The savingsCode2
     * @var string|null
     */
    protected ?string $savingsCode2 = null;
    /**
     * The savingsHigh
     * @var float|null
     */
    protected ?float $savingsHigh = null;
    /**
     * The savingsLow
     * @var float|null
     */
    protected ?float $savingsLow = null;
    /**
     * The savingsMissed
     * @var float|null
     */
    protected ?float $savingsMissed = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The tax
     * @var float|null
     */
    protected ?float $tax = null;
    /**
     * The ticketDesignator
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The ticketingAgent
     * @var string|null
     */
    protected ?string $ticketingAgent = null;
    /**
     * The tourcode
     * @var string|null
     */
    protected ?string $tourcode = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The transactionRecordId
     * @var int|null
     */
    protected ?int $transactionRecordId = null;
    /**
     * The travellerFirstname
     * @var string|null
     */
    protected ?string $travellerFirstname = null;
    /**
     * The travellerLastname
     * @var string|null
     */
    protected ?string $travellerLastname = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for TransactionJournalDTO
     * @uses TransactionJournalDTO::setAgencyId()
     * @uses TransactionJournalDTO::setBookingDate()
     * @uses TransactionJournalDTO::setBookingId()
     * @uses TransactionJournalDTO::setBookingInitiator()
     * @uses TransactionJournalDTO::setBookingUser()
     * @uses TransactionJournalDTO::setCarCity()
     * @uses TransactionJournalDTO::setCarCityCode()
     * @uses TransactionJournalDTO::setCarPickupDate()
     * @uses TransactionJournalDTO::setCarReturnDate()
     * @uses TransactionJournalDTO::setCarSupplier()
     * @uses TransactionJournalDTO::setCarType()
     * @uses TransactionJournalDTO::setCarrier()
     * @uses TransactionJournalDTO::setCcNoCustomer()
     * @uses TransactionJournalDTO::setCcTypeCustomer()
     * @uses TransactionJournalDTO::setChangingUser()
     * @uses TransactionJournalDTO::setCommissionAmount()
     * @uses TransactionJournalDTO::setCostCentre()
     * @uses TransactionJournalDTO::setCountry()
     * @uses TransactionJournalDTO::setCurrency()
     * @uses TransactionJournalDTO::setCustomerId()
     * @uses TransactionJournalDTO::setDebitorNo()
     * @uses TransactionJournalDTO::setDeparture()
     * @uses TransactionJournalDTO::setDepositAmount()
     * @uses TransactionJournalDTO::setDepositDate()
     * @uses TransactionJournalDTO::setDestination()
     * @uses TransactionJournalDTO::setDomesticIndicator()
     * @uses TransactionJournalDTO::setEndDate()
     * @uses TransactionJournalDTO::setExchangeTicketno()
     * @uses TransactionJournalDTO::setExternalSystem()
     * @uses TransactionJournalDTO::setFare()
     * @uses TransactionJournalDTO::setFeeCode()
     * @uses TransactionJournalDTO::setFeeDescription()
     * @uses TransactionJournalDTO::setFeeReferenceItem()
     * @uses TransactionJournalDTO::setFinalPaymentAmount()
     * @uses TransactionJournalDTO::setFinalPaymentDate()
     * @uses TransactionJournalDTO::setHotelAddress1()
     * @uses TransactionJournalDTO::setHotelAddress2()
     * @uses TransactionJournalDTO::setHotelAddress3()
     * @uses TransactionJournalDTO::setHotelAirportCode()
     * @uses TransactionJournalDTO::setHotelChain()
     * @uses TransactionJournalDTO::setHotelCheckInDate()
     * @uses TransactionJournalDTO::setHotelCheckOutDate()
     * @uses TransactionJournalDTO::setHotelLocationDescription()
     * @uses TransactionJournalDTO::setHotelName()
     * @uses TransactionJournalDTO::setInkassoPrice()
     * @uses TransactionJournalDTO::setInvoiceCurrency()
     * @uses TransactionJournalDTO::setInvoiceFare()
     * @uses TransactionJournalDTO::setInvoiceInkassoPrice()
     * @uses TransactionJournalDTO::setInvoiceItemPrice()
     * @uses TransactionJournalDTO::setInvoiceTotaltax()
     * @uses TransactionJournalDTO::setIsHiddenFee()
     * @uses TransactionJournalDTO::setIsVoid()
     * @uses TransactionJournalDTO::setItemId()
     * @uses TransactionJournalDTO::setItemPrice()
     * @uses TransactionJournalDTO::setItemType()
     * @uses TransactionJournalDTO::setMargin()
     * @uses TransactionJournalDTO::setNoOfNights()
     * @uses TransactionJournalDTO::setNoOfServices()
     * @uses TransactionJournalDTO::setOrderCreationDate()
     * @uses TransactionJournalDTO::setOrderNo()
     * @uses TransactionJournalDTO::setPersonsPerService()
     * @uses TransactionJournalDTO::setRecordLocator()
     * @uses TransactionJournalDTO::setRouting()
     * @uses TransactionJournalDTO::setSalesCurrency()
     * @uses TransactionJournalDTO::setSalesFare()
     * @uses TransactionJournalDTO::setSalesInkassoPrice()
     * @uses TransactionJournalDTO::setSalesPrice()
     * @uses TransactionJournalDTO::setSalesTax()
     * @uses TransactionJournalDTO::setSavingsAccepted()
     * @uses TransactionJournalDTO::setSavingsCode()
     * @uses TransactionJournalDTO::setSavingsCode2()
     * @uses TransactionJournalDTO::setSavingsHigh()
     * @uses TransactionJournalDTO::setSavingsLow()
     * @uses TransactionJournalDTO::setSavingsMissed()
     * @uses TransactionJournalDTO::setStartDate()
     * @uses TransactionJournalDTO::setStatus()
     * @uses TransactionJournalDTO::setSupplierId()
     * @uses TransactionJournalDTO::setTax()
     * @uses TransactionJournalDTO::setTicketDesignator()
     * @uses TransactionJournalDTO::setTicketNo()
     * @uses TransactionJournalDTO::setTicketType()
     * @uses TransactionJournalDTO::setTicketingAgent()
     * @uses TransactionJournalDTO::setTourcode()
     * @uses TransactionJournalDTO::setTransactionId()
     * @uses TransactionJournalDTO::setTransactionRecordId()
     * @uses TransactionJournalDTO::setTravellerFirstname()
     * @uses TransactionJournalDTO::setTravellerLastname()
     * @uses TransactionJournalDTO::setUnitName()
     * @param string $agencyId
     * @param string $bookingDate
     * @param string $bookingId
     * @param string $bookingInitiator
     * @param int $bookingUser
     * @param string $carCity
     * @param string $carCityCode
     * @param string $carPickupDate
     * @param string $carReturnDate
     * @param string $carSupplier
     * @param string $carType
     * @param string $carrier
     * @param string $ccNoCustomer
     * @param string $ccTypeCustomer
     * @param int $changingUser
     * @param float $commissionAmount
     * @param string $costCentre
     * @param string $country
     * @param string $currency
     * @param int $customerId
     * @param string $debitorNo
     * @param string $departure
     * @param float $depositAmount
     * @param string $depositDate
     * @param string $destination
     * @param string $domesticIndicator
     * @param string $endDate
     * @param string $exchangeTicketno
     * @param string $externalSystem
     * @param float $fare
     * @param string $feeCode
     * @param string $feeDescription
     * @param int $feeReferenceItem
     * @param float $finalPaymentAmount
     * @param string $finalPaymentDate
     * @param string $hotelAddress1
     * @param string $hotelAddress2
     * @param string $hotelAddress3
     * @param string $hotelAirportCode
     * @param string $hotelChain
     * @param string $hotelCheckInDate
     * @param string $hotelCheckOutDate
     * @param string $hotelLocationDescription
     * @param string $hotelName
     * @param float $inkassoPrice
     * @param string $invoiceCurrency
     * @param float $invoiceFare
     * @param float $invoiceInkassoPrice
     * @param float $invoiceItemPrice
     * @param float $invoiceTotaltax
     * @param bool $isHiddenFee
     * @param bool $isVoid
     * @param int $itemId
     * @param float $itemPrice
     * @param string $itemType
     * @param float $margin
     * @param int $noOfNights
     * @param string $noOfServices
     * @param string $orderCreationDate
     * @param int $orderNo
     * @param int $personsPerService
     * @param string $recordLocator
     * @param string $routing
     * @param string $salesCurrency
     * @param float $salesFare
     * @param float $salesInkassoPrice
     * @param float $salesPrice
     * @param float $salesTax
     * @param float $savingsAccepted
     * @param string $savingsCode
     * @param string $savingsCode2
     * @param float $savingsHigh
     * @param float $savingsLow
     * @param float $savingsMissed
     * @param string $startDate
     * @param string $status
     * @param string $supplierId
     * @param float $tax
     * @param string $ticketDesignator
     * @param string $ticketNo
     * @param string $ticketType
     * @param string $ticketingAgent
     * @param string $tourcode
     * @param int $transactionId
     * @param int $transactionRecordId
     * @param string $travellerFirstname
     * @param string $travellerLastname
     * @param string $unitName
     */
    public function __construct(?string $agencyId = null, ?string $bookingDate = null, ?string $bookingId = null, ?string $bookingInitiator = null, ?int $bookingUser = null, ?string $carCity = null, ?string $carCityCode = null, ?string $carPickupDate = null, ?string $carReturnDate = null, ?string $carSupplier = null, ?string $carType = null, ?string $carrier = null, ?string $ccNoCustomer = null, ?string $ccTypeCustomer = null, ?int $changingUser = null, ?float $commissionAmount = null, ?string $costCentre = null, ?string $country = null, ?string $currency = null, ?int $customerId = null, ?string $debitorNo = null, ?string $departure = null, ?float $depositAmount = null, ?string $depositDate = null, ?string $destination = null, ?string $domesticIndicator = null, ?string $endDate = null, ?string $exchangeTicketno = null, ?string $externalSystem = null, ?float $fare = null, ?string $feeCode = null, ?string $feeDescription = null, ?int $feeReferenceItem = null, ?float $finalPaymentAmount = null, ?string $finalPaymentDate = null, ?string $hotelAddress1 = null, ?string $hotelAddress2 = null, ?string $hotelAddress3 = null, ?string $hotelAirportCode = null, ?string $hotelChain = null, ?string $hotelCheckInDate = null, ?string $hotelCheckOutDate = null, ?string $hotelLocationDescription = null, ?string $hotelName = null, ?float $inkassoPrice = null, ?string $invoiceCurrency = null, ?float $invoiceFare = null, ?float $invoiceInkassoPrice = null, ?float $invoiceItemPrice = null, ?float $invoiceTotaltax = null, ?bool $isHiddenFee = null, ?bool $isVoid = null, ?int $itemId = null, ?float $itemPrice = null, ?string $itemType = null, ?float $margin = null, ?int $noOfNights = null, ?string $noOfServices = null, ?string $orderCreationDate = null, ?int $orderNo = null, ?int $personsPerService = null, ?string $recordLocator = null, ?string $routing = null, ?string $salesCurrency = null, ?float $salesFare = null, ?float $salesInkassoPrice = null, ?float $salesPrice = null, ?float $salesTax = null, ?float $savingsAccepted = null, ?string $savingsCode = null, ?string $savingsCode2 = null, ?float $savingsHigh = null, ?float $savingsLow = null, ?float $savingsMissed = null, ?string $startDate = null, ?string $status = null, ?string $supplierId = null, ?float $tax = null, ?string $ticketDesignator = null, ?string $ticketNo = null, ?string $ticketType = null, ?string $ticketingAgent = null, ?string $tourcode = null, ?int $transactionId = null, ?int $transactionRecordId = null, ?string $travellerFirstname = null, ?string $travellerLastname = null, ?string $unitName = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setBookingDate($bookingDate)
            ->setBookingId($bookingId)
            ->setBookingInitiator($bookingInitiator)
            ->setBookingUser($bookingUser)
            ->setCarCity($carCity)
            ->setCarCityCode($carCityCode)
            ->setCarPickupDate($carPickupDate)
            ->setCarReturnDate($carReturnDate)
            ->setCarSupplier($carSupplier)
            ->setCarType($carType)
            ->setCarrier($carrier)
            ->setCcNoCustomer($ccNoCustomer)
            ->setCcTypeCustomer($ccTypeCustomer)
            ->setChangingUser($changingUser)
            ->setCommissionAmount($commissionAmount)
            ->setCostCentre($costCentre)
            ->setCountry($country)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setDeparture($departure)
            ->setDepositAmount($depositAmount)
            ->setDepositDate($depositDate)
            ->setDestination($destination)
            ->setDomesticIndicator($domesticIndicator)
            ->setEndDate($endDate)
            ->setExchangeTicketno($exchangeTicketno)
            ->setExternalSystem($externalSystem)
            ->setFare($fare)
            ->setFeeCode($feeCode)
            ->setFeeDescription($feeDescription)
            ->setFeeReferenceItem($feeReferenceItem)
            ->setFinalPaymentAmount($finalPaymentAmount)
            ->setFinalPaymentDate($finalPaymentDate)
            ->setHotelAddress1($hotelAddress1)
            ->setHotelAddress2($hotelAddress2)
            ->setHotelAddress3($hotelAddress3)
            ->setHotelAirportCode($hotelAirportCode)
            ->setHotelChain($hotelChain)
            ->setHotelCheckInDate($hotelCheckInDate)
            ->setHotelCheckOutDate($hotelCheckOutDate)
            ->setHotelLocationDescription($hotelLocationDescription)
            ->setHotelName($hotelName)
            ->setInkassoPrice($inkassoPrice)
            ->setInvoiceCurrency($invoiceCurrency)
            ->setInvoiceFare($invoiceFare)
            ->setInvoiceInkassoPrice($invoiceInkassoPrice)
            ->setInvoiceItemPrice($invoiceItemPrice)
            ->setInvoiceTotaltax($invoiceTotaltax)
            ->setIsHiddenFee($isHiddenFee)
            ->setIsVoid($isVoid)
            ->setItemId($itemId)
            ->setItemPrice($itemPrice)
            ->setItemType($itemType)
            ->setMargin($margin)
            ->setNoOfNights($noOfNights)
            ->setNoOfServices($noOfServices)
            ->setOrderCreationDate($orderCreationDate)
            ->setOrderNo($orderNo)
            ->setPersonsPerService($personsPerService)
            ->setRecordLocator($recordLocator)
            ->setRouting($routing)
            ->setSalesCurrency($salesCurrency)
            ->setSalesFare($salesFare)
            ->setSalesInkassoPrice($salesInkassoPrice)
            ->setSalesPrice($salesPrice)
            ->setSalesTax($salesTax)
            ->setSavingsAccepted($savingsAccepted)
            ->setSavingsCode($savingsCode)
            ->setSavingsCode2($savingsCode2)
            ->setSavingsHigh($savingsHigh)
            ->setSavingsLow($savingsLow)
            ->setSavingsMissed($savingsMissed)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setTax($tax)
            ->setTicketDesignator($ticketDesignator)
            ->setTicketNo($ticketNo)
            ->setTicketType($ticketType)
            ->setTicketingAgent($ticketingAgent)
            ->setTourcode($tourcode)
            ->setTransactionId($transactionId)
            ->setTransactionRecordId($transactionRecordId)
            ->setTravellerFirstname($travellerFirstname)
            ->setTravellerLastname($travellerLastname)
            ->setUnitName($unitName);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get bookingInitiator value
     * @return string|null
     */
    public function getBookingInitiator(): ?string
    {
        return $this->bookingInitiator;
    }
    /**
     * Set bookingInitiator value
     * @param string $bookingInitiator
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setBookingInitiator(?string $bookingInitiator = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingInitiator) && !is_string($bookingInitiator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingInitiator, true), gettype($bookingInitiator)), __LINE__);
        }
        $this->bookingInitiator = $bookingInitiator;
        
        return $this;
    }
    /**
     * Get bookingUser value
     * @return int|null
     */
    public function getBookingUser(): ?int
    {
        return $this->bookingUser;
    }
    /**
     * Set bookingUser value
     * @param int $bookingUser
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setBookingUser(?int $bookingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingUser) && !(is_int($bookingUser) || ctype_digit($bookingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingUser, true), gettype($bookingUser)), __LINE__);
        }
        $this->bookingUser = $bookingUser;
        
        return $this;
    }
    /**
     * Get carCity value
     * @return string|null
     */
    public function getCarCity(): ?string
    {
        return $this->carCity;
    }
    /**
     * Set carCity value
     * @param string $carCity
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarCity(?string $carCity = null): self
    {
        // validation for constraint: string
        if (!is_null($carCity) && !is_string($carCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carCity, true), gettype($carCity)), __LINE__);
        }
        $this->carCity = $carCity;
        
        return $this;
    }
    /**
     * Get carCityCode value
     * @return string|null
     */
    public function getCarCityCode(): ?string
    {
        return $this->carCityCode;
    }
    /**
     * Set carCityCode value
     * @param string $carCityCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarCityCode(?string $carCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carCityCode) && !is_string($carCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carCityCode, true), gettype($carCityCode)), __LINE__);
        }
        $this->carCityCode = $carCityCode;
        
        return $this;
    }
    /**
     * Get carPickupDate value
     * @return string|null
     */
    public function getCarPickupDate(): ?string
    {
        return $this->carPickupDate;
    }
    /**
     * Set carPickupDate value
     * @param string $carPickupDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarPickupDate(?string $carPickupDate = null): self
    {
        // validation for constraint: string
        if (!is_null($carPickupDate) && !is_string($carPickupDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carPickupDate, true), gettype($carPickupDate)), __LINE__);
        }
        $this->carPickupDate = $carPickupDate;
        
        return $this;
    }
    /**
     * Get carReturnDate value
     * @return string|null
     */
    public function getCarReturnDate(): ?string
    {
        return $this->carReturnDate;
    }
    /**
     * Set carReturnDate value
     * @param string $carReturnDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarReturnDate(?string $carReturnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($carReturnDate) && !is_string($carReturnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carReturnDate, true), gettype($carReturnDate)), __LINE__);
        }
        $this->carReturnDate = $carReturnDate;
        
        return $this;
    }
    /**
     * Get carSupplier value
     * @return string|null
     */
    public function getCarSupplier(): ?string
    {
        return $this->carSupplier;
    }
    /**
     * Set carSupplier value
     * @param string $carSupplier
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarSupplier(?string $carSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($carSupplier) && !is_string($carSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carSupplier, true), gettype($carSupplier)), __LINE__);
        }
        $this->carSupplier = $carSupplier;
        
        return $this;
    }
    /**
     * Get carType value
     * @return string|null
     */
    public function getCarType(): ?string
    {
        return $this->carType;
    }
    /**
     * Set carType value
     * @param string $carType
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarType(?string $carType = null): self
    {
        // validation for constraint: string
        if (!is_null($carType) && !is_string($carType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carType, true), gettype($carType)), __LINE__);
        }
        $this->carType = $carType;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get ccNoCustomer value
     * @return string|null
     */
    public function getCcNoCustomer(): ?string
    {
        return $this->ccNoCustomer;
    }
    /**
     * Set ccNoCustomer value
     * @param string $ccNoCustomer
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCcNoCustomer(?string $ccNoCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNoCustomer) && !is_string($ccNoCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNoCustomer, true), gettype($ccNoCustomer)), __LINE__);
        }
        $this->ccNoCustomer = $ccNoCustomer;
        
        return $this;
    }
    /**
     * Get ccTypeCustomer value
     * @return string|null
     */
    public function getCcTypeCustomer(): ?string
    {
        return $this->ccTypeCustomer;
    }
    /**
     * Set ccTypeCustomer value
     * @param string $ccTypeCustomer
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCcTypeCustomer(?string $ccTypeCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTypeCustomer) && !is_string($ccTypeCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTypeCustomer, true), gettype($ccTypeCustomer)), __LINE__);
        }
        $this->ccTypeCustomer = $ccTypeCustomer;
        
        return $this;
    }
    /**
     * Get changingUser value
     * @return int|null
     */
    public function getChangingUser(): ?int
    {
        return $this->changingUser;
    }
    /**
     * Set changingUser value
     * @param int $changingUser
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setChangingUser(?int $changingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($changingUser) && !(is_int($changingUser) || ctype_digit($changingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changingUser, true), gettype($changingUser)), __LINE__);
        }
        $this->changingUser = $changingUser;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get departure value
     * @return string|null
     */
    public function getDeparture(): ?string
    {
        return $this->departure;
    }
    /**
     * Set departure value
     * @param string $departure
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDeparture(?string $departure = null): self
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departure, true), gettype($departure)), __LINE__);
        }
        $this->departure = $departure;
        
        return $this;
    }
    /**
     * Get depositAmount value
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }
    /**
     * Set depositAmount value
     * @param float $depositAmount
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDepositAmount(?float $depositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositAmount) && !(is_float($depositAmount) || is_numeric($depositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositAmount, true), gettype($depositAmount)), __LINE__);
        }
        $this->depositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get domesticIndicator value
     * @return string|null
     */
    public function getDomesticIndicator(): ?string
    {
        return $this->domesticIndicator;
    }
    /**
     * Set domesticIndicator value
     * @param string $domesticIndicator
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setDomesticIndicator(?string $domesticIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($domesticIndicator) && !is_string($domesticIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domesticIndicator, true), gettype($domesticIndicator)), __LINE__);
        }
        $this->domesticIndicator = $domesticIndicator;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get exchangeTicketno value
     * @return string|null
     */
    public function getExchangeTicketno(): ?string
    {
        return $this->exchangeTicketno;
    }
    /**
     * Set exchangeTicketno value
     * @param string $exchangeTicketno
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setExchangeTicketno(?string $exchangeTicketno = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeTicketno) && !is_string($exchangeTicketno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeTicketno, true), gettype($exchangeTicketno)), __LINE__);
        }
        $this->exchangeTicketno = $exchangeTicketno;
        
        return $this;
    }
    /**
     * Get externalSystem value
     * @return string|null
     */
    public function getExternalSystem(): ?string
    {
        return $this->externalSystem;
    }
    /**
     * Set externalSystem value
     * @param string $externalSystem
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setExternalSystem(?string $externalSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($externalSystem) && !is_string($externalSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalSystem, true), gettype($externalSystem)), __LINE__);
        }
        $this->externalSystem = $externalSystem;
        
        return $this;
    }
    /**
     * Get fare value
     * @return float|null
     */
    public function getFare(): ?float
    {
        return $this->fare;
    }
    /**
     * Set fare value
     * @param float $fare
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFare(?float $fare = null): self
    {
        // validation for constraint: float
        if (!is_null($fare) && !(is_float($fare) || is_numeric($fare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fare, true), gettype($fare)), __LINE__);
        }
        $this->fare = $fare;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get feeDescription value
     * @return string|null
     */
    public function getFeeDescription(): ?string
    {
        return $this->feeDescription;
    }
    /**
     * Set feeDescription value
     * @param string $feeDescription
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFeeDescription(?string $feeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeDescription, true), gettype($feeDescription)), __LINE__);
        }
        $this->feeDescription = $feeDescription;
        
        return $this;
    }
    /**
     * Get feeReferenceItem value
     * @return int|null
     */
    public function getFeeReferenceItem(): ?int
    {
        return $this->feeReferenceItem;
    }
    /**
     * Set feeReferenceItem value
     * @param int $feeReferenceItem
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFeeReferenceItem(?int $feeReferenceItem = null): self
    {
        // validation for constraint: int
        if (!is_null($feeReferenceItem) && !(is_int($feeReferenceItem) || ctype_digit($feeReferenceItem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeReferenceItem, true), gettype($feeReferenceItem)), __LINE__);
        }
        $this->feeReferenceItem = $feeReferenceItem;
        
        return $this;
    }
    /**
     * Get finalPaymentAmount value
     * @return float|null
     */
    public function getFinalPaymentAmount(): ?float
    {
        return $this->finalPaymentAmount;
    }
    /**
     * Set finalPaymentAmount value
     * @param float $finalPaymentAmount
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFinalPaymentAmount(?float $finalPaymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($finalPaymentAmount) && !(is_float($finalPaymentAmount) || is_numeric($finalPaymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($finalPaymentAmount, true), gettype($finalPaymentAmount)), __LINE__);
        }
        $this->finalPaymentAmount = $finalPaymentAmount;
        
        return $this;
    }
    /**
     * Get finalPaymentDate value
     * @return string|null
     */
    public function getFinalPaymentDate(): ?string
    {
        return $this->finalPaymentDate;
    }
    /**
     * Set finalPaymentDate value
     * @param string $finalPaymentDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setFinalPaymentDate(?string $finalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentDate) && !is_string($finalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentDate, true), gettype($finalPaymentDate)), __LINE__);
        }
        $this->finalPaymentDate = $finalPaymentDate;
        
        return $this;
    }
    /**
     * Get hotelAddress1 value
     * @return string|null
     */
    public function getHotelAddress1(): ?string
    {
        return $this->hotelAddress1;
    }
    /**
     * Set hotelAddress1 value
     * @param string $hotelAddress1
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelAddress1(?string $hotelAddress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelAddress1) && !is_string($hotelAddress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelAddress1, true), gettype($hotelAddress1)), __LINE__);
        }
        $this->hotelAddress1 = $hotelAddress1;
        
        return $this;
    }
    /**
     * Get hotelAddress2 value
     * @return string|null
     */
    public function getHotelAddress2(): ?string
    {
        return $this->hotelAddress2;
    }
    /**
     * Set hotelAddress2 value
     * @param string $hotelAddress2
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelAddress2(?string $hotelAddress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelAddress2) && !is_string($hotelAddress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelAddress2, true), gettype($hotelAddress2)), __LINE__);
        }
        $this->hotelAddress2 = $hotelAddress2;
        
        return $this;
    }
    /**
     * Get hotelAddress3 value
     * @return string|null
     */
    public function getHotelAddress3(): ?string
    {
        return $this->hotelAddress3;
    }
    /**
     * Set hotelAddress3 value
     * @param string $hotelAddress3
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelAddress3(?string $hotelAddress3 = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelAddress3) && !is_string($hotelAddress3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelAddress3, true), gettype($hotelAddress3)), __LINE__);
        }
        $this->hotelAddress3 = $hotelAddress3;
        
        return $this;
    }
    /**
     * Get hotelAirportCode value
     * @return string|null
     */
    public function getHotelAirportCode(): ?string
    {
        return $this->hotelAirportCode;
    }
    /**
     * Set hotelAirportCode value
     * @param string $hotelAirportCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelAirportCode(?string $hotelAirportCode = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelAirportCode) && !is_string($hotelAirportCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelAirportCode, true), gettype($hotelAirportCode)), __LINE__);
        }
        $this->hotelAirportCode = $hotelAirportCode;
        
        return $this;
    }
    /**
     * Get hotelChain value
     * @return string|null
     */
    public function getHotelChain(): ?string
    {
        return $this->hotelChain;
    }
    /**
     * Set hotelChain value
     * @param string $hotelChain
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelChain(?string $hotelChain = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelChain) && !is_string($hotelChain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelChain, true), gettype($hotelChain)), __LINE__);
        }
        $this->hotelChain = $hotelChain;
        
        return $this;
    }
    /**
     * Get hotelCheckInDate value
     * @return string|null
     */
    public function getHotelCheckInDate(): ?string
    {
        return $this->hotelCheckInDate;
    }
    /**
     * Set hotelCheckInDate value
     * @param string $hotelCheckInDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelCheckInDate(?string $hotelCheckInDate = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCheckInDate) && !is_string($hotelCheckInDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCheckInDate, true), gettype($hotelCheckInDate)), __LINE__);
        }
        $this->hotelCheckInDate = $hotelCheckInDate;
        
        return $this;
    }
    /**
     * Get hotelCheckOutDate value
     * @return string|null
     */
    public function getHotelCheckOutDate(): ?string
    {
        return $this->hotelCheckOutDate;
    }
    /**
     * Set hotelCheckOutDate value
     * @param string $hotelCheckOutDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelCheckOutDate(?string $hotelCheckOutDate = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelCheckOutDate) && !is_string($hotelCheckOutDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelCheckOutDate, true), gettype($hotelCheckOutDate)), __LINE__);
        }
        $this->hotelCheckOutDate = $hotelCheckOutDate;
        
        return $this;
    }
    /**
     * Get hotelLocationDescription value
     * @return string|null
     */
    public function getHotelLocationDescription(): ?string
    {
        return $this->hotelLocationDescription;
    }
    /**
     * Set hotelLocationDescription value
     * @param string $hotelLocationDescription
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelLocationDescription(?string $hotelLocationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelLocationDescription) && !is_string($hotelLocationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelLocationDescription, true), gettype($hotelLocationDescription)), __LINE__);
        }
        $this->hotelLocationDescription = $hotelLocationDescription;
        
        return $this;
    }
    /**
     * Get hotelName value
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }
    /**
     * Set hotelName value
     * @param string $hotelName
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setHotelName(?string $hotelName = null): self
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hotelName, true), gettype($hotelName)), __LINE__);
        }
        $this->hotelName = $hotelName;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
        return $this;
    }
    /**
     * Get invoiceCurrency value
     * @return string|null
     */
    public function getInvoiceCurrency(): ?string
    {
        return $this->invoiceCurrency;
    }
    /**
     * Set invoiceCurrency value
     * @param string $invoiceCurrency
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInvoiceCurrency(?string $invoiceCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceCurrency) && !is_string($invoiceCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceCurrency, true), gettype($invoiceCurrency)), __LINE__);
        }
        $this->invoiceCurrency = $invoiceCurrency;
        
        return $this;
    }
    /**
     * Get invoiceFare value
     * @return float|null
     */
    public function getInvoiceFare(): ?float
    {
        return $this->invoiceFare;
    }
    /**
     * Set invoiceFare value
     * @param float $invoiceFare
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInvoiceFare(?float $invoiceFare = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceFare) && !(is_float($invoiceFare) || is_numeric($invoiceFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceFare, true), gettype($invoiceFare)), __LINE__);
        }
        $this->invoiceFare = $invoiceFare;
        
        return $this;
    }
    /**
     * Get invoiceInkassoPrice value
     * @return float|null
     */
    public function getInvoiceInkassoPrice(): ?float
    {
        return $this->invoiceInkassoPrice;
    }
    /**
     * Set invoiceInkassoPrice value
     * @param float $invoiceInkassoPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInvoiceInkassoPrice(?float $invoiceInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceInkassoPrice) && !(is_float($invoiceInkassoPrice) || is_numeric($invoiceInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceInkassoPrice, true), gettype($invoiceInkassoPrice)), __LINE__);
        }
        $this->invoiceInkassoPrice = $invoiceInkassoPrice;
        
        return $this;
    }
    /**
     * Get invoiceItemPrice value
     * @return float|null
     */
    public function getInvoiceItemPrice(): ?float
    {
        return $this->invoiceItemPrice;
    }
    /**
     * Set invoiceItemPrice value
     * @param float $invoiceItemPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInvoiceItemPrice(?float $invoiceItemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceItemPrice) && !(is_float($invoiceItemPrice) || is_numeric($invoiceItemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceItemPrice, true), gettype($invoiceItemPrice)), __LINE__);
        }
        $this->invoiceItemPrice = $invoiceItemPrice;
        
        return $this;
    }
    /**
     * Get invoiceTotaltax value
     * @return float|null
     */
    public function getInvoiceTotaltax(): ?float
    {
        return $this->invoiceTotaltax;
    }
    /**
     * Set invoiceTotaltax value
     * @param float $invoiceTotaltax
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setInvoiceTotaltax(?float $invoiceTotaltax = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceTotaltax) && !(is_float($invoiceTotaltax) || is_numeric($invoiceTotaltax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceTotaltax, true), gettype($invoiceTotaltax)), __LINE__);
        }
        $this->invoiceTotaltax = $invoiceTotaltax;
        
        return $this;
    }
    /**
     * Get isHiddenFee value
     * @return bool|null
     */
    public function getIsHiddenFee(): ?bool
    {
        return $this->isHiddenFee;
    }
    /**
     * Set isHiddenFee value
     * @param bool $isHiddenFee
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setIsHiddenFee(?bool $isHiddenFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHiddenFee) && !is_bool($isHiddenFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHiddenFee, true), gettype($isHiddenFee)), __LINE__);
        }
        $this->isHiddenFee = $isHiddenFee;
        
        return $this;
    }
    /**
     * Get isVoid value
     * @return bool|null
     */
    public function getIsVoid(): ?bool
    {
        return $this->isVoid;
    }
    /**
     * Set isVoid value
     * @param bool $isVoid
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setIsVoid(?bool $isVoid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoid) && !is_bool($isVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoid, true), gettype($isVoid)), __LINE__);
        }
        $this->isVoid = $isVoid;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get margin value
     * @return float|null
     */
    public function getMargin(): ?float
    {
        return $this->margin;
    }
    /**
     * Set margin value
     * @param float $margin
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setMargin(?float $margin = null): self
    {
        // validation for constraint: float
        if (!is_null($margin) && !(is_float($margin) || is_numeric($margin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($margin, true), gettype($margin)), __LINE__);
        }
        $this->margin = $margin;
        
        return $this;
    }
    /**
     * Get noOfNights value
     * @return int|null
     */
    public function getNoOfNights(): ?int
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param int $noOfNights
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setNoOfNights(?int $noOfNights = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfNights) && !(is_int($noOfNights) || ctype_digit($noOfNights))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get noOfServices value
     * @return string|null
     */
    public function getNoOfServices(): ?string
    {
        return $this->noOfServices;
    }
    /**
     * Set noOfServices value
     * @param string $noOfServices
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setNoOfServices(?string $noOfServices = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfServices) && !is_string($noOfServices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfServices, true), gettype($noOfServices)), __LINE__);
        }
        $this->noOfServices = $noOfServices;
        
        return $this;
    }
    /**
     * Get orderCreationDate value
     * @return string|null
     */
    public function getOrderCreationDate(): ?string
    {
        return $this->orderCreationDate;
    }
    /**
     * Set orderCreationDate value
     * @param string $orderCreationDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setOrderCreationDate(?string $orderCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderCreationDate) && !is_string($orderCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderCreationDate, true), gettype($orderCreationDate)), __LINE__);
        }
        $this->orderCreationDate = $orderCreationDate;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get personsPerService value
     * @return int|null
     */
    public function getPersonsPerService(): ?int
    {
        return $this->personsPerService;
    }
    /**
     * Set personsPerService value
     * @param int $personsPerService
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setPersonsPerService(?int $personsPerService = null): self
    {
        // validation for constraint: int
        if (!is_null($personsPerService) && !(is_int($personsPerService) || ctype_digit($personsPerService))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personsPerService, true), gettype($personsPerService)), __LINE__);
        }
        $this->personsPerService = $personsPerService;
        
        return $this;
    }
    /**
     * Get recordLocator value
     * @return string|null
     */
    public function getRecordLocator(): ?string
    {
        return $this->recordLocator;
    }
    /**
     * Set recordLocator value
     * @param string $recordLocator
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setRecordLocator(?string $recordLocator = null): self
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordLocator, true), gettype($recordLocator)), __LINE__);
        }
        $this->recordLocator = $recordLocator;
        
        return $this;
    }
    /**
     * Get routing value
     * @return string|null
     */
    public function getRouting(): ?string
    {
        return $this->routing;
    }
    /**
     * Set routing value
     * @param string $routing
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setRouting(?string $routing = null): self
    {
        // validation for constraint: string
        if (!is_null($routing) && !is_string($routing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routing, true), gettype($routing)), __LINE__);
        }
        $this->routing = $routing;
        
        return $this;
    }
    /**
     * Get salesCurrency value
     * @return string|null
     */
    public function getSalesCurrency(): ?string
    {
        return $this->salesCurrency;
    }
    /**
     * Set salesCurrency value
     * @param string $salesCurrency
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSalesCurrency(?string $salesCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($salesCurrency) && !is_string($salesCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesCurrency, true), gettype($salesCurrency)), __LINE__);
        }
        $this->salesCurrency = $salesCurrency;
        
        return $this;
    }
    /**
     * Get salesFare value
     * @return float|null
     */
    public function getSalesFare(): ?float
    {
        return $this->salesFare;
    }
    /**
     * Set salesFare value
     * @param float $salesFare
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSalesFare(?float $salesFare = null): self
    {
        // validation for constraint: float
        if (!is_null($salesFare) && !(is_float($salesFare) || is_numeric($salesFare))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesFare, true), gettype($salesFare)), __LINE__);
        }
        $this->salesFare = $salesFare;
        
        return $this;
    }
    /**
     * Get salesInkassoPrice value
     * @return float|null
     */
    public function getSalesInkassoPrice(): ?float
    {
        return $this->salesInkassoPrice;
    }
    /**
     * Set salesInkassoPrice value
     * @param float $salesInkassoPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSalesInkassoPrice(?float $salesInkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salesInkassoPrice) && !(is_float($salesInkassoPrice) || is_numeric($salesInkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesInkassoPrice, true), gettype($salesInkassoPrice)), __LINE__);
        }
        $this->salesInkassoPrice = $salesInkassoPrice;
        
        return $this;
    }
    /**
     * Get salesPrice value
     * @return float|null
     */
    public function getSalesPrice(): ?float
    {
        return $this->salesPrice;
    }
    /**
     * Set salesPrice value
     * @param float $salesPrice
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSalesPrice(?float $salesPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salesPrice) && !(is_float($salesPrice) || is_numeric($salesPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesPrice, true), gettype($salesPrice)), __LINE__);
        }
        $this->salesPrice = $salesPrice;
        
        return $this;
    }
    /**
     * Get salesTax value
     * @return float|null
     */
    public function getSalesTax(): ?float
    {
        return $this->salesTax;
    }
    /**
     * Set salesTax value
     * @param float $salesTax
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSalesTax(?float $salesTax = null): self
    {
        // validation for constraint: float
        if (!is_null($salesTax) && !(is_float($salesTax) || is_numeric($salesTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesTax, true), gettype($salesTax)), __LINE__);
        }
        $this->salesTax = $salesTax;
        
        return $this;
    }
    /**
     * Get savingsAccepted value
     * @return float|null
     */
    public function getSavingsAccepted(): ?float
    {
        return $this->savingsAccepted;
    }
    /**
     * Set savingsAccepted value
     * @param float $savingsAccepted
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsAccepted(?float $savingsAccepted = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsAccepted) && !(is_float($savingsAccepted) || is_numeric($savingsAccepted))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsAccepted, true), gettype($savingsAccepted)), __LINE__);
        }
        $this->savingsAccepted = $savingsAccepted;
        
        return $this;
    }
    /**
     * Get savingsCode value
     * @return string|null
     */
    public function getSavingsCode(): ?string
    {
        return $this->savingsCode;
    }
    /**
     * Set savingsCode value
     * @param string $savingsCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsCode(?string $savingsCode = null): self
    {
        // validation for constraint: string
        if (!is_null($savingsCode) && !is_string($savingsCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savingsCode, true), gettype($savingsCode)), __LINE__);
        }
        $this->savingsCode = $savingsCode;
        
        return $this;
    }
    /**
     * Get savingsCode2 value
     * @return string|null
     */
    public function getSavingsCode2(): ?string
    {
        return $this->savingsCode2;
    }
    /**
     * Set savingsCode2 value
     * @param string $savingsCode2
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsCode2(?string $savingsCode2 = null): self
    {
        // validation for constraint: string
        if (!is_null($savingsCode2) && !is_string($savingsCode2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($savingsCode2, true), gettype($savingsCode2)), __LINE__);
        }
        $this->savingsCode2 = $savingsCode2;
        
        return $this;
    }
    /**
     * Get savingsHigh value
     * @return float|null
     */
    public function getSavingsHigh(): ?float
    {
        return $this->savingsHigh;
    }
    /**
     * Set savingsHigh value
     * @param float $savingsHigh
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsHigh(?float $savingsHigh = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsHigh) && !(is_float($savingsHigh) || is_numeric($savingsHigh))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsHigh, true), gettype($savingsHigh)), __LINE__);
        }
        $this->savingsHigh = $savingsHigh;
        
        return $this;
    }
    /**
     * Get savingsLow value
     * @return float|null
     */
    public function getSavingsLow(): ?float
    {
        return $this->savingsLow;
    }
    /**
     * Set savingsLow value
     * @param float $savingsLow
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsLow(?float $savingsLow = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsLow) && !(is_float($savingsLow) || is_numeric($savingsLow))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsLow, true), gettype($savingsLow)), __LINE__);
        }
        $this->savingsLow = $savingsLow;
        
        return $this;
    }
    /**
     * Get savingsMissed value
     * @return float|null
     */
    public function getSavingsMissed(): ?float
    {
        return $this->savingsMissed;
    }
    /**
     * Set savingsMissed value
     * @param float $savingsMissed
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSavingsMissed(?float $savingsMissed = null): self
    {
        // validation for constraint: float
        if (!is_null($savingsMissed) && !(is_float($savingsMissed) || is_numeric($savingsMissed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($savingsMissed, true), gettype($savingsMissed)), __LINE__);
        }
        $this->savingsMissed = $savingsMissed;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get tax value
     * @return float|null
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }
    /**
     * Set tax value
     * @param float $tax
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTax(?float $tax = null): self
    {
        // validation for constraint: float
        if (!is_null($tax) && !(is_float($tax) || is_numeric($tax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
        $this->tax = $tax;
        
        return $this;
    }
    /**
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get ticketingAgent value
     * @return string|null
     */
    public function getTicketingAgent(): ?string
    {
        return $this->ticketingAgent;
    }
    /**
     * Set ticketingAgent value
     * @param string $ticketingAgent
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTicketingAgent(?string $ticketingAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingAgent) && !is_string($ticketingAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingAgent, true), gettype($ticketingAgent)), __LINE__);
        }
        $this->ticketingAgent = $ticketingAgent;
        
        return $this;
    }
    /**
     * Get tourcode value
     * @return string|null
     */
    public function getTourcode(): ?string
    {
        return $this->tourcode;
    }
    /**
     * Set tourcode value
     * @param string $tourcode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTourcode(?string $tourcode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourcode) && !is_string($tourcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourcode, true), gettype($tourcode)), __LINE__);
        }
        $this->tourcode = $tourcode;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get transactionRecordId value
     * @return int|null
     */
    public function getTransactionRecordId(): ?int
    {
        return $this->transactionRecordId;
    }
    /**
     * Set transactionRecordId value
     * @param int $transactionRecordId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTransactionRecordId(?int $transactionRecordId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionRecordId) && !(is_int($transactionRecordId) || ctype_digit($transactionRecordId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionRecordId, true), gettype($transactionRecordId)), __LINE__);
        }
        $this->transactionRecordId = $transactionRecordId;
        
        return $this;
    }
    /**
     * Get travellerFirstname value
     * @return string|null
     */
    public function getTravellerFirstname(): ?string
    {
        return $this->travellerFirstname;
    }
    /**
     * Set travellerFirstname value
     * @param string $travellerFirstname
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTravellerFirstname(?string $travellerFirstname = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerFirstname) && !is_string($travellerFirstname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerFirstname, true), gettype($travellerFirstname)), __LINE__);
        }
        $this->travellerFirstname = $travellerFirstname;
        
        return $this;
    }
    /**
     * Get travellerLastname value
     * @return string|null
     */
    public function getTravellerLastname(): ?string
    {
        return $this->travellerLastname;
    }
    /**
     * Set travellerLastname value
     * @param string $travellerLastname
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setTravellerLastname(?string $travellerLastname = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerLastname) && !is_string($travellerLastname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerLastname, true), gettype($travellerLastname)), __LINE__);
        }
        $this->travellerLastname = $travellerLastname;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionJournalDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
