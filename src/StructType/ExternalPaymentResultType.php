<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalPaymentResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: paymentDate, transactionNumber, amount, transactionType from request paymentId from order_payment resultCode is OK or errorCode from exception
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExternalPaymentResultType extends AbstractStructBase
{
    /**
     * The payment_date
     * @var string|null
     */
    protected ?string $payment_date = null;
    /**
     * The transaction_number
     * @var string|null
     */
    protected ?string $transaction_number = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The transaction_type
     * @var string|null
     */
    protected ?string $transaction_type = null;
    /**
     * The payment_id
     * @var int|null
     */
    protected ?int $payment_id = null;
    /**
     * The result_code
     * @var string|null
     */
    protected ?string $result_code = null;
    /**
     * Constructor method for ExternalPaymentResultType
     * @uses ExternalPaymentResultType::setPayment_date()
     * @uses ExternalPaymentResultType::setTransaction_number()
     * @uses ExternalPaymentResultType::setAmount()
     * @uses ExternalPaymentResultType::setTransaction_type()
     * @uses ExternalPaymentResultType::setPayment_id()
     * @uses ExternalPaymentResultType::setResult_code()
     * @param string $payment_date
     * @param string $transaction_number
     * @param float $amount
     * @param string $transaction_type
     * @param int $payment_id
     * @param string $result_code
     */
    public function __construct(?string $payment_date = null, ?string $transaction_number = null, ?float $amount = null, ?string $transaction_type = null, ?int $payment_id = null, ?string $result_code = null)
    {
        $this
            ->setPayment_date($payment_date)
            ->setTransaction_number($transaction_number)
            ->setAmount($amount)
            ->setTransaction_type($transaction_type)
            ->setPayment_id($payment_id)
            ->setResult_code($result_code);
    }
    /**
     * Get payment_date value
     * @return string|null
     */
    public function getPayment_date(): ?string
    {
        return $this->{'payment-date'};
    }
    /**
     * Set payment_date value
     * @param string $payment_date
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setPayment_date(?string $payment_date = null): self
    {
        // validation for constraint: string
        if (!is_null($payment_date) && !is_string($payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payment_date, true), gettype($payment_date)), __LINE__);
        }
        $this->payment_date = $this->{'payment-date'} = $payment_date;
        
        return $this;
    }
    /**
     * Get transaction_number value
     * @return string|null
     */
    public function getTransaction_number(): ?string
    {
        return $this->{'transaction-number'};
    }
    /**
     * Set transaction_number value
     * @param string $transaction_number
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setTransaction_number(?string $transaction_number = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_number) && !is_string($transaction_number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_number, true), gettype($transaction_number)), __LINE__);
        }
        $this->transaction_number = $this->{'transaction-number'} = $transaction_number;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get transaction_type value
     * @return string|null
     */
    public function getTransaction_type(): ?string
    {
        return $this->{'transaction-type'};
    }
    /**
     * Set transaction_type value
     * @param string $transaction_type
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setTransaction_type(?string $transaction_type = null): self
    {
        // validation for constraint: string
        if (!is_null($transaction_type) && !is_string($transaction_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transaction_type, true), gettype($transaction_type)), __LINE__);
        }
        $this->transaction_type = $this->{'transaction-type'} = $transaction_type;
        
        return $this;
    }
    /**
     * Get payment_id value
     * @return int|null
     */
    public function getPayment_id(): ?int
    {
        return $this->{'payment-id'};
    }
    /**
     * Set payment_id value
     * @param int $payment_id
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setPayment_id(?int $payment_id = null): self
    {
        // validation for constraint: int
        if (!is_null($payment_id) && !(is_int($payment_id) || ctype_digit($payment_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($payment_id, true), gettype($payment_id)), __LINE__);
        }
        $this->payment_id = $this->{'payment-id'} = $payment_id;
        
        return $this;
    }
    /**
     * Get result_code value
     * @return string|null
     */
    public function getResult_code(): ?string
    {
        return $this->{'result-code'};
    }
    /**
     * Set result_code value
     * @param string $result_code
     * @return \Pggns\MidocoApi\Bank\StructType\ExternalPaymentResultType
     */
    public function setResult_code(?string $result_code = null): self
    {
        // validation for constraint: string
        if (!is_null($result_code) && !is_string($result_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result_code, true), gettype($result_code)), __LINE__);
        }
        $this->result_code = $this->{'result-code'} = $result_code;
        
        return $this;
    }
}
