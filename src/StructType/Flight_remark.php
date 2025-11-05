<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for flight-remark StructType
 * Meta information extracted from the WSDL
 * - documentation: remark like freetext info, markable for print on customer documents, internal or service position
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Flight_remark extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - documentation: remark position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The print_allowed
     * Meta information extracted from the WSDL
     * - documentation: remark allowed to print
     * @var bool|null
     */
    protected ?bool $print_allowed = null;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - documentation: remark long text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The print_type
     * Meta information extracted from the WSDL
     * - documentation: remark print type
     * @var string|null
     */
    protected ?string $print_type = null;
    /**
     * The service_position
     * Meta information extracted from the WSDL
     * - documentation: remark service position
     * @var int|null
     */
    protected ?int $service_position = null;
    /**
     * Constructor method for flight-remark
     * @uses Flight_remark::setPosition()
     * @uses Flight_remark::setPrint_allowed()
     * @uses Flight_remark::setText()
     * @uses Flight_remark::setPrint_type()
     * @uses Flight_remark::setService_position()
     * @param int $position
     * @param bool $print_allowed
     * @param string $text
     * @param string $print_type
     * @param int $service_position
     */
    public function __construct(?int $position = null, ?bool $print_allowed = null, ?string $text = null, ?string $print_type = null, ?int $service_position = null)
    {
        $this
            ->setPosition($position)
            ->setPrint_allowed($print_allowed)
            ->setText($text)
            ->setPrint_type($print_type)
            ->setService_position($service_position);
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
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_remark
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
     * Get print_allowed value
     * @return bool|null
     */
    public function getPrint_allowed(): ?bool
    {
        return $this->{'print-allowed'};
    }
    /**
     * Set print_allowed value
     * @param bool $print_allowed
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_remark
     */
    public function setPrint_allowed(?bool $print_allowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($print_allowed) && !is_bool($print_allowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print_allowed, true), gettype($print_allowed)), __LINE__);
        }
        $this->print_allowed = $this->{'print-allowed'} = $print_allowed;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_remark
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
    /**
     * Get print_type value
     * @return string|null
     */
    public function getPrint_type(): ?string
    {
        return $this->{'print-type'};
    }
    /**
     * Set print_type value
     * @param string $print_type
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_remark
     */
    public function setPrint_type(?string $print_type = null): self
    {
        // validation for constraint: string
        if (!is_null($print_type) && !is_string($print_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($print_type, true), gettype($print_type)), __LINE__);
        }
        $this->print_type = $this->{'print-type'} = $print_type;
        
        return $this;
    }
    /**
     * Get service_position value
     * @return int|null
     */
    public function getService_position(): ?int
    {
        return $this->{'service-position'};
    }
    /**
     * Set service_position value
     * @param int $service_position
     * @return \Pggns\MidocoApi\Bank\StructType\Flight_remark
     */
    public function setService_position(?int $service_position = null): self
    {
        // validation for constraint: int
        if (!is_null($service_position) && !(is_int($service_position) || ctype_digit($service_position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($service_position, true), gettype($service_position)), __LINE__);
        }
        $this->service_position = $this->{'service-position'} = $service_position;
        
        return $this;
    }
}
