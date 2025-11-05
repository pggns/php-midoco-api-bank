<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderIcalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderIcalDTO extends AbstractStructBase
{
    /**
     * The icalContent
     * @var string|null
     */
    protected ?string $icalContent = null;
    /**
     * The icalId
     * @var int|null
     */
    protected ?int $icalId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderIcalDTO
     * @uses OrderIcalDTO::setIcalContent()
     * @uses OrderIcalDTO::setIcalId()
     * @uses OrderIcalDTO::setOrderId()
     * @uses OrderIcalDTO::setUnitName()
     * @param string $icalContent
     * @param int $icalId
     * @param int $orderId
     * @param string $unitName
     */
    public function __construct(?string $icalContent = null, ?int $icalId = null, ?int $orderId = null, ?string $unitName = null)
    {
        $this
            ->setIcalContent($icalContent)
            ->setIcalId($icalId)
            ->setOrderId($orderId)
            ->setUnitName($unitName);
    }
    /**
     * Get icalContent value
     * @return string|null
     */
    public function getIcalContent(): ?string
    {
        return $this->icalContent;
    }
    /**
     * Set icalContent value
     * @param string $icalContent
     * @return \Pggns\MidocoApi\Bank\StructType\OrderIcalDTO
     */
    public function setIcalContent(?string $icalContent = null): self
    {
        // validation for constraint: string
        if (!is_null($icalContent) && !is_string($icalContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($icalContent, true), gettype($icalContent)), __LINE__);
        }
        $this->icalContent = $icalContent;
        
        return $this;
    }
    /**
     * Get icalId value
     * @return int|null
     */
    public function getIcalId(): ?int
    {
        return $this->icalId;
    }
    /**
     * Set icalId value
     * @param int $icalId
     * @return \Pggns\MidocoApi\Bank\StructType\OrderIcalDTO
     */
    public function setIcalId(?int $icalId = null): self
    {
        // validation for constraint: int
        if (!is_null($icalId) && !(is_int($icalId) || ctype_digit($icalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($icalId, true), gettype($icalId)), __LINE__);
        }
        $this->icalId = $icalId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Bank\StructType\OrderIcalDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\OrderIcalDTO
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
