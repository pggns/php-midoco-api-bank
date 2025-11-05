<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPortalDocument StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPortalDocument extends AbstractStructBase
{
    /**
     * The documentDate
     * @var string|null
     */
    protected ?string $documentDate = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The documentName
     * @var string|null
     */
    protected ?string $documentName = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for MidocoPortalDocument
     * @uses MidocoPortalDocument::setDocumentDate()
     * @uses MidocoPortalDocument::setDocumentNo()
     * @uses MidocoPortalDocument::setDocumentType()
     * @uses MidocoPortalDocument::setDocumentName()
     * @uses MidocoPortalDocument::setTravellerName()
     * @uses MidocoPortalDocument::setTravelDate()
     * @uses MidocoPortalDocument::setBookingId()
     * @uses MidocoPortalDocument::setInvoicedAmount()
     * @uses MidocoPortalDocument::setPaymentType()
     * @uses MidocoPortalDocument::setUnitName()
     * @uses MidocoPortalDocument::setRepositoryId()
     * @param string $documentDate
     * @param string $documentNo
     * @param string $documentType
     * @param string $documentName
     * @param string $travellerName
     * @param string $travelDate
     * @param string $bookingId
     * @param float $invoicedAmount
     * @param string $paymentType
     * @param string $unitName
     * @param int $repositoryId
     */
    public function __construct(?string $documentDate = null, ?string $documentNo = null, ?string $documentType = null, ?string $documentName = null, ?string $travellerName = null, ?string $travelDate = null, ?string $bookingId = null, ?float $invoicedAmount = null, ?string $paymentType = null, ?string $unitName = null, ?int $repositoryId = null)
    {
        $this
            ->setDocumentDate($documentDate)
            ->setDocumentNo($documentNo)
            ->setDocumentType($documentType)
            ->setDocumentName($documentName)
            ->setTravellerName($travellerName)
            ->setTravelDate($travelDate)
            ->setBookingId($bookingId)
            ->setInvoicedAmount($invoicedAmount)
            ->setPaymentType($paymentType)
            ->setUnitName($unitName)
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get documentDate value
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * Set documentDate value
     * @param string $documentDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setDocumentDate(?string $documentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDate) && !is_string($documentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDate, true), gettype($documentDate)), __LINE__);
        }
        $this->documentDate = $documentDate;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get documentName value
     * @return string|null
     */
    public function getDocumentName(): ?string
    {
        return $this->documentName;
    }
    /**
     * Set documentName value
     * @param string $documentName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setDocumentName(?string $documentName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentName, true), gettype($documentName)), __LINE__);
        }
        $this->documentName = $documentName;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
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
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
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
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocument
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
