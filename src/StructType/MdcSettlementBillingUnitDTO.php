<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MdcSettlementBillingUnitDTO extends AbstractStructBase
{
    /**
     * The mdcSettlementBillingId
     * @var int|null
     */
    protected ?int $mdcSettlementBillingId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MdcSettlementBillingUnitDTO
     * @uses MdcSettlementBillingUnitDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingUnitDTO::setUnitName()
     * @param int $mdcSettlementBillingId
     * @param string $unitName
     */
    public function __construct(?int $mdcSettlementBillingId = null, ?string $unitName = null)
    {
        $this
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setUnitName($unitName);
    }
    /**
     * Get mdcSettlementBillingId value
     * @return int|null
     */
    public function getMdcSettlementBillingId(): ?int
    {
        return $this->mdcSettlementBillingId;
    }
    /**
     * Set mdcSettlementBillingId value
     * @param int $mdcSettlementBillingId
     * @return \Pggns\MidocoApi\Bank\StructType\MdcSettlementBillingUnitDTO
     */
    public function setMdcSettlementBillingId(?int $mdcSettlementBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mdcSettlementBillingId) && !(is_int($mdcSettlementBillingId) || ctype_digit($mdcSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mdcSettlementBillingId, true), gettype($mdcSettlementBillingId)), __LINE__);
        }
        $this->mdcSettlementBillingId = $mdcSettlementBillingId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Bank\StructType\MdcSettlementBillingUnitDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
