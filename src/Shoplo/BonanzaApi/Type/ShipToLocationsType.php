<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShipToLocationsType
{
	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\RegionType
	 *
	 * @Serializer\Type("string")
	 */
	public $region;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $shippingServiceCost;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingType;
}