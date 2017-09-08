<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class InternationalShippingServiceOptionType
{
	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingType;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShipToLocationType
	 *
	 * @Serializer\Type("string")
	 */
	public $shipToLocation;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $shippingServiceCost;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingCarrierType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingCarrier;
}