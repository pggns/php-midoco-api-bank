<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankOpenEntry StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBankOpenEntry extends DebitorAccountEntryType
{
    /**
     * The assignedAmount
     * @var float|null
     */
    protected ?float $assignedAmount = null;
    /**
     * The assignedOriginalAmount
     * @var float|null
     */
    protected ?float $assignedOriginalAmount = null;
    /**
     * Constructor method for MidocoBankOpenEntry
     * @uses MidocoBankOpenEntry::setAssignedAmount()
     * @uses MidocoBankOpenEntry::setAssignedOriginalAmount()
     * @param float $assignedAmount
     * @param float $assignedOriginalAmount
     */
    public function __construct(?float $assignedAmount = null, ?float $assignedOriginalAmount = null)
    {
        $this
            ->setAssignedAmount($assignedAmount)
            ->setAssignedOriginalAmount($assignedOriginalAmount);
    }
    /**
     * Get assignedAmount value
     * @return float|null
     */
    public function getAssignedAmount(): ?float
    {
        return $this->assignedAmount;
    }
    /**
     * Set assignedAmount value
     * @param float $assignedAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOpenEntry
     */
    public function setAssignedAmount(?float $assignedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($assignedAmount) && !(is_float($assignedAmount) || is_numeric($assignedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assignedAmount, true), gettype($assignedAmount)), __LINE__);
        }
        $this->assignedAmount = $assignedAmount;
        
        return $this;
    }
    /**
     * Get assignedOriginalAmount value
     * @return float|null
     */
    public function getAssignedOriginalAmount(): ?float
    {
        return $this->assignedOriginalAmount;
    }
    /**
     * Set assignedOriginalAmount value
     * @param float $assignedOriginalAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoBankOpenEntry
     */
    public function setAssignedOriginalAmount(?float $assignedOriginalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($assignedOriginalAmount) && !(is_float($assignedOriginalAmount) || is_numeric($assignedOriginalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($assignedOriginalAmount, true), gettype($assignedOriginalAmount)), __LINE__);
        }
        $this->assignedOriginalAmount = $assignedOriginalAmount;
        
        return $this;
    }
}
