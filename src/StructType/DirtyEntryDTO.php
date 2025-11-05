<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirtyEntryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DirtyEntryDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The dirtyEntryId
     * @var int|null
     */
    protected ?int $dirtyEntryId = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * Constructor method for DirtyEntryDTO
     * @uses DirtyEntryDTO::setAccountId()
     * @uses DirtyEntryDTO::setCreationTimestamp()
     * @uses DirtyEntryDTO::setDirtyEntryId()
     * @uses DirtyEntryDTO::setEntryId()
     * @uses DirtyEntryDTO::setPlanId()
     * @param string $accountId
     * @param string $creationTimestamp
     * @param int $dirtyEntryId
     * @param string $entryId
     * @param string $planId
     */
    public function __construct(?string $accountId = null, ?string $creationTimestamp = null, ?int $dirtyEntryId = null, ?string $entryId = null, ?string $planId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCreationTimestamp($creationTimestamp)
            ->setDirtyEntryId($dirtyEntryId)
            ->setEntryId($entryId)
            ->setPlanId($planId);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Bank\StructType\DirtyEntryDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Bank\StructType\DirtyEntryDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get dirtyEntryId value
     * @return int|null
     */
    public function getDirtyEntryId(): ?int
    {
        return $this->dirtyEntryId;
    }
    /**
     * Set dirtyEntryId value
     * @param int $dirtyEntryId
     * @return \Pggns\MidocoApi\Bank\StructType\DirtyEntryDTO
     */
    public function setDirtyEntryId(?int $dirtyEntryId = null): self
    {
        // validation for constraint: int
        if (!is_null($dirtyEntryId) && !(is_int($dirtyEntryId) || ctype_digit($dirtyEntryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dirtyEntryId, true), gettype($dirtyEntryId)), __LINE__);
        }
        $this->dirtyEntryId = $dirtyEntryId;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Bank\StructType\DirtyEntryDTO
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Bank\StructType\DirtyEntryDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
}
