<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderLockReasonsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLockReasons--- returns a list of lock reason for the given lock reason
 * @subpackage Structs
 */
class GetOrderLockReasonsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO[]
     */
    protected array $MidocoOrderLockReason = [];
    /**
     * Constructor method for GetOrderLockReasonsResponse
     * @uses GetOrderLockReasonsResponse::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO[] $midocoOrderLockReason
     */
    public function __construct(array $midocoOrderLockReason = [])
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO[]
     */
    public function getMidocoOrderLockReason(): array
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderLockReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLockReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLockReasonForArrayConstraintsFromSetMidocoOrderLockReason(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderLockReasonsResponseMidocoOrderLockReasonItem) {
            // validation for constraint: itemType
            if (!$getOrderLockReasonsResponseMidocoOrderLockReasonItem instanceof \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO) {
                $invalidValues[] = is_object($getOrderLockReasonsResponseMidocoOrderLockReasonItem) ? get_class($getOrderLockReasonsResponseMidocoOrderLockReasonItem) : sprintf('%s(%s)', gettype($getOrderLockReasonsResponseMidocoOrderLockReasonItem), var_export($getOrderLockReasonsResponseMidocoOrderLockReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLockReason property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO[] $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrderLockReasonsResponse
     */
    public function setMidocoOrderLockReason(array $midocoOrderLockReason = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLockReasonArrayErrorMessage = self::validateMidocoOrderLockReasonForArrayConstraintsFromSetMidocoOrderLockReason($midocoOrderLockReason))) {
            throw new InvalidArgumentException($midocoOrderLockReasonArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO $item
     * @return \Pggns\MidocoApi\Bank\StructType\GetOrderLockReasonsResponse
     */
    public function addToMidocoOrderLockReason(\Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLockReason property can only contain items of type \Pggns\MidocoApi\Bank\StructType\OrderLockReasonDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLockReason[] = $item;
        
        return $this;
    }
}
