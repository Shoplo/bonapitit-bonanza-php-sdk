<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShippingServicesType
{
	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $carrier;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $shippingServiceCost;
}