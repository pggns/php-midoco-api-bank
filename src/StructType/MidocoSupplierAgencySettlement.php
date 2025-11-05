<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierAgencySettlement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSupplierAgencySettlement extends SupplierAgencySettlementDTO
{
    /**
     * The statusChecked
     * @var string|null
     */
    protected ?string $statusChecked = null;
    /**
     * The statusBooked
     * @var string|null
     */
    protected ?string $statusBooked = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The settlementParty
     * @var string|null
     */
    protected ?string $settlementParty = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The checkSum
     * @var float|null
     */
    protected ?float $checkSum = null;
    /**
     * The exchangeRateMasterData
     * @var float|null
     */
    protected ?float $exchangeRateMasterData = null;
    /**
     * The settlementTotalAmount
     * @var float|null
     */
    protected ?float $settlementTotalAmount = null;
    /**
     * The totalBookedAmount
     * @var float|null
     */
    protected ?float $totalBookedAmount = null;
    /**
     * The ignoredVsTotalPositions
     * @var string|null
     */
    protected ?string $ignoredVsTotalPositions = null;
    /**
     * The isDeletable
     * @var bool|null
     */
    protected ?bool $isDeletable = null;
    /**
     * Constructor method for MidocoSupplierAgencySettlement
     * @uses MidocoSupplierAgencySettlement::setStatusChecked()
     * @uses MidocoSupplierAgencySettlement::setStatusBooked()
     * @uses MidocoSupplierAgencySettlement::setStatus()
     * @uses MidocoSupplierAgencySettlement::setSupplierId()
     * @uses MidocoSupplierAgencySettlement::setSettlementParty()
     * @uses MidocoSupplierAgencySettlement::setChecked()
     * @uses MidocoSupplierAgencySettlement::setCheckSum()
     * @uses MidocoSupplierAgencySettlement::setExchangeRateMasterData()
     * @uses MidocoSupplierAgencySettlement::setSettlementTotalAmount()
     * @uses MidocoSupplierAgencySettlement::setTotalBookedAmount()
     * @uses MidocoSupplierAgencySettlement::setIgnoredVsTotalPositions()
     * @uses MidocoSupplierAgencySettlement::setIsDeletable()
     * @param string $statusChecked
     * @param string $statusBooked
     * @param string $status
     * @param string $supplierId
     * @param string $settlementParty
     * @param bool $checked
     * @param float $checkSum
     * @param float $exchangeRateMasterData
     * @param float $settlementTotalAmount
     * @param float $totalBookedAmount
     * @param string $ignoredVsTotalPositions
     * @param bool $isDeletable
     */
    public function __construct(?string $statusChecked = null, ?string $statusBooked = null, ?string $status = null, ?string $supplierId = null, ?string $settlementParty = null, ?bool $checked = null, ?float $checkSum = null, ?float $exchangeRateMasterData = null, ?float $settlementTotalAmount = null, ?float $totalBookedAmount = null, ?string $ignoredVsTotalPositions = null, ?bool $isDeletable = null)
    {
        $this
            ->setStatusChecked($statusChecked)
            ->setStatusBooked($statusBooked)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setSettlementParty($settlementParty)
            ->setChecked($checked)
            ->setCheckSum($checkSum)
            ->setExchangeRateMasterData($exchangeRateMasterData)
            ->setSettlementTotalAmount($settlementTotalAmount)
            ->setTotalBookedAmount($totalBookedAmount)
            ->setIgnoredVsTotalPositions($ignoredVsTotalPositions)
            ->setIsDeletable($isDeletable);
    }
    /**
     * Get statusChecked value
     * @return string|null
     */
    public function getStatusChecked(): ?string
    {
        return $this->statusChecked;
    }
    /**
     * Set statusChecked value
     * @param string $statusChecked
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setStatusChecked(?string $statusChecked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusChecked) && !is_string($statusChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusChecked, true), gettype($statusChecked)), __LINE__);
        }
        $this->statusChecked = $statusChecked;
        
        return $this;
    }
    /**
     * Get statusBooked value
     * @return string|null
     */
    public function getStatusBooked(): ?string
    {
        return $this->statusBooked;
    }
    /**
     * Set statusBooked value
     * @param string $statusBooked
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setStatusBooked(?string $statusBooked = null): self
    {
        // validation for constraint: string
        if (!is_null($statusBooked) && !is_string($statusBooked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusBooked, true), gettype($statusBooked)), __LINE__);
        }
        $this->statusBooked = $statusBooked;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get settlementParty value
     * @return string|null
     */
    public function getSettlementParty(): ?string
    {
        return $this->settlementParty;
    }
    /**
     * Set settlementParty value
     * @param string $settlementParty
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setSettlementParty(?string $settlementParty = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementParty) && !is_string($settlementParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementParty, true), gettype($settlementParty)), __LINE__);
        }
        $this->settlementParty = $settlementParty;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get checkSum value
     * @return float|null
     */
    public function getCheckSum(): ?float
    {
        return $this->checkSum;
    }
    /**
     * Set checkSum value
     * @param float $checkSum
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setCheckSum(?float $checkSum = null): self
    {
        // validation for constraint: float
        if (!is_null($checkSum) && !(is_float($checkSum) || is_numeric($checkSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($checkSum, true), gettype($checkSum)), __LINE__);
        }
        $this->checkSum = $checkSum;
        
        return $this;
    }
    /**
     * Get exchangeRateMasterData value
     * @return float|null
     */
    public function getExchangeRateMasterData(): ?float
    {
        return $this->exchangeRateMasterData;
    }
    /**
     * Set exchangeRateMasterData value
     * @param float $exchangeRateMasterData
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setExchangeRateMasterData(?float $exchangeRateMasterData = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRateMasterData) && !(is_float($exchangeRateMasterData) || is_numeric($exchangeRateMasterData))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRateMasterData, true), gettype($exchangeRateMasterData)), __LINE__);
        }
        $this->exchangeRateMasterData = $exchangeRateMasterData;
        
        return $this;
    }
    /**
     * Get settlementTotalAmount value
     * @return float|null
     */
    public function getSettlementTotalAmount(): ?float
    {
        return $this->settlementTotalAmount;
    }
    /**
     * Set settlementTotalAmount value
     * @param float $settlementTotalAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setSettlementTotalAmount(?float $settlementTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($settlementTotalAmount) && !(is_float($settlementTotalAmount) || is_numeric($settlementTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($settlementTotalAmount, true), gettype($settlementTotalAmount)), __LINE__);
        }
        $this->settlementTotalAmount = $settlementTotalAmount;
        
        return $this;
    }
    /**
     * Get totalBookedAmount value
     * @return float|null
     */
    public function getTotalBookedAmount(): ?float
    {
        return $this->totalBookedAmount;
    }
    /**
     * Set totalBookedAmount value
     * @param float $totalBookedAmount
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setTotalBookedAmount(?float $totalBookedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalBookedAmount) && !(is_float($totalBookedAmount) || is_numeric($totalBookedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalBookedAmount, true), gettype($totalBookedAmount)), __LINE__);
        }
        $this->totalBookedAmount = $totalBookedAmount;
        
        return $this;
    }
    /**
     * Get ignoredVsTotalPositions value
     * @return string|null
     */
    public function getIgnoredVsTotalPositions(): ?string
    {
        return $this->ignoredVsTotalPositions;
    }
    /**
     * Set ignoredVsTotalPositions value
     * @param string $ignoredVsTotalPositions
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setIgnoredVsTotalPositions(?string $ignoredVsTotalPositions = null): self
    {
        // validation for constraint: string
        if (!is_null($ignoredVsTotalPositions) && !is_string($ignoredVsTotalPositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ignoredVsTotalPositions, true), gettype($ignoredVsTotalPositions)), __LINE__);
        }
        $this->ignoredVsTotalPositions = $ignoredVsTotalPositions;
        
        return $this;
    }
    /**
     * Get isDeletable value
     * @return bool|null
     */
    public function getIsDeletable(): ?bool
    {
        return $this->isDeletable;
    }
    /**
     * Set isDeletable value
     * @param bool $isDeletable
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoSupplierAgencySettlement
     */
    public function setIsDeletable(?bool $isDeletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeletable) && !is_bool($isDeletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeletable, true), gettype($isDeletable)), __LINE__);
        }
        $this->isDeletable = $isDeletable;
        
        return $this;
    }
}
