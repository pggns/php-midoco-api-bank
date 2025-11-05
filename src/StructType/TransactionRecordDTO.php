<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRecordDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransactionRecordDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The exportTime
     * @var string|null
     */
    protected ?string $exportTime = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The transactionDate
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * The transactionNo
     * @var int|null
     */
    protected ?int $transactionNo = null;
    /**
     * The transactionRecordId
     * @var int|null
     */
    protected ?int $transactionRecordId = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * Constructor method for TransactionRecordDTO
     * @uses TransactionRecordDTO::setCreationTime()
     * @uses TransactionRecordDTO::setCreationUser()
     * @uses TransactionRecordDTO::setExportTime()
     * @uses TransactionRecordDTO::setIsExported()
     * @uses TransactionRecordDTO::setRepositoryId()
     * @uses TransactionRecordDTO::setTransactionDate()
     * @uses TransactionRecordDTO::setTransactionNo()
     * @uses TransactionRecordDTO::setTransactionRecordId()
     * @uses TransactionRecordDTO::setTransactionType()
     * @param string $creationTime
     * @param int $creationUser
     * @param string $exportTime
     * @param bool $isExported
     * @param int $repositoryId
     * @param string $transactionDate
     * @param int $transactionNo
     * @param int $transactionRecordId
     * @param string $transactionType
     */
    public function __construct(?string $creationTime = null, ?int $creationUser = null, ?string $exportTime = null, ?bool $isExported = null, ?int $repositoryId = null, ?string $transactionDate = null, ?int $transactionNo = null, ?int $transactionRecordId = null, ?string $transactionType = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setExportTime($exportTime)
            ->setIsExported($isExported)
            ->setRepositoryId($repositoryId)
            ->setTransactionDate($transactionDate)
            ->setTransactionNo($transactionNo)
            ->setTransactionRecordId($transactionRecordId)
            ->setTransactionType($transactionType);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get exportTime value
     * @return string|null
     */
    public function getExportTime(): ?string
    {
        return $this->exportTime;
    }
    /**
     * Set exportTime value
     * @param string $exportTime
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setExportTime(?string $exportTime = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTime) && !is_string($exportTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTime, true), gettype($exportTime)), __LINE__);
        }
        $this->exportTime = $exportTime;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
        return $this;
    }
    /**
     * Get transactionNo value
     * @return int|null
     */
    public function getTransactionNo(): ?int
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param int $transactionNo
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setTransactionNo(?int $transactionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNo) && !(is_int($transactionNo) || ctype_digit($transactionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get transactionRecordId value
     * @return int|null
     */
    public function getTransactionRecordId(): ?int
    {
        return $this->transactionRecordId;
    }
    /**
     * Set transactionRecordId value
     * @param int $transactionRecordId
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setTransactionRecordId(?int $transactionRecordId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionRecordId) && !(is_int($transactionRecordId) || ctype_digit($transactionRecordId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionRecordId, true), gettype($transactionRecordId)), __LINE__);
        }
        $this->transactionRecordId = $transactionRecordId;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Bank\StructType\TransactionRecordDTO
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
}
