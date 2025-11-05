<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePaymentTransaction StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOnlinePaymentTransaction extends OnlinePaymentTransactionDTO
{
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorArgs = null;
    /**
     * The originalErrorCode
     * @var string|null
     */
    protected ?string $originalErrorCode = null;
    /**
     * Constructor method for MidocoOnlinePaymentTransaction
     * @uses MidocoOnlinePaymentTransaction::setErrorArgs()
     * @uses MidocoOnlinePaymentTransaction::setOriginalErrorCode()
     * @param string[] $errorArgs
     * @param string $originalErrorCode
     */
    public function __construct(?array $errorArgs = null, ?string $originalErrorCode = null)
    {
        $this
            ->setErrorArgs($errorArgs)
            ->setOriginalErrorCode($originalErrorCode);
    }
    /**
     * Get errorArgs value
     * @return string[]
     */
    public function getErrorArgs(): ?array
    {
        return $this->errorArgs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorArgs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorArgs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorArgsForArrayConstraintFromSetErrorArgs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOnlinePaymentTransactionErrorArgsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoOnlinePaymentTransactionErrorArgsItem)) {
                $invalidValues[] = is_object($midocoOnlinePaymentTransactionErrorArgsItem) ? get_class($midocoOnlinePaymentTransactionErrorArgsItem) : sprintf('%s(%s)', gettype($midocoOnlinePaymentTransactionErrorArgsItem), var_export($midocoOnlinePaymentTransactionErrorArgsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorArgs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorArgs value
     * @throws InvalidArgumentException
     * @param string[] $errorArgs
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOnlinePaymentTransaction
     */
    public function setErrorArgs(?array $errorArgs = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArgsArrayErrorMessage = self::validateErrorArgsForArrayConstraintFromSetErrorArgs($errorArgs))) {
            throw new InvalidArgumentException($errorArgsArrayErrorMessage, __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Add item to errorArgs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOnlinePaymentTransaction
     */
    public function addToErrorArgs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorArgs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorArgs[] = $item;
        
        return $this;
    }
    /**
     * Get originalErrorCode value
     * @return string|null
     */
    public function getOriginalErrorCode(): ?string
    {
        return $this->originalErrorCode;
    }
    /**
     * Set originalErrorCode value
     * @param string $originalErrorCode
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoOnlinePaymentTransaction
     */
    public function setOriginalErrorCode(?string $originalErrorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originalErrorCode) && !is_string($originalErrorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalErrorCode, true), gettype($originalErrorCode)), __LINE__);
        }
        $this->originalErrorCode = $originalErrorCode;
        
        return $this;
    }
}
