<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierImportFormatRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierImportFormatRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencyImportFormat
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencyImportFormat
     * @var \Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO $MidocoSupplierAgencyImportFormat = null;
    /**
     * The loadAllWithFormatName
     * @var bool|null
     */
    protected ?bool $loadAllWithFormatName = null;
    /**
     * Constructor method for GetMidocoSupplierImportFormatRequest
     * @uses GetMidocoSupplierImportFormatRequest::setMidocoSupplierAgencyImportFormat()
     * @uses GetMidocoSupplierImportFormatRequest::setLoadAllWithFormatName()
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @param bool $loadAllWithFormatName
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null, ?bool $loadAllWithFormatName = null)
    {
        $this
            ->setMidocoSupplierAgencyImportFormat($midocoSupplierAgencyImportFormat)
            ->setLoadAllWithFormatName($loadAllWithFormatName);
    }
    /**
     * Get MidocoSupplierAgencyImportFormat value
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO|null
     */
    public function getMidocoSupplierAgencyImportFormat(): ?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO
    {
        return $this->MidocoSupplierAgencyImportFormat;
    }
    /**
     * Set MidocoSupplierAgencyImportFormat value
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setMidocoSupplierAgencyImportFormat(?\Pggns\MidocoApi\Bank\StructType\SupplierAgencyImportFormatDTO $midocoSupplierAgencyImportFormat = null): self
    {
        $this->MidocoSupplierAgencyImportFormat = $midocoSupplierAgencyImportFormat;
        
        return $this;
    }
    /**
     * Get loadAllWithFormatName value
     * @return bool|null
     */
    public function getLoadAllWithFormatName(): ?bool
    {
        return $this->loadAllWithFormatName;
    }
    /**
     * Set loadAllWithFormatName value
     * @param bool $loadAllWithFormatName
     * @return \Pggns\MidocoApi\Bank\StructType\GetMidocoSupplierImportFormatRequest
     */
    public function setLoadAllWithFormatName(?bool $loadAllWithFormatName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($loadAllWithFormatName) && !is_bool($loadAllWithFormatName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loadAllWithFormatName, true), gettype($loadAllWithFormatName)), __LINE__);
        }
        $this->loadAllWithFormatName = $loadAllWithFormatName;
        
        return $this;
    }
}
