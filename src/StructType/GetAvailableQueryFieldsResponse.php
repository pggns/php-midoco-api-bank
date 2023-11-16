<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableQueryFieldsResponse StructType
 * @subpackage Structs
 */
class GetAvailableQueryFieldsResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryField
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoQueryField[]
     */
    protected array $MidocoQueryField = [];
    /**
     * Constructor method for GetAvailableQueryFieldsResponse
     * @uses GetAvailableQueryFieldsResponse::setMidocoQueryField()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQueryField[] $midocoQueryField
     */
    public function __construct(array $midocoQueryField = [])
    {
        $this
            ->setMidocoQueryField($midocoQueryField);
    }
    /**
     * Get MidocoQueryField value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoQueryField[]
     */
    public function getMidocoQueryField(): array
    {
        return $this->MidocoQueryField;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryFieldForArrayConstraintsFromSetMidocoQueryField(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableQueryFieldsResponseMidocoQueryFieldItem) {
            // validation for constraint: itemType
            if (!$getAvailableQueryFieldsResponseMidocoQueryFieldItem instanceof \Pggns\MidocoApi\Bank\StructType\MidocoQueryField) {
                $invalidValues[] = is_object($getAvailableQueryFieldsResponseMidocoQueryFieldItem) ? get_class($getAvailableQueryFieldsResponseMidocoQueryFieldItem) : sprintf('%s(%s)', gettype($getAvailableQueryFieldsResponseMidocoQueryFieldItem), var_export($getAvailableQueryFieldsResponseMidocoQueryFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryField property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoQueryField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQueryField[] $midocoQueryField
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableQueryFieldsResponse
     */
    public function setMidocoQueryField(array $midocoQueryField = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryFieldArrayErrorMessage = self::validateMidocoQueryFieldForArrayConstraintsFromSetMidocoQueryField($midocoQueryField))) {
            throw new InvalidArgumentException($midocoQueryFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryField = $midocoQueryField;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoQueryField $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetAvailableQueryFieldsResponse
     */
    public function addToMidocoQueryField(\Pggns\MidocoApi\Bank\StructType\MidocoQueryField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\MidocoQueryField) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryField property can only contain items of type \Pggns\MidocoApi\Bank\StructType\MidocoQueryField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryField[] = $item;
        
        return $this;
    }
}