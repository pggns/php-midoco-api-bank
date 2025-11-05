<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGetCompanyCustomerType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGetCompanyCustomerType extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer $MidocoCrmCustomer = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany $MidocoCrmCompany = null;
    /**
     * Constructor method for MidocoGetCompanyCustomerType
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCustomer()
     * @uses MidocoGetCompanyCustomerType::setMidocoCrmCompany()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany $midocoCrmCompany
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany $midocoCrmCompany = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoCrmCompany($midocoCrmCompany);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCustomer $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany $midocoCrmCompany
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoGetCompanyCustomerType
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Bank\StructType\MidocoCrmCompany $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
}
