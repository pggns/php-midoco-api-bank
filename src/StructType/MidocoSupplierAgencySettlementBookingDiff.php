<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierAgencySettlementBookingDiff StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierAgencySettlementBookingDiff extends MidocoSupplierAgencySettlementBookingType
{
    /**
     * The taxRevenueDiff
     * @var float|null
     */
    protected ?float $taxRevenueDiff = null;
    /**
     * Constructor method for MidocoSupplierAgencySettlementBookingDiff
     * @uses MidocoSupplierAgencySettlementBookingDiff::setTaxRevenueDiff()
     * @param float $taxRevenueDiff
     */
    public function __construct(?float $taxRevenueDiff = null)
    {
        $this
            ->setTaxRevenueDiff($taxRevenueDiff);
    }
    /**
     * Get taxRevenueDiff value
     * @return float|null
     */
    public function getTaxRevenueDiff(): ?float
    {
        return $this->taxRevenueDiff;
    }
    /**
     * Set taxRevenueDiff value
     * @param float $taxRevenueDiff
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlementBookingDiff
     */
    public function setTaxRevenueDiff(?float $taxRevenueDiff = null): self
    {
        // validation for constraint: float
        if (!is_null($taxRevenueDiff) && !(is_float($taxRevenueDiff) || is_numeric($taxRevenueDiff))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxRevenueDiff, true), gettype($taxRevenueDiff)), __LINE__);
        }
        $this->taxRevenueDiff = $taxRevenueDiff;
        
        return $this;
    }
}
