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
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingType;

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
	public $code;
}