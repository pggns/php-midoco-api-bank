<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTransactionVat StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTransactionVat extends AbstractStructBase
{
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatDescription
     * @var float|null
     */
    protected ?float $vatDescription = null;
    /**
     * The forPrint
     * @var bool|null
     */
    protected ?bool $forPrint = null;
    /**
     * Constructor method for MidocoTransactionVat
     * @uses MidocoTransactionVat::setVatCode()
     * @uses MidocoTransactionVat::setVatAmount()
     * @uses MidocoTransactionVat::setVatDescription()
     * @uses MidocoTransactionVat::setForPrint()
     * @param string $vatCode
     * @param float $vatAmount
     * @param float $vatDescription
     * @param bool $forPrint
     */
    public function __construct(?string $vatCode = null, ?float $vatAmount = null, ?float $vatDescription = null, ?bool $forPrint = null)
    {
        $this
            ->setVatCode($vatCode)
            ->setVatAmount($vatAmount)
            ->setVatDescription($vatDescription)
            ->setForPrint($forPrint);
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatDescription value
     * @return float|null
     */
    public function getVatDescription(): ?float
    {
        return $this->vatDescription;
    }
    /**
     * Set vatDescription value
     * @param float $vatDescription
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat
     */
    public function setVatDescription(?float $vatDescription = null): self
    {
        // validation for constraint: float
        if (!is_null($vatDescription) && !(is_float($vatDescription) || is_numeric($vatDescription))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatDescription, true), gettype($vatDescription)), __LINE__);
        }
        $this->vatDescription = $vatDescription;
        
        return $this;
    }
    /**
     * Get forPrint value
     * @return bool|null
     */
    public function getForPrint(): ?bool
    {
        return $this->forPrint;
    }
    /**
     * Set forPrint value
     * @param bool $forPrint
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTransactionVat
     */
    public function setForPrint(?bool $forPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forPrint) && !is_bool($forPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forPrint, true), gettype($forPrint)), __LINE__);
        }
        $this->forPrint = $forPrint;
        
        return $this;
    }
}
