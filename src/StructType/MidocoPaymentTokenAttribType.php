<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentTokenAttribType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPaymentTokenAttribType extends PaymentTokenAttribTypeDTO
{
    /**
     * The MidocoPaymentTokenAttribTypeDesc
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentTokenAttribTypeDesc
     * @var \Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO $MidocoPaymentTokenAttribTypeDesc = null;
    /**
     * Constructor method for MidocoPaymentTokenAttribType
     * @uses MidocoPaymentTokenAttribType::setMidocoPaymentTokenAttribTypeDesc()
     * @param \Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null)
    {
        $this
            ->setMidocoPaymentTokenAttribTypeDesc($midocoPaymentTokenAttribTypeDesc);
    }
    /**
     * Get MidocoPaymentTokenAttribTypeDesc value
     * @return \Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO|null
     */
    public function getMidocoPaymentTokenAttribTypeDesc(): ?\Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO
    {
        return $this->MidocoPaymentTokenAttribTypeDesc;
    }
    /**
     * Set MidocoPaymentTokenAttribTypeDesc value
     * @param \Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoPaymentTokenAttribType
     */
    public function setMidocoPaymentTokenAttribTypeDesc(?\Pggns\MidocoApi\Bank\StructType\PaymentTokenAttribDescriptionDTO $midocoPaymentTokenAttribTypeDesc = null): self
    {
        $this->MidocoPaymentTokenAttribTypeDesc = $midocoPaymentTokenAttribTypeDesc;
        
        return $this;
    }
}
