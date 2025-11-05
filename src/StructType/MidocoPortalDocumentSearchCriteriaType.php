<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPortalDocumentSearchCriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: specify document types to search for, valid contents are BILLING, ITINE, DRAFT, COLLECTIVE
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPortalDocumentSearchCriteriaType extends AbstractStructBase
{
    /**
     * The documentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $documentType;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The invoiceDateFrom
     * @var string|null
     */
    protected ?string $invoiceDateFrom = null;
    /**
     * The invoiceDateTo
     * @var string|null
     */
    protected ?string $invoiceDateTo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The projectNo
     * @var string|null
     */
    protected ?string $projectNo = null;
    /**
     * The travelNumber
     * @var string|null
     */
    protected ?string $travelNumber = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * Constructor method for MidocoPortalDocumentSearchCriteriaType
     * @uses MidocoPortalDocumentSearchCriteriaType::setDocumentType()
     * @uses MidocoPortalDocumentSearchCriteriaType::setBookingId()
     * @uses MidocoPortalDocumentSearchCriteriaType::setTicketNo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setTravellerName()
     * @uses MidocoPortalDocumentSearchCriteriaType::setTravelDateFrom()
     * @uses MidocoPortalDocumentSearchCriteriaType::setTravelDateTo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setInvoiceNo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setInvoiceDateFrom()
     * @uses MidocoPortalDocumentSearchCriteriaType::setInvoiceDateTo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setOrderNo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setProjectNo()
     * @uses MidocoPortalDocumentSearchCriteriaType::setTravelNumber()
     * @uses MidocoPortalDocumentSearchCriteriaType::setCreationDateFrom()
     * @uses MidocoPortalDocumentSearchCriteriaType::setCreationDateTo()
     * @param string[] $documentType
     * @param string $bookingId
     * @param string $ticketNo
     * @param string $travellerName
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param int $invoiceNo
     * @param string $invoiceDateFrom
     * @param string $invoiceDateTo
     * @param int $orderNo
     * @param string $projectNo
     * @param string $travelNumber
     * @param string $creationDateFrom
     * @param string $creationDateTo
     */
    public function __construct(array $documentType, ?string $bookingId = null, ?string $ticketNo = null, ?string $travellerName = null, ?string $travelDateFrom = null, ?string $travelDateTo = null, ?int $invoiceNo = null, ?string $invoiceDateFrom = null, ?string $invoiceDateTo = null, ?int $orderNo = null, ?string $projectNo = null, ?string $travelNumber = null, ?string $creationDateFrom = null, ?string $creationDateTo = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setBookingId($bookingId)
            ->setTicketNo($ticketNo)
            ->setTravellerName($travellerName)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setInvoiceNo($invoiceNo)
            ->setInvoiceDateFrom($invoiceDateFrom)
            ->setInvoiceDateTo($invoiceDateTo)
            ->setOrderNo($orderNo)
            ->setProjectNo($projectNo)
            ->setTravelNumber($travelNumber)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo);
    }
    /**
     * Get documentType value
     * @return string[]
     */
    public function getDocumentType(): array
    {
        return $this->documentType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentTypeForArrayConstraintFromSetDocumentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Bank\EnumType\DocumentType::valueIsValid($midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem)) {
                $invalidValues[] = is_object($midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem) ? get_class($midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem) : sprintf('%s(%s)', gettype($midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem), var_export($midocoPortalDocumentSearchCriteriaTypeDocumentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\DocumentType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\DocumentType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\DocumentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\DocumentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $documentType
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setDocumentType(array $documentType): self
    {
        // validation for constraint: array
        if ('' !== ($documentTypeArrayErrorMessage = self::validateDocumentTypeForArrayConstraintFromSetDocumentType($documentType))) {
            throw new InvalidArgumentException($documentTypeArrayErrorMessage, __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Add item to documentType value
     * @uses \Pggns\MidocoApi\Bank\EnumType\DocumentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Bank\EnumType\DocumentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function addToDocumentType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Bank\EnumType\DocumentType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Bank\EnumType\DocumentType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Bank\EnumType\DocumentType::getValidValues())), __LINE__);
        }
        $this->documentType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
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
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get invoiceDateFrom value
     * @return string|null
     */
    public function getInvoiceDateFrom(): ?string
    {
        return $this->invoiceDateFrom;
    }
    /**
     * Set invoiceDateFrom value
     * @param string $invoiceDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setInvoiceDateFrom(?string $invoiceDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateFrom) && !is_string($invoiceDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateFrom, true), gettype($invoiceDateFrom)), __LINE__);
        }
        $this->invoiceDateFrom = $invoiceDateFrom;
        
        return $this;
    }
    /**
     * Get invoiceDateTo value
     * @return string|null
     */
    public function getInvoiceDateTo(): ?string
    {
        return $this->invoiceDateTo;
    }
    /**
     * Set invoiceDateTo value
     * @param string $invoiceDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setInvoiceDateTo(?string $invoiceDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDateTo) && !is_string($invoiceDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDateTo, true), gettype($invoiceDateTo)), __LINE__);
        }
        $this->invoiceDateTo = $invoiceDateTo;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
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
     * Get projectNo value
     * @return string|null
     */
    public function getProjectNo(): ?string
    {
        return $this->projectNo;
    }
    /**
     * Set projectNo value
     * @param string $projectNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setProjectNo(?string $projectNo = null): self
    {
        // validation for constraint: string
        if (!is_null($projectNo) && !is_string($projectNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($projectNo, true), gettype($projectNo)), __LINE__);
        }
        $this->projectNo = $projectNo;
        
        return $this;
    }
    /**
     * Get travelNumber value
     * @return string|null
     */
    public function getTravelNumber(): ?string
    {
        return $this->travelNumber;
    }
    /**
     * Set travelNumber value
     * @param string $travelNumber
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setTravelNumber(?string $travelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNumber) && !is_string($travelNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNumber, true), gettype($travelNumber)), __LINE__);
        }
        $this->travelNumber = $travelNumber;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPortalDocumentSearchCriteriaType
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
}
