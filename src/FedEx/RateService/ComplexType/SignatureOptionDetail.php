<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data required for FedEx delivery signature services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\SignatureOptionType|string $OptionType
 * @property string $SignatureReleaseNumber

 */
class SignatureOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'SignatureOptionDetail';

    /**
     * Identifies the delivery signature services option selected by the customer for this shipment. See OptionType for the list of valid values.
     *
     * @param \FedEx\RateService\SimpleType\SignatureOptionType|string $optionType
     * @return $this
     */
    public function setOptionType($optionType)
    {
        $this->values['OptionType'] = $optionType;
        return $this;
    }

    /**
     * Identifies the delivery signature release authorization number.
     *
     * @param string $signatureReleaseNumber
     * @return $this
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->values['SignatureReleaseNumber'] = $signatureReleaseNumber;
        return $this;
    }

    
}
