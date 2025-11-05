<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericDetailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenericDetailDTO extends AbstractStructBase
{
    /**
     * The co2Emission
     * @var float|null
     */
    protected ?float $co2Emission = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The referencePosition
     * @var int|null
     */
    protected ?int $referencePosition = null;
    /**
     * The serviceDescription
     * @var string|null
     */
    protected ?string $serviceDescription = null;
    /**
     * Constructor method for GenericDetailDTO
     * @uses GenericDetailDTO::setCo2Emission()
     * @uses GenericDetailDTO::setItemId()
     * @uses GenericDetailDTO::setPosition()
     * @uses GenericDetailDTO::setReferencePosition()
     * @uses GenericDetailDTO::setServiceDescription()
     * @param float $co2Emission
     * @param int $itemId
     * @param int $position
     * @param int $referencePosition
     * @param string $serviceDescription
     */
    public function __construct(?float $co2Emission = null, ?int $itemId = null, ?int $position = null, ?int $referencePosition = null, ?string $serviceDescription = null)
    {
        $this
            ->setCo2Emission($co2Emission)
            ->setItemId($itemId)
            ->setPosition($position)
            ->setReferencePosition($referencePosition)
            ->setServiceDescription($serviceDescription);
    }
    /**
     * Get co2Emission value
     * @return float|null
     */
    public function getCo2Emission(): ?float
    {
        return $this->co2Emission;
    }
    /**
     * Set co2Emission value
     * @param float $co2Emission
     * @return \Pggns\MidocoApi\Bank\StructType\GenericDetailDTO
     */
    public function setCo2Emission(?float $co2Emission = null): self
    {
        // validation for constraint: float
        if (!is_null($co2Emission) && !(is_float($co2Emission) || is_numeric($co2Emission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($co2Emission, true), gettype($co2Emission)), __LINE__);
        }
        $this->co2Emission = $co2Emission;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Bank\StructType\GenericDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Bank\StructType\GenericDetailDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get referencePosition value
     * @return int|null
     */
    public function getReferencePosition(): ?int
    {
        return $this->referencePosition;
    }
    /**
     * Set referencePosition value
     * @param int $referencePosition
     * @return \Pggns\MidocoApi\Bank\StructType\GenericDetailDTO
     */
    public function setReferencePosition(?int $referencePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($referencePosition) && !(is_int($referencePosition) || ctype_digit($referencePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencePosition, true), gettype($referencePosition)), __LINE__);
        }
        $this->referencePosition = $referencePosition;
        
        return $this;
    }
    /**
     * Get serviceDescription value
     * @return string|null
     */
    public function getServiceDescription(): ?string
    {
        return $this->serviceDescription;
    }
    /**
     * Set serviceDescription value
     * @param string $serviceDescription
     * @return \Pggns\MidocoApi\Bank\StructType\GenericDetailDTO
     */
    public function setServiceDescription(?string $serviceDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceDescription) && !is_string($serviceDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDescription, true), gettype($serviceDescription)), __LINE__);
        }
        $this->serviceDescription = $serviceDescription;
        
        return $this;
    }
}
