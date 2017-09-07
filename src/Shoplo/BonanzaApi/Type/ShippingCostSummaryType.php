<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShippingCostSummaryType
{
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
	public $insuranceCost;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $insuranceType;

	/**
	 * @var string
	 *
	 * @Serializer\Type("string")
	 */
	public $packageSize;

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

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingLbs;

	/**
	 * @var int
	 *
	 * @Serializer\Type("int")
	 */
	public $shippingOz;

	/**
	 * @var ShippingServicesType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\ShippingServicesType")
	 */
	public $shippingServices;
}