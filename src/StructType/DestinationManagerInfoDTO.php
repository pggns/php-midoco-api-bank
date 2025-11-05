<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationManagerInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinationManagerInfoDTO extends AbstractStructBase
{
    /**
     * The abo
     * @var bool|null
     */
    protected ?bool $abo = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * Constructor method for DestinationManagerInfoDTO
     * @uses DestinationManagerInfoDTO::setAbo()
     * @uses DestinationManagerInfoDTO::setCreationDate()
     * @uses DestinationManagerInfoDTO::setItemId()
     * @uses DestinationManagerInfoDTO::setLink()
     * @param bool $abo
     * @param string $creationDate
     * @param int $itemId
     * @param string $link
     */
    public function __construct(?bool $abo = null, ?string $creationDate = null, ?int $itemId = null, ?string $link = null)
    {
        $this
            ->setAbo($abo)
            ->setCreationDate($creationDate)
            ->setItemId($itemId)
            ->setLink($link);
    }
    /**
     * Get abo value
     * @return bool|null
     */
    public function getAbo(): ?bool
    {
        return $this->abo;
    }
    /**
     * Set abo value
     * @param bool $abo
     * @return \Pggns\MidocoApi\Bank\StructType\DestinationManagerInfoDTO
     */
    public function setAbo(?bool $abo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($abo) && !is_bool($abo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($abo, true), gettype($abo)), __LINE__);
        }
        $this->abo = $abo;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Bank\StructType\DestinationManagerInfoDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\DestinationManagerInfoDTO
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
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Bank\StructType\DestinationManagerInfoDTO
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
}
