<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of an individual commodity or class of content in a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 *
 * @property \FedEx\RateService\SimpleType\FreightClassType|string $FreightClass
 * @property \FedEx\RateService\SimpleType\PhysicalPackagingType|string $Packaging
 * @property string $Description
 * @property Weight $Weight
 * @property Dimensions $Dimensions
 * @property Volume $Volume

 */
class FreightShipmentLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'FreightShipmentLineItem';

    /**
     * Freight class for this line item.
     *
     * @param \FedEx\RateService\SimpleType\FreightClassType|string $freightClass
     * @return $this
     */
    public function setFreightClass($freightClass)
    {
        $this->values['FreightClass'] = $freightClass;
        return $this;
    }

    /**
     * Specification of handling-unit packaging for this commodity or class line.
     *
     * @param \FedEx\RateService\SimpleType\PhysicalPackagingType|string $packaging
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->values['Packaging'] = $packaging;
        return $this;
    }

    /**
     * Customer-provided description for this commodity or class line.
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['Description'] = $description;
        return $this;
    }

    /**
     * Weight for this commodity or class line.
     *
     * @param Weight $weight
     * @return $this
     */
    public function setWeight(Weight $weight)
    {
        $this->values['Weight'] = $weight;
        return $this;
    }

    /**
     * FED EX INTERNAL USE ONLY - Individual line item dimensions.
     *
     * @param Dimensions $dimensions
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->values['Dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Volume (cubic measure) for this commodity or class line.
     *
     * @param Volume $volume
     * @return $this
     */
    public function setVolume(Volume $volume)
    {
        $this->values['Volume'] = $volume;
        return $this;
    }

    
}
