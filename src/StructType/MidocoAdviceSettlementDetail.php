<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdviceSettlementDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAdviceSettlementDetail extends AdviceSettlemDetailDTO
{
    /**
     * The MidocoAdviceDetailVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceDetailVatDiv
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv[]
     */
    protected ?array $MidocoAdviceDetailVatDiv = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * Constructor method for MidocoAdviceSettlementDetail
     * @uses MidocoAdviceSettlementDetail::setMidocoAdviceDetailVatDiv()
     * @uses MidocoAdviceSettlementDetail::setOrderNo()
     * @uses MidocoAdviceSettlementDetail::setItemType()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     * @param int $orderNo
     * @param string $itemType
     */
    public function __construct(?array $midocoAdviceDetailVatDiv = null, ?int $orderNo = null, ?string $itemType = null)
    {
        $this
            ->setMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv)
            ->setOrderNo($orderNo)
            ->setItemType($itemType);
    }
    /**
     * Get MidocoAdviceDetailVatDiv value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv[]
     */
    public function getMidocoAdviceDetailVatDiv(): ?array
    {
        return $this->MidocoAdviceDetailVatDiv;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdviceDetailVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceDetailVatDiv method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceDetailVatDivForArrayConstraintFromSetMidocoAdviceDetailVatDiv(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) {
            // validation for constraint: itemType
            if (!$midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv) {
                $invalidValues[] = is_object($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) ? get_class($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem) : sprintf('%s(%s)', gettype($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem), var_export($midocoAdviceSettlementDetailMidocoAdviceDetailVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv[] $midocoAdviceDetailVatDiv
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAdviceSettlementDetail
     */
    public function setMidocoAdviceDetailVatDiv(?array $midocoAdviceDetailVatDiv = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceDetailVatDivArrayErrorMessage = self::validateMidocoAdviceDetailVatDivForArrayConstraintFromSetMidocoAdviceDetailVatDiv($midocoAdviceDetailVatDiv))) {
            throw new InvalidArgumentException($midocoAdviceDetailVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv = $midocoAdviceDetailVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceDetailVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAdviceSettlementDetail
     */
    public function addToMidocoAdviceDetailVatDiv(\Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceDetailVatDiv property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoAdviceDetailVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceDetailVatDiv[] = $item;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAdviceSettlementDetail
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
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoAdviceSettlementDetail
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
}
