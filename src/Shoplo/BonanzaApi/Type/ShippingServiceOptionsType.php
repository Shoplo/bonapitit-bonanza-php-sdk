<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShippingServiceOptionsType
{
	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $buyerPaysForLabel;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingType;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 */
	public $freeShipping;

	/**
	 * @var double
	 *
	 * @Serializer\Type("double")
	 */
	public $shippingServiceCost;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingServiceType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingService;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingCarrierType
	 *
	 * @Serializer\Type("string")
	 */
	public $shippingCarrier;
}