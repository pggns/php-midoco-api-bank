<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for documentType EnumType
 * @subpackage Enumerations
 */
class DocumentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BILLING'
     * @return string 'BILLING'
     */
    const VALUE_BILLING = 'BILLING';
    /**
     * Constant for value 'ITINE'
     * @return string 'ITINE'
     */
    const VALUE_ITINE = 'ITINE';
    /**
     * Constant for value 'DRAFT'
     * @return string 'DRAFT'
     */
    const VALUE_DRAFT = 'DRAFT';
    /**
     * Constant for value 'COLLECTIVE'
     * @return string 'COLLECTIVE'
     */
    const VALUE_COLLECTIVE = 'COLLECTIVE';
    /**
     * Return allowed values
     * @uses self::VALUE_BILLING
     * @uses self::VALUE_ITINE
     * @uses self::VALUE_DRAFT
     * @uses self::VALUE_COLLECTIVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BILLING,
            self::VALUE_ITINE,
            self::VALUE_DRAFT,
            self::VALUE_COLLECTIVE,
        ];
    }
}
