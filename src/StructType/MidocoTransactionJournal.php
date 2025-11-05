<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTransactionJournal StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTransactionJournal extends TransactionJournalDTO
{
    /**
     * The MidocoTransactionVat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransactionVat
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat[]
     */
    protected ?array $MidocoTransactionVat = null;
    /**
     * The transactionNo
     * @var int|null
     */
    protected ?int $transactionNo = null;
    /**
     * The transactionDate
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * The fullTicketNo
     * @var string|null
     */
    protected ?string $fullTicketNo = null;
    /**
     * Constructor method for MidocoTransactionJournal
     * @uses MidocoTransactionJournal::setMidocoTransactionVat()
     * @uses MidocoTransactionJournal::setTransactionNo()
     * @uses MidocoTransactionJournal::setTransactionDate()
     * @uses MidocoTransactionJournal::setFullTicketNo()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat[] $midocoTransactionVat
     * @param int $transactionNo
     * @param string $transactionDate
     * @param string $fullTicketNo
     */
    public function __construct(?array $midocoTransactionVat = null, ?int $transactionNo = null, ?string $transactionDate = null, ?string $fullTicketNo = null)
    {
        $this
            ->setMidocoTransactionVat($midocoTransactionVat)
            ->setTransactionNo($transactionNo)
            ->setTransactionDate($transactionDate)
            ->setFullTicketNo($fullTicketNo);
    }
    /**
     * Get MidocoTransactionVat value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat[]
     */
    public function getMidocoTransactionVat(): ?array
    {
        return $this->MidocoTransactionVat;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTransactionVat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransactionVat method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransactionVatForArrayConstraintFromSetMidocoTransactionVat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTransactionJournalMidocoTransactionVatItem) {
            // validation for constraint: itemType
            if (!$midocoTransactionJournalMidocoTransactionVatItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat) {
                $invalidValues[] = is_object($midocoTransactionJournalMidocoTransactionVatItem) ? get_class($midocoTransactionJournalMidocoTransactionVatItem) : sprintf('%s(%s)', gettype($midocoTransactionJournalMidocoTransactionVatItem), var_export($midocoTransactionJournalMidocoTransactionVatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransactionVat property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransactionVat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat[] $midocoTransactionVat
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionJournal
     */
    public function setMidocoTransactionVat(?array $midocoTransactionVat = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransactionVatArrayErrorMessage = self::validateMidocoTransactionVatForArrayConstraintFromSetMidocoTransactionVat($midocoTransactionVat))) {
            throw new InvalidArgumentException($midocoTransactionVatArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransactionVat = $midocoTransactionVat;
        
        return $this;
    }
    /**
     * Add item to MidocoTransactionVat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionJournal
     */
    public function addToMidocoTransactionVat(\Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat) {
            throw new InvalidArgumentException(sprintf('The MidocoTransactionVat property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransactionVat[] = $item;
        
        return $this;
    }
    /**
     * Get transactionNo value
     * @return int|null
     */
    public function getTransactionNo(): ?int
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param int $transactionNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionJournal
     */
    public function setTransactionNo(?int $transactionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNo) && !(is_int($transactionNo) || ctype_digit($transactionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionJournal
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
        return $this;
    }
    /**
     * Get fullTicketNo value
     * @return string|null
     */
    public function getFullTicketNo(): ?string
    {
        return $this->fullTicketNo;
    }
    /**
     * Set fullTicketNo value
     * @param string $fullTicketNo
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionJournal
     */
    public function setFullTicketNo(?string $fullTicketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($fullTicketNo) && !is_string($fullTicketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullTicketNo, true), gettype($fullTicketNo)), __LINE__);
        }
        $this->fullTicketNo = $fullTicketNo;
        
        return $this;
    }
}
