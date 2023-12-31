<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersResponse StructType
 * @subpackage Structs
 */
class GetShortRemarkIdentifiersResponse extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark[]
     */
    protected array $MidocoTextRemark = [];
    /**
     * Constructor method for GetShortRemarkIdentifiersResponse
     * @uses GetShortRemarkIdentifiersResponse::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark[] $midocoTextRemark
     */
    public function __construct(array $midocoTextRemark = [])
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark[]
     */
    public function getMidocoTextRemark(): array
    {
        return $this->MidocoTextRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTextRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTextRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTextRemarkForArrayConstraintsFromSetMidocoTextRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getShortRemarkIdentifiersResponseMidocoTextRemarkItem) {
            // validation for constraint: itemType
            if (!$getShortRemarkIdentifiersResponseMidocoTextRemarkItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark) {
                $invalidValues[] = is_object($getShortRemarkIdentifiersResponseMidocoTextRemarkItem) ? get_class($getShortRemarkIdentifiersResponseMidocoTextRemarkItem) : sprintf('%s(%s)', gettype($getShortRemarkIdentifiersResponseMidocoTextRemarkItem), var_export($getShortRemarkIdentifiersResponseMidocoTextRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark[] $midocoTextRemark
     * @return \Pggns\MidocoApi\Bank\StructType\GetShortRemarkIdentifiersResponse
     */
    public function setMidocoTextRemark(array $midocoTextRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTextRemarkArrayErrorMessage = self::validateMidocoTextRemarkForArrayConstraintsFromSetMidocoTextRemark($midocoTextRemark))) {
            throw new InvalidArgumentException($midocoTextRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetShortRemarkIdentifiersResponse
     */
    public function addToMidocoTextRemark(\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTextRemark[] = $item;
        
        return $this;
    }
}
