<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMDFiBuBuchungsSatz StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BMDFiBuBuchungsSatz extends AbstractStructBase
{
    /**
     * The satzart
     * @var string|null
     */
    protected ?string $satzart = null;
    /**
     * The konto
     * @var string|null
     */
    protected ?string $konto = null;
    /**
     * The gkonto
     * @var string|null
     */
    protected ?string $gkonto = null;
    /**
     * The belegnr
     * @var string|null
     */
    protected ?string $belegnr = null;
    /**
     * The extbelegnr
     * @var string|null
     */
    protected ?string $extbelegnr = null;
    /**
     * The belegdatum
     * @var string|null
     */
    protected ?string $belegdatum = null;
    /**
     * The valutadatum
     * @var string|null
     */
    protected ?string $valutadatum = null;
    /**
     * The freifeld_11
     * @var string|null
     */
    protected ?string $freifeld_11 = null;
    /**
     * The buchsymbol
     * @var string|null
     */
    protected ?string $buchsymbol = null;
    /**
     * The prozent
     * @var string|null
     */
    protected ?string $prozent = null;
    /**
     * The steuercode
     * @var string|null
     */
    protected ?string $steuercode = null;
    /**
     * The buchcode
     * @var string|null
     */
    protected ?string $buchcode = null;
    /**
     * The betrag
     * @var string|null
     */
    protected ?string $betrag = null;
    /**
     * The steuer
     * @var string|null
     */
    protected ?string $steuer = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * The kost
     * @var string|null
     */
    protected ?string $kost = null;
    /**
     * The kotraeger
     * @var string|null
     */
    protected ?string $kotraeger = null;
    /**
     * Constructor method for BMDFiBuBuchungsSatz
     * @uses BMDFiBuBuchungsSatz::setSatzart()
     * @uses BMDFiBuBuchungsSatz::setKonto()
     * @uses BMDFiBuBuchungsSatz::setGkonto()
     * @uses BMDFiBuBuchungsSatz::setBelegnr()
     * @uses BMDFiBuBuchungsSatz::setExtbelegnr()
     * @uses BMDFiBuBuchungsSatz::setBelegdatum()
     * @uses BMDFiBuBuchungsSatz::setValutadatum()
     * @uses BMDFiBuBuchungsSatz::setFreifeld_11()
     * @uses BMDFiBuBuchungsSatz::setBuchsymbol()
     * @uses BMDFiBuBuchungsSatz::setProzent()
     * @uses BMDFiBuBuchungsSatz::setSteuercode()
     * @uses BMDFiBuBuchungsSatz::setBuchcode()
     * @uses BMDFiBuBuchungsSatz::setBetrag()
     * @uses BMDFiBuBuchungsSatz::setSteuer()
     * @uses BMDFiBuBuchungsSatz::setText()
     * @uses BMDFiBuBuchungsSatz::setKost()
     * @uses BMDFiBuBuchungsSatz::setKotraeger()
     * @param string $satzart
     * @param string $konto
     * @param string $gkonto
     * @param string $belegnr
     * @param string $extbelegnr
     * @param string $belegdatum
     * @param string $valutadatum
     * @param string $freifeld_11
     * @param string $buchsymbol
     * @param string $prozent
     * @param string $steuercode
     * @param string $buchcode
     * @param string $betrag
     * @param string $steuer
     * @param string $text
     * @param string $kost
     * @param string $kotraeger
     */
    public function __construct(?string $satzart = null, ?string $konto = null, ?string $gkonto = null, ?string $belegnr = null, ?string $extbelegnr = null, ?string $belegdatum = null, ?string $valutadatum = null, ?string $freifeld_11 = null, ?string $buchsymbol = null, ?string $prozent = null, ?string $steuercode = null, ?string $buchcode = null, ?string $betrag = null, ?string $steuer = null, ?string $text = null, ?string $kost = null, ?string $kotraeger = null)
    {
        $this
            ->setSatzart($satzart)
            ->setKonto($konto)
            ->setGkonto($gkonto)
            ->setBelegnr($belegnr)
            ->setExtbelegnr($extbelegnr)
            ->setBelegdatum($belegdatum)
            ->setValutadatum($valutadatum)
            ->setFreifeld_11($freifeld_11)
            ->setBuchsymbol($buchsymbol)
            ->setProzent($prozent)
            ->setSteuercode($steuercode)
            ->setBuchcode($buchcode)
            ->setBetrag($betrag)
            ->setSteuer($steuer)
            ->setText($text)
            ->setKost($kost)
            ->setKotraeger($kotraeger);
    }
    /**
     * Get satzart value
     * @return string|null
     */
    public function getSatzart(): ?string
    {
        return $this->satzart;
    }
    /**
     * Set satzart value
     * @param string $satzart
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setSatzart(?string $satzart = null): self
    {
        // validation for constraint: string
        if (!is_null($satzart) && !is_string($satzart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($satzart, true), gettype($satzart)), __LINE__);
        }
        $this->satzart = $satzart;
        
        return $this;
    }
    /**
     * Get konto value
     * @return string|null
     */
    public function getKonto(): ?string
    {
        return $this->konto;
    }
    /**
     * Set konto value
     * @param string $konto
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setKonto(?string $konto = null): self
    {
        // validation for constraint: string
        if (!is_null($konto) && !is_string($konto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($konto, true), gettype($konto)), __LINE__);
        }
        $this->konto = $konto;
        
        return $this;
    }
    /**
     * Get gkonto value
     * @return string|null
     */
    public function getGkonto(): ?string
    {
        return $this->gkonto;
    }
    /**
     * Set gkonto value
     * @param string $gkonto
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setGkonto(?string $gkonto = null): self
    {
        // validation for constraint: string
        if (!is_null($gkonto) && !is_string($gkonto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gkonto, true), gettype($gkonto)), __LINE__);
        }
        $this->gkonto = $gkonto;
        
        return $this;
    }
    /**
     * Get belegnr value
     * @return string|null
     */
    public function getBelegnr(): ?string
    {
        return $this->belegnr;
    }
    /**
     * Set belegnr value
     * @param string $belegnr
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setBelegnr(?string $belegnr = null): self
    {
        // validation for constraint: string
        if (!is_null($belegnr) && !is_string($belegnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegnr, true), gettype($belegnr)), __LINE__);
        }
        $this->belegnr = $belegnr;
        
        return $this;
    }
    /**
     * Get extbelegnr value
     * @return string|null
     */
    public function getExtbelegnr(): ?string
    {
        return $this->extbelegnr;
    }
    /**
     * Set extbelegnr value
     * @param string $extbelegnr
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setExtbelegnr(?string $extbelegnr = null): self
    {
        // validation for constraint: string
        if (!is_null($extbelegnr) && !is_string($extbelegnr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extbelegnr, true), gettype($extbelegnr)), __LINE__);
        }
        $this->extbelegnr = $extbelegnr;
        
        return $this;
    }
    /**
     * Get belegdatum value
     * @return string|null
     */
    public function getBelegdatum(): ?string
    {
        return $this->belegdatum;
    }
    /**
     * Set belegdatum value
     * @param string $belegdatum
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setBelegdatum(?string $belegdatum = null): self
    {
        // validation for constraint: string
        if (!is_null($belegdatum) && !is_string($belegdatum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegdatum, true), gettype($belegdatum)), __LINE__);
        }
        $this->belegdatum = $belegdatum;
        
        return $this;
    }
    /**
     * Get valutadatum value
     * @return string|null
     */
    public function getValutadatum(): ?string
    {
        return $this->valutadatum;
    }
    /**
     * Set valutadatum value
     * @param string $valutadatum
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setValutadatum(?string $valutadatum = null): self
    {
        // validation for constraint: string
        if (!is_null($valutadatum) && !is_string($valutadatum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valutadatum, true), gettype($valutadatum)), __LINE__);
        }
        $this->valutadatum = $valutadatum;
        
        return $this;
    }
    /**
     * Get freifeld value
     * @return freifeld
     */
    public function getFreifeld_11(): ?string
    {
        return $this->{'freifeld-11'};
    }
    /**
     * Set freifeld value
     * @param freifeld $freifeld
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setFreifeld_11(?string $freifeld_11 = null): self
    {
        // validation for constraint: string
        if (!is_null($freifeld_11) && !is_string($freifeld_11)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freifeld_11, true), gettype($freifeld_11)), __LINE__);
        }
        $this->freifeld_11 = $this->{'freifeld-11'} = $freifeld_11;
        
        return $this;
    }
    /**
     * Get buchsymbol value
     * @return string|null
     */
    public function getBuchsymbol(): ?string
    {
        return $this->buchsymbol;
    }
    /**
     * Set buchsymbol value
     * @param string $buchsymbol
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setBuchsymbol(?string $buchsymbol = null): self
    {
        // validation for constraint: string
        if (!is_null($buchsymbol) && !is_string($buchsymbol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buchsymbol, true), gettype($buchsymbol)), __LINE__);
        }
        $this->buchsymbol = $buchsymbol;
        
        return $this;
    }
    /**
     * Get prozent value
     * @return string|null
     */
    public function getProzent(): ?string
    {
        return $this->prozent;
    }
    /**
     * Set prozent value
     * @param string $prozent
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setProzent(?string $prozent = null): self
    {
        // validation for constraint: string
        if (!is_null($prozent) && !is_string($prozent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prozent, true), gettype($prozent)), __LINE__);
        }
        $this->prozent = $prozent;
        
        return $this;
    }
    /**
     * Get steuercode value
     * @return string|null
     */
    public function getSteuercode(): ?string
    {
        return $this->steuercode;
    }
    /**
     * Set steuercode value
     * @param string $steuercode
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setSteuercode(?string $steuercode = null): self
    {
        // validation for constraint: string
        if (!is_null($steuercode) && !is_string($steuercode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($steuercode, true), gettype($steuercode)), __LINE__);
        }
        $this->steuercode = $steuercode;
        
        return $this;
    }
    /**
     * Get buchcode value
     * @return string|null
     */
    public function getBuchcode(): ?string
    {
        return $this->buchcode;
    }
    /**
     * Set buchcode value
     * @param string $buchcode
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setBuchcode(?string $buchcode = null): self
    {
        // validation for constraint: string
        if (!is_null($buchcode) && !is_string($buchcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buchcode, true), gettype($buchcode)), __LINE__);
        }
        $this->buchcode = $buchcode;
        
        return $this;
    }
    /**
     * Get betrag value
     * @return string|null
     */
    public function getBetrag(): ?string
    {
        return $this->betrag;
    }
    /**
     * Set betrag value
     * @param string $betrag
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setBetrag(?string $betrag = null): self
    {
        // validation for constraint: string
        if (!is_null($betrag) && !is_string($betrag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($betrag, true), gettype($betrag)), __LINE__);
        }
        $this->betrag = $betrag;
        
        return $this;
    }
    /**
     * Get steuer value
     * @return string|null
     */
    public function getSteuer(): ?string
    {
        return $this->steuer;
    }
    /**
     * Set steuer value
     * @param string $steuer
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setSteuer(?string $steuer = null): self
    {
        // validation for constraint: string
        if (!is_null($steuer) && !is_string($steuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($steuer, true), gettype($steuer)), __LINE__);
        }
        $this->steuer = $steuer;
        
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
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
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
     * Get kost value
     * @return string|null
     */
    public function getKost(): ?string
    {
        return $this->kost;
    }
    /**
     * Set kost value
     * @param string $kost
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setKost(?string $kost = null): self
    {
        // validation for constraint: string
        if (!is_null($kost) && !is_string($kost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kost, true), gettype($kost)), __LINE__);
        }
        $this->kost = $kost;
        
        return $this;
    }
    /**
     * Get kotraeger value
     * @return string|null
     */
    public function getKotraeger(): ?string
    {
        return $this->kotraeger;
    }
    /**
     * Set kotraeger value
     * @param string $kotraeger
     * @return \Pggns\MidocoApi\Bank\StructType\BMDFiBuBuchungsSatz
     */
    public function setKotraeger(?string $kotraeger = null): self
    {
        // validation for constraint: string
        if (!is_null($kotraeger) && !is_string($kotraeger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kotraeger, true), gettype($kotraeger)), __LINE__);
        }
        $this->kotraeger = $kotraeger;
        
        return $this;
    }
}
