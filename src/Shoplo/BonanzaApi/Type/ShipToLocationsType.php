<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShipToLocationsType
{
	/**
	 * @var string
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
	 * @Serializer\Type("string")
	 */
	public $shippingType;
}