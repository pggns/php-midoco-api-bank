<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSegmentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionSegmentDTO extends AbstractStructBase
{
    /**
     * The arrivalDate
     * @var string|null
     */
    protected ?string $arrivalDate = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The bookingClass
     * @var string|null
     */
    protected ?string $bookingClass = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The domesticIndicator
     * @var string|null
     */
    protected ?string $domesticIndicator = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The miles
     * @var int|null
     */
    protected ?int $miles = null;
    /**
     * The segmentNo
     * @var int|null
     */
    protected ?int $segmentNo = null;
    /**
     * The stopIndicator
     * @var string|null
     */
    protected ?string $stopIndicator = null;
    /**
     * The ticketingAirline
     * @var string|null
     */
    protected ?string $ticketingAirline = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * Constructor method for TransactionSegmentDTO
     * @uses TransactionSegmentDTO::setArrivalDate()
     * @uses TransactionSegmentDTO::setArrivalTime()
     * @uses TransactionSegmentDTO::setBookingClass()
     * @uses TransactionSegmentDTO::setCarrier()
     * @uses TransactionSegmentDTO::setDepartureCode()
     * @uses TransactionSegmentDTO::setDepartureDate()
     * @uses TransactionSegmentDTO::setDepartureTime()
     * @uses TransactionSegmentDTO::setDestinationCode()
     * @uses TransactionSegmentDTO::setDomesticIndicator()
     * @uses TransactionSegmentDTO::setFlightNo()
     * @uses TransactionSegmentDTO::setMiles()
     * @uses TransactionSegmentDTO::setSegmentNo()
     * @uses TransactionSegmentDTO::setStopIndicator()
     * @uses TransactionSegmentDTO::setTicketingAirline()
     * @uses TransactionSegmentDTO::setTransactionId()
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $bookingClass
     * @param string $carrier
     * @param string $departureCode
     * @param string $departureDate
     * @param string $departureTime
     * @param string $destinationCode
     * @param string $domesticIndicator
     * @param string $flightNo
     * @param int $miles
     * @param int $segmentNo
     * @param string $stopIndicator
     * @param string $ticketingAirline
     * @param int $transactionId
     */
    public function __construct(?string $arrivalDate = null, ?string $arrivalTime = null, ?string $bookingClass = null, ?string $carrier = null, ?string $departureCode = null, ?string $departureDate = null, ?string $departureTime = null, ?string $destinationCode = null, ?string $domesticIndicator = null, ?string $flightNo = null, ?int $miles = null, ?int $segmentNo = null, ?string $stopIndicator = null, ?string $ticketingAirline = null, ?int $transactionId = null)
    {
        $this
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setBookingClass($bookingClass)
            ->setCarrier($carrier)
            ->setDepartureCode($departureCode)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setDestinationCode($destinationCode)
            ->setDomesticIndicator($domesticIndicator)
            ->setFlightNo($flightNo)
            ->setMiles($miles)
            ->setSegmentNo($segmentNo)
            ->setStopIndicator($stopIndicator)
            ->setTicketingAirline($ticketingAirline)
            ->setTransactionId($transactionId);
    }
    /**
     * Get arrivalDate value
     * @return string|null
     */
    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }
    /**
     * Set arrivalDate value
     * @param string $arrivalDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        $this->arrivalDate = $arrivalDate;
        
        return $this;
    }
    /**
     * Get arrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }
    /**
     * Set arrivalTime value
     * @param string $arrivalTime
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get bookingClass value
     * @return string|null
     */
    public function getBookingClass(): ?string
    {
        return $this->bookingClass;
    }
    /**
     * Set bookingClass value
     * @param string $bookingClass
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setBookingClass(?string $bookingClass = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingClass) && !is_string($bookingClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingClass, true), gettype($bookingClass)), __LINE__);
        }
        $this->bookingClass = $bookingClass;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
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
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
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
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get miles value
     * @return int|null
     */
    public function getMiles(): ?int
    {
        return $this->miles;
    }
    /**
     * Set miles value
     * @param int $miles
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setMiles(?int $miles = null): self
    {
        // validation for constraint: int
        if (!is_null($miles) && !(is_int($miles) || ctype_digit($miles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($miles, true), gettype($miles)), __LINE__);
        }
        $this->miles = $miles;
        
        return $this;
    }
    /**
     * Get segmentNo value
     * @return int|null
     */
    public function getSegmentNo(): ?int
    {
        return $this->segmentNo;
    }
    /**
     * Set segmentNo value
     * @param int $segmentNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setSegmentNo(?int $segmentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentNo) && !(is_int($segmentNo) || ctype_digit($segmentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentNo, true), gettype($segmentNo)), __LINE__);
        }
        $this->segmentNo = $segmentNo;
        
        return $this;
    }
    /**
     * Get stopIndicator value
     * @return string|null
     */
    public function getStopIndicator(): ?string
    {
        return $this->stopIndicator;
    }
    /**
     * Set stopIndicator value
     * @param string $stopIndicator
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setStopIndicator(?string $stopIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($stopIndicator) && !is_string($stopIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopIndicator, true), gettype($stopIndicator)), __LINE__);
        }
        $this->stopIndicator = $stopIndicator;
        
        return $this;
    }
    /**
     * Get ticketingAirline value
     * @return string|null
     */
    public function getTicketingAirline(): ?string
    {
        return $this->ticketingAirline;
    }
    /**
     * Set ticketingAirline value
     * @param string $ticketingAirline
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
     */
    public function setTicketingAirline(?string $ticketingAirline = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingAirline) && !is_string($ticketingAirline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingAirline, true), gettype($ticketingAirline)), __LINE__);
        }
        $this->ticketingAirline = $ticketingAirline;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionSegmentDTO
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
}
